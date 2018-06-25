<?php
/**
 * Theme: Flat Bootstrap
 * Template Name: Page - Press-Print
 * @package flat-bootstrap
 */

get_header(); ?>

<?php get_template_part( 'content', 'header' ); ?>

<div class="container">
    <div id="main-grid" class="row">
        <div id="primary" class="content-area col-md-12">
            <main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

                    <!-- add id of page id and class of .press_loop -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'press_loop' ); ?>>
                        <div class="entry-content">
                            <div class="row">
                                <div class="col-md-12 press-subhed">
                                    <p class="intro-graph">These articles relate to cases Mr. Kousouros has handled or
                                        is currently handling, as well as articles for which he was sought out as an
                                        expert in criminal law.</p>
                                </div>
                            </div><!-- row -->

                            <div class="row"><!-- Here starts the Press-Print column -->
                                <div class="entry-content-press1"><!-- -->
									<?php
									$press_print1_query = new WP_Query( 'category_name=print' );

									?>
									<?php while ( $press_print1_query->have_posts() ) : $press_print1_query->the_post(); ?>
                                        <!-- get content-press-print.php template part -->
										<?php get_template_part( 'content', 'press-print' ); ?>
									<?php endwhile; // end of the loop. ?>
									<?php wp_reset_postdata(); ?>

                                </div><!-- .entry-content-press1 -->

                            </div><!-- .row Print -->
                        </div><!-- .entry-content -->
                    </article><!-- #post-## -->

				<?php endwhile; // end of the big loop. ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
