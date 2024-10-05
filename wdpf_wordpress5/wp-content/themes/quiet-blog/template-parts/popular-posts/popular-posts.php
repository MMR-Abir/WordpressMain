<?php
$quiet_blog_popular_posts_section_title = get_theme_mod( 'popular_posts_section_title', 'Popular Posts' );
$quiet_blog_popular_posts_id 			  = get_theme_mod( 'popular_posts_category', '' );

$query = new WP_Query( apply_filters( 'quiet_blog_popular_posts_args', array(
	'post_type'           => 'post',
	'post_status'         => 'publish',
	'posts_per_page'      => 12,
	'cat'                 => $quiet_blog_popular_posts_id,
	'offset'              => 0,
	'ignore_sticky_posts' => 1
)));

$quiet_blog_posts_array = $query->get_posts();
$quiet_blog_show_popular_posts = count( $quiet_blog_posts_array ) > 0 && is_home();

if( get_theme_mod( 'popular_posts', true ) && $quiet_blog_show_popular_posts ){
	?>
	<section class="section-popular-posts">
		<div class="section-header">
			<h2 class="section-title"><?php echo esc_html($quiet_blog_popular_posts_section_title); ?></h2>
		</div><!-- .section-header -->

		<div class="columns-3 clear">
			<?php
			while ( $query->have_posts() ) : $query->the_post(); ?>

	            <article>
					<div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
						<a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
					</div><!-- .featured-image -->

		            <div class="entry-container">
		        		<?php if( 'post' == get_post_type() ): 
							$quiet_blog_categories_list = get_the_category_list( ' ' );
							if( $quiet_blog_categories_list ):
							printf( '<span class="cat-links">' . '%1$s' . '</span>', $quiet_blog_categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						endif; endif; ?>

						<header class="entry-header">
							<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						</header>

						<?php cube_blog_posted_on() ?>
			        </div><!-- .entry-container -->
	            </article>
		        
			<?php
			endwhile; 
			wp_reset_postdata(); ?>
		</div><!-- .columns-4 -->
	</section>
<?php } ?>