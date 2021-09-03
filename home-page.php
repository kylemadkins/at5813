<?php
/*
Template Name: Home
Template Post Type: page
*/
get_header();
?>

<div class="columns fullscreen-columns">
    <div class="column home-left-column">
        <section class="about-me">
            <h1 data-aos="fade-up" data-aos-duration="1000">Hi, I'm Kyle.</h1>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">I'm a creative technologist currently living in Arkansas. I mostly work on the web, but I'm also interested in visual design, 3D, game development and VR/AR&mdash;among other things.</p>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">This website is an archive of the work I've done for AT 5813 Creative Coding as part of the University of Oklahoma's <a href="https://ouarttechonline.com">Master of Art and Technology</a> program.</p>
            <div class="about-me--link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300"><a href="/assignments">Assignments</a></div>
            <div class="about-me--link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"><a href="/projects">Projects</a></div>
        </section>
    </div>
    <div class="column home-right-column">
        <figure>
            <img class="full-img" alt="A picture of my virtual reality avatar in Facebook's Horizon Workrooms with a whiteboard in the background that reads, &quot;Hello, World&quot;" src="<?php echo get_template_directory_uri(); ?>/assets/images/vr.jpg">
            <figcaption>
                <div data-aos="fade-up" data-aos-duration="1000">A picture of my virtual reality avatar in <a href="https://www.oculus.com/experiences/quest/2514011888645651/">Facebook's Horizon Workrooms</a></div>
            </figcaption>
        </figure>
    </div>
</div>
