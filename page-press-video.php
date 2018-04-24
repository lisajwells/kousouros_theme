<?php
/**
* Theme: Flat Bootstrap
* Template Name: Page - Press-Video
* @package flat-bootstrap
*/

get_header(); ?>

<?php get_template_part( 'content', 'video-modal' ); ?>

<?php get_template_part( 'content', 'header' ); ?>

<div class="container">
	<div id="main-grid" class="row">
		<div id="primary" class="content-area-wide col-md-12">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

	        	<!-- add id of page id and class of .press_loop -->
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'press_loop' ); ?>

					<div class="row">
						<div class="col-md-12 press-subhed">
							<p class="intro-graph">Criminal defense lawyer James Kousouros has been sought after by leading network and cable news outlets for his commentary on trending legal matters.</p>
						</div>
					</div><!-- row -->

					<div class="row"><!-- Here starts the TV section -->
						<div class="col-md-12 press-subhed">
						</div>
					</div>

					<div class="row">
						<div class="entry-content-press3 col-md-5 col-md-offset-1">

							<?php
								$press_tv1_query = new WP_Query( 'category_name=tv&tag=tv-column-1');
							?>

							<?php while ( $press_tv1_query->have_posts() ) : $press_tv1_query->the_post(); ?>
									<?php get_template_part( 'content', 'press-tv' ); ?>
							<?php endwhile; // end of the loop. ?>
	            			<?php wp_reset_postdata(); ?>

						</div><!-- .entry-content-press3 -->

						<div class="entry-content-press3 col-md-5">

							<?php
								$press_tv2_intro = new WP_Query( 'category_name=tv&tag=tv-column-2-intro');
							?>
							<?php while ( $press_tv2_intro->have_posts() ) : $press_tv2_intro->the_post(); ?>
							<div class="press-tv-post press-tv-text">
								<p class="press-title"><?php  the_title();  ?></p>
								<p class="press-content"><?php echo get_the_content(); ?></p>
							</div>
							<?php endwhile; // end of the loop. ?>
	            			<?php wp_reset_postdata(); ?>

							<?php
								$press_tv2_query = new WP_Query( 'category_name=tv&tag=tv-column-2');
							?>

							<?php while ( $press_tv2_query->have_posts() ) : $press_tv2_query->the_post(); ?>
									<?php get_template_part( 'content', 'press-tv' ); ?>
							<?php endwhile; // end of the loop. ?>
	            			<?php wp_reset_postdata(); ?>

	            			<!-- link to youtube channel -->
	            			<div id="youtube-cta">
								<a target="_blank" href="https://www.youtube.com/channel/UCf0p1mIGTRomb7qsA9648oQ"><i class="fa fa-youtube-play"></i></a>
								<p class="press-title"><a href="https://www.youtube.com/channel/UCf0p1mIGTRomb7qsA9648oQ" target="_blank">Visit Mr. Kousouros’ YouTube channel for<br> additional news coverage</a></p>
	            			</div>

						</div><!-- .entry-content-press3 -->
					</div><!-- .row TV -->

				</article><!-- #post-## -->

				<?php endwhile; // end of the big loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
