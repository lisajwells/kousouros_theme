<?php
/**
 * Template Name: Home
 *
 * @package flat-bootstrap
 */

get_header(); ?>

<?php get_template_part( 'content', 'video-modal' ); ?>

<div class="section" id="home-slider">
    <div class="container" id="home-slider-container">
        <div class="row home-images">
            <img class="home-slider-img fade-in" id="home-slider-img-1" src="<?php echo content_url(); ?>/uploads/2015/06/HomePage_left.jpg">
            <img class="home-slider-img fade-in" id="home-slider-img-2" src="<?php echo content_url(); ?>/uploads/2015/06/HomePage_Center.jpg">
            <img class="home-slider-img fade-in" id="home-slider-img-3" src="<?php echo content_url(); ?>/uploads/2015/06/HomePage_Right.jpg">
        <aside class="home-blurb fadeInUpOutUp" id="home-blurb-1">
            <p>Expert. Strategic. Criminal defense.</p>
        </aside>
        <aside class="home-blurb fadeInUpOutUp" id="home-blurb-2">
            <p>Complex litigation for professionals and businesses.</p>
        </aside>
        <aside class="home-blurb fadeInUpOutUp" id="home-blurb-3">
            <p>Excellent results.</p>
        </aside>
        </div>
    </div>

    <div class="container"><p id="specializing">The Law Offices of James Kousouros is a criminal defense firm with deep experience in complex litigation. Our professional and business clientele have included doctors, pharmacists, CEOs, designers, members of the financial community, lawyers, and business owners. While our clients face a wide range of serious criminal charges and investigations, they share one thing in common: a life changing battle with a formidable government authority. James Kousouros, the founder and principal of the firm, has over 30 years of experience fighting those battles, and he has won multiple acquittals in state and federal courtrooms in New York and throughout the country. </p></div>

</div>

    <div><!-- #primary -->
        <main><!-- #main -->
			<?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'home-testimonials' ); ?>
                <?php get_template_part( 'content', 'home-represents' ); ?>
                <?php get_template_part( 'content', 'home-recent' ); ?>
                <?php get_template_part( 'content', 'home-press' ); ?>
                <?php //get_template_part( 'content', 'home-spectrum' ); ?>
                <?php get_template_part( 'content', 'home-notables' ); ?>
                <?php get_template_part( 'content', 'home-profile' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
