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
            <img class="home-slider-img fade-in" id="home-slider-img-1" src="<?php echo content_url(); ?>/uploads/2018/05/JK-7.jpg">
            <!-- <img class="home-slider-img fade-in" id="home-slider-img-2" src="<?php echo content_url(); ?>/uploads/2015/06/HomePage_Center.jpg"> -->
            <!-- <img class="home-slider-img fade-in" id="home-slider-img-3" src="<?php echo content_url(); ?>/uploads/2015/06/HomePage_Right.jpg"> -->

            <aside class="home-blurb fadeInUpOutUp" id="home-blurb-1">
                <p>Expert. Strategic. Criminal defense.</p>
            </aside>
            <aside class="home-blurb fadeInUpOutUp" id="home-blurb-2">
                <p>Complex litigation for professionals and businesses.</p>
            </aside>
            <aside class="home-blurb fadeInUpOutUp" id="home-blurb-3">
                <p>Distinguished Reputation. Excellent results.</p>
            </aside>
        </div>
    </div>

    <div class="container"><p id="specializing">For the past thirty years, James Kousouros has dedicated himself exclusively to the field of criminal defense. James and his team have extensive experience in complex criminal litigation, as well as in all other areas of criminal law. Our professional and business clientele have included doctors, pharmacists, CEOs, designers, members of the financial community, lawyers and business owners.</p></div>

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
