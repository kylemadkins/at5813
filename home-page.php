<?php
/*
Template Name: Home
Template Post Type: page
*/
get_header();
?>

<div class="columns fullscreen-columns">
    <div class="column fullscreen--left-column">
        <section class="about-me">
            <h1 data-aos="fade-up" data-aos-duration="1000">Hi, I'm Kyle.</h1>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">I'm a creative technologist currently living in Arkansas. I mostly work on the web, but I'm also interested in visual design, 3D, game development and VR/AR&mdash;among other things.</p>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">This website is an archive of the work I've done for AT 5813 Creative Coding as part of the University of Oklahoma's <a href="https://ouarttechonline.com">Master of Art and Technology</a> program.</p>
            <div class="button-container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300"><a class="button-link" href="/assignments">Assignments</a></div>
            <div class="button-container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"><a class="button-link" href="/projects">Projects</a></div>
        </section>
    </div>
    <?php get_template_part( 'template-parts/right-column' ); ?>
</div>

<?php
get_footer();
