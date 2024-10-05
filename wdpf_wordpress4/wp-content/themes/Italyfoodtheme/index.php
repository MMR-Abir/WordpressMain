<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
    <meta name="author" content="www.zerotheme.com">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/zerogrid.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/slide.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/menu.css">
    <!-- Custom Fonts -->
    <link href="<?php echo get_template_directory_uri() ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <?php wp_head() ?>

</head>

<body <?php body_class(); ?>>
    <div class="wrap-body">
        <!--///////////////////////////////////////Top-->

        <!--////////////////////////////////////Header-->
        <?php get_header(); ?>


        <!--////////////////////////////////////Container-->
        <section id="container" class="sub-page">
            <div class="wrap-container zerogrid">
                <div class="crumbs">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="archive.html">Blog</a></li>
                    </ul>
                </div>
                <div id="main-content" class="col-2-3">
                    <div class="wrap-content">

                    <?php 
                    
                    if(have_posts()):
                        while(have_posts()):
                        the_post();
                        ?>

                        <article>
                        <div class="art-header">
                            <a href=" <?php the_permalink(); ?> ">
                                <h3><?php the_title(); ?> </h3>
                            </a>
                            <div class="info">Posted on <?php the_date('F d, Y'); ?> in: <a href="#"><?php the_category(); ?></a></div>
                        </div>
                        <div class="art-content">
                        <?php the_post_thumbnail(); ?>
                            <p> <?php the_content(); ?></p>
                        </div>
                        <a class="button button02" href="#">MORE</a>
                    </article>
                    
               <?php
                    endwhile;
                     endif;
                    
                    ?>

                       
                        
                    </div>
                </div>

                <?php get_sidebar(); ?>

            </div>
        </section>

        <!--////////////////////////////////////Footer-->
        <?php get_footer(); ?>


        <!-- js -->
        <script src="<?php echo get_template_directory_uri() ?>/js/classie.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/demo.js"></script>

    </div>

    <?php wp_footer(); ?>
</body>

</html>