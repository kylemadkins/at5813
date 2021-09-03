<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AT5813
 */

get_header();
?>

<div class="columns fullscreen-columns">
    <div class="column fullscreen--left-column">
        <section>
			<?php
			while ( have_posts() ) :
				the_post();
				$type = get_post_type( $post->ID ); ?>
				<?php get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
			?>
        </section>
    </div>
    <?php get_template_part( 'template-parts/right-column', null, array( 'class' => 'hide-desktop' ) ); ?>
</div>

<?php
get_footer();
