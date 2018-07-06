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
                 src="<?php echo content_url(); ?>/uploads/2018/06/Courts-NY.jpg">
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

    <div class="container">
        <p class="specializing" style="font-family: 'Bank Gothic Light';     font-size: 24px;">THE LAW OFFICES OF JAMES KOUSOUROS</p>
        <p class="specializing">A criminal defense firm that has been fighting and winning life changing battles in state and federal courtrooms in New York, and throughout the country, for over 30 years.</p>
        <p class="specializing">A wide ranging client list that includes doctors, pharmacists, CEO’s, designers, financial professionals, lawyers, and business owners.</p>
        <p class="specializing">A team committed to providing the highest caliber of legal representation, and to prioritizing the client’s needs.</p>
    </div>

</div>
<div class="section" id="home-slider">
    <div class="container" id="home-slider-container">
        <div class="row home-images">
            <img class="home-slider-img fade-in" id="home-slider-img-1"
                 src="<?php echo content_url(); ?>/uploads/2018/06/New-York-Courts.jpg">
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

    <div class="container">
        <p class="specializing2" style="font-family: 'Bank Gothic Medium';     font-size: 24px;">THE LAW OFFICES OF JAMES KOUSOUROS</p>
        <p class="specializing2">A criminal defense firm that has been <strong>fighting and winning life changing battles</strong> in state and federal courtrooms in New York, and throughout the country, for over 30 years.</p>
        <p class="specializing2">A <strong>wide ranging client list</strong> that includes doctors, pharmacists, CEO’s, designers, financial professionals, lawyers, and business owners.</p>
        <p class="specializing2">A team committed to providing the <strong>highest caliber of legal representation,</strong> and to prioritizing the client’s needs.</p>
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
