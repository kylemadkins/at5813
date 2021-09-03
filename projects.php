<?php
/*
Template Name: Projects
Template Post Type: page
*/
get_header();
?>

<div class="columns fullscreen-columns">
    <div class="column fullscreen--left-column">
        <section>
            <div class="home-link" data-aos="fade-up" data-aos-duration="1000"><a class="button-link" href="/">Home</a></div>
			<h1 data-aos="fade-up" data-aos-duration="1000">Projects</h1>
			<?php
            $query = new WP_Query( array(
                'post_type' => 'projects',
                'orderby' => 'date',
                'order' => 'ASC'
            ) );
			if ( $query->have_posts() ) :
                $i = 100;
				while ( $query->have_posts() ) :
                    $i += 100;
					$query->the_post(); ?>
                    <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo $i; ?>" class="entry-title button-container"><a class="button-link" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<?php endwhile;
			endif;
			?>
        </section>
    </div>
    <?php get_template_part( 'template-parts/right-column' ); ?>
</div>

<?php
get_footer();
