<?php
/*
Template Name: Testimonials
*/

get_header(); ?>

<a name="testimonials_top"></a><?php get_template_part( 'content', 'header' ); ?>

<div class="container">
    <div id="main-grid" class="row">
<!--         <div id="contain-fixed-thing" class="col-md-2" >
            <div id="back-to-top-testimonials" data-spy="affix">
                <a class="smoothscroll" href="#testimonials_top">to top&nbsp;<span class="fa fa-angle-double-up">&nbsp;</span></a>
            </div>
        </div>
 -->
        <div id="primary" class="content-area col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">

            <main id="main" class="site-main" role="main">

                <!-- <?php //while ( have_posts() ) : the_post(); ?> --><!-- i don't know why we had this loop within a loop -->

                    <!-- add id of page id and class of .testimonial_loop -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'testimonial_loop' ); ?>>
                        <div class="entry-content">
                        <?php

                            $testimonial_query = new WP_Query( 'category_name=testimonials');

                            if ( $testimonial_query->have_posts() ) : while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
                                <blockquote class="testimonial-entry"><a id="testimonial-<?php the_ID(); ?>"></a><?php the_content(); ?>
                                <footer><?php  the_title();  ?></footer></blockquote>
                            <?php endwhile;
                                wp_reset_postdata();
                            else :
                                get_template_part( 'no-results' );
                            endif; ?>

                        </div><!-- .entry-content -->

                        <div id="back-to-top-testimonials">
                            <a class="smoothscroll" href="#testimonials_top">back to top&nbsp;<span class="fa fa-angle-double-up">&nbsp;</span></a>
                        </div>

                    </article><!-- #post-## -->

<!-- /*Extra small devices Phones (<768px)  -->
<!-- Small devices Tablets (≥768px)   -->
<!-- Medium devices Desktops (≥992px)   -->
<!-- Large devices Desktops (≥1200px) -->
<!-- */ -->
                    <div class="row" id="testimonials-badges-wrapper">
                        <div class="col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 col-lg-6 col-lg-offset-3" id="testimonials-badges">
                            <aside>
                                <div class="row">
                                    <div id="testimonials-badges-txt">
                                        <p>For more testimonials:</p>
                                    </div>
                                </div><!-- row -->

                                <div class="row testimonial-badges">
                                    <div class="testimonial-badge" id="testimonial_avvo_badge">
                                            <a rel="me" href="https://www.avvo.com/attorneys/10016-ny-james-kousouros-868249.html?cm_mmc=Avvo-_-Avvo_Badge-_-Micro-_-868249"><img alt="Avvo - Rate your Lawyer. Get Free Legal Advice." src="https://www.avvo.com/assets/microbadge.png" /></a>
                                    </div><!-- testimonial_avvo_badge -->
                                    <div class="testimonial-badge" id="testimonial_mh_badge">
                                            <a rel="me" href="http://www.martindale.com/James-Kousouros/429638-lawyer.htm?view=cr"><img src="<?php echo content_url(); ?>/uploads/2015/06/HomePageMHIcon200.png"></a>
                                    </div><!-- testimonial_mh_badge -->
                                </div><!-- row -->

                            </aside>
                        </div><!-- 6-col aside wrapper -->
                    </div><!-- row -->

                <?php //endwhile; // end of the loop. ?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .row -->

</div><!-- .container -->

<?php get_footer(); ?>
