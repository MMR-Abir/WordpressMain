<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package quiet_blog
 */

?>
<?php
$quiet_blog_post_class = '';
if( !has_post_thumbnail() ){
	$quiet_blog_post_class = 'has-no-thumbnail';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( $quiet_blog_post_class ); ?>>
	<div class="blog-post-item">
        <div class="featured-post-item-inner">
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="featured-image">
					<?php cube_blog_post_thumbnail(); ?>
				</div><!-- .featured-image -->
			<?php endif; ?>
			<?php cube_blog_entry_footer(); ?>
		</div><!-- .featured-post-item-inner -->
        <div class="entry-container">
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
			</header><!-- .entry-header -->

			<?php cube_blog_posted_on(); ?>

			<?php $excerpt = get_the_excerpt();
			if ( !empty($excerpt) ) { ?>
				<div class="entry-content">
					<?php the_excerpt(); ?>
				</div><!-- .entry-content -->
			<?php } ?>
		</div><!-- .entry-container -->
	</div><!-- .blog-post-item -->
</article><!-- #post-<?php the_ID(); ?> -->