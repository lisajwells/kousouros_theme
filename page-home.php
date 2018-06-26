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
                 src="<?php echo content_url(); ?>/uploads/2018/06/Courts-New-York.jpg">
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
        <p class="specializing"><strong>The Law Offices of James Kousouros</strong> specializes in complex litigation, and all other areas of criminal law.</p>
        <p class="specializing"><strong>For over 30 years</strong> James Kousouros, the founder and principal of the firm, has been fighting and winning life changing battles in state and federal criminal courtrooms in New York and throughout the country.</p>
        <p class="specializing"><strong>He and his team</strong> have represented a wide range of clients, including doctors, pharmacists, CEO’s, designers, members of the financial community, lawyers and business owners.</p>
    </div>

</div>
<div class="section" id="home-slider">
    <div class="container" id="home-slider-container">
        <div class="row home-images">
            <img class="home-slider-img fade-in" id="home-slider-img-1"
                 src="<?php echo content_url(); ?>/uploads/2018/06/Courts-New-York.jpg">

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

    <div class="container"><p class="specializing2"><strong>The Law Offices of James Kousouros provides:</strong></p>
        <ul><li><strong>A full service team</strong> that specializes in complex litigation and all other areas of criminal law</li>
            <li><strong>Over 30 years experience</strong> fighting and winning life changing battles in state and federal courts</li>
            <li><strong>Representation for a wide range</strong> of clients, including doctors, pharmacists, CEO’s, designers, members of the financial community, lawyers and business owners</li></ul>
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
