<!DOCTYPE html>
<html lang="en"> 
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zBoomMusic Free Html5 Responsive Template</title>
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsive.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsiveslides.css" />
	
	
	
	<link href='./images/favicon.ico' rel='icon' type='image/x-icon'/>
	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>
</head>
<body>
<!--------------Header--------------->
        <?php get_header() ?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
                    <?php 
                    if(have_posts()):
                        while(have_posts()):
                            the_post();

                    ?>


					<article>
                        <?php the_post_thumbnail(); ?>
						
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_date('F d, Y'); ?>  with <a href="#">01 Commnets</a>]</div>
						<p> <?php the_content(); ?> </p>
					</article>

                    <?php 
                    endwhile;
                    endif;
                    ?>
					
					<?php comments_template(); ?> 
				</div>
			</div>
			<?php get_sidebar() ?>
		</div>
	</div>
</section>
<!--------------Footer--------------->
<?php get_footer() ?>

</body></html>