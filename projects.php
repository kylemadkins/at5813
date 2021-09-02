<?php
/*
Template Name: Projects
Template Post Type: page
*/
get_header();
?>

    <main id="primary" class="site-main">

    <?php
    $query = new WP_Query( array(
        'post_type' => 'projects'
    ) );

    if ( $query->have_posts() ) :

        /* Start the Loop */
        while ( $query->have_posts() ) :
            $query->the_post();

            /*
            * Include the Post-Type-specific template for the content.
            * If you want to override this in a child theme, then include a file
            * called content-___.php (where ___ is the Post Type name) and that will be used instead.
            */
            get_template_part( 'template-parts/content', get_post_type() );

        endwhile;

    else :

        get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>

    </main><!-- #main -->
