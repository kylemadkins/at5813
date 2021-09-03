<?php
/*
Template Name: Home
Template Post Type: page
*/
get_header();
?>

<div class="columns fullscreen-columns">
    <div class="column">
        <section class="about-me">
            <h1>Hi, I'm Kyle.</h1>
            <p>I'm a creative technologist currently living in Arkansas. I mostly work on the web, but I'm also interested in visual design, 3D, game development and VR/AR&mdash;among other things.</p>
            <p>This website is an archive of the work I've done for AT 5813 Creative Coding as part of the University of Oklahoma's <a href="https://ouarttechonline.com">Master of Art and Technology</a> program.</p>
            <a class="about-me--link" href="/assignments">Assignments</a>
            <a class="about-me--link" href="/projects">Projects</a>
        </section>
    </div>
    <div class="column home-page-right">
        <img class="full-img" alt="A picture of my virtual reality avatar in Facebook's Horizon Workrooms with a whiteboard in the background that reads, &quot;Hello, World&quot;" src="<?php echo get_template_directory_uri(); ?>/assets/images/vr.jpg">
    </div>
</div>
