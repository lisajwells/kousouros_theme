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
                <img class="home-slider-img fade-in" id="home-slider-img-1"
                     src="<?php echo content_url(); ?>/uploads/2018/06/New-York-Courts.jpg">
                <div class="home-blurbs">
                    <div class="home-blurb fadeInUpOutUp" id="home-blurb-1">
                        <p>Expert. Strategic. Criminal defense.</p>
                    </div>
                </div>
                <div class="home-blurbs">
                    <div class="home-blurb fadeInUpOutUp" id="home-blurb-2">
                        <p>Complex litigation for professionals and businesses.</p>
                    </div>
                </div>
                <div class="home-blurbs">
                    <div class="home-blurb fadeInUpOutUp" id="home-blurb-3">
                        <p>Distinguished Reputation. Excellent results.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <p class="specializing-hed">THE LAW OFFICES OF JAMES KOUSOUROS</p>
            <p class="specializing">For over 30 years we’ve been fighting and winning life changing battles in state and federal criminal courtrooms in New York and throughout the country.</p>
            <p class="specializing">While we handle all types of criminal cases, we specialize in white collar prosecutions and serve a wide ranging clientele - including doctors, pharmacists, CEO’s, designers, financial professionals, lawyers, and business owners.</p>
            <p class="specializing">Our team provides excellent legal representation as well as a personalized level of service that prioritizes our clients needs.</p>
        </div>

    </div>

    <div><!-- #primary -->
        <main><!-- #main -->
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'home-testimonials' ); ?>
				<?php get_template_part( 'content', 'home-represents' ); ?>
				<?php get_template_part( 'content', 'home-recent' ); ?>
				<?php get_template_part( 'content', 'home-press' ); ?>
				<?php get_template_part( 'content', 'home-notables' ); ?>
				<?php get_template_part( 'content', 'home-spectrum' ); ?>
				<?php get_template_part( 'content', 'home-profile' ); ?>

			<?php endwhile; // end of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>