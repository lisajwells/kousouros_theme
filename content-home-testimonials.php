<!-- /* Most of this content is generated through Custom Fields added through Home Page edit. */ -->

<!-- HOME TESTIMONIALS SECTION -->
<div class="section bg-darkgray" id="home-testimonials"><!-- home testimonials -->
    <div class="container"><div class="row">

        <div class="col-md-4"><img src="<?php echo content_url(); ?>/uploads/2015/06/HomePage_Center.jpg" alt="James Kousouros"></div>

        <div class="col-md-8 home-testimonials-hed-carousel">

            <h2><?php the_field('home_testimonials_title'); ?></h2>

            <div class="row"><!-- carousel row -->
                <?php $testimonial_query = new WP_Query( 'tag=excerpt-home&posts_per_page=8');  ?>



                <!-- THE TEXT CAROUSEL -->
                <div id="home-testimonials-carousel" class="carousel slide col-md-12" data-ride="carousel" data-interval="false">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#home-testimonials-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#home-testimonials-carousel" data-slide-to="1"></li>
                        <li data-target="#home-testimonials-carousel" data-slide-to="2"></li>
                        <li data-target="#home-testimonials-carousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <div class="item active">
                            <?php $counter = 0; ?>
                            <?php while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
                                <?php $counter++; ?>
                                <?php if($counter < 3) : ?>
                                    <div class="col-md-6">
                                        <blockquote><?php the_excerpt(); ?><footer><?php  the_title();  ?></footer></blockquote>
                                    </div><!-- col-4 -->
                                <?php endif; ?>
                            <?php endwhile; // end of the loop. ?>
                        </div>

                        <div class="item">
                            <?php $counter = 0; ?>
                            <?php while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
                                <?php $counter++; ?>
                                <?php if($counter > 2 && $counter < 5) : ?>
                                    <div class="col-md-6">
                                        <blockquote><?php the_excerpt(); ?><footer><?php  the_title();  ?></footer></blockquote>
                                    </div><!-- col-4 -->
                                <?php endif; ?>
                            <?php endwhile; // end of the loop. ?>
                        </div>

                        <div class="item">
                            <?php $counter = 0; ?>
                            <?php while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
                                <?php $counter++; ?>
                                <?php if($counter > 4 && $counter < 7) : ?>
                                    <div class="col-md-6">
                                        <blockquote><?php the_excerpt(); ?><footer><?php  the_title();  ?></footer></blockquote>
                                    </div><!-- col-4 -->
                                <?php endif; ?>
                            <?php endwhile; // end of the loop. ?>
                        </div>

                        <div class="item">
                            <?php $counter = 0; ?>
                            <?php while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
                                <?php $counter++; ?>
                                <?php if($counter > 6 && $counter < 9) : ?>
                                    <div class="col-md-6">
                                        <blockquote><?php the_excerpt(); ?><footer><?php  the_title();  ?></footer></blockquote>
                                    </div><!-- col-4 -->
                                <?php endif; ?>
                            <?php endwhile; // end of the loop. ?>
                        </div>

                    <!-- /* Restore original Post Data */ -->
                    <?php  wp_reset_postdata();  ?>

                    </div><!-- carousel inner -->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#home-testimonials-carousel" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#home-testimonials-carousel" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div><!-- home-testimonials-carousel -->
                <!-- THE TEXT CAROUSEL -->

            </div><!-- carousel .row -->
            <div class="row testimonials-btn-row">
                <p class="testimonials-button"><a class="home-cta-a home-cta-a-white" href="<?php bloginfo('url'); ?>/testimonials">More Testimonials</a></p>
            </div>
        </div>
    </div></div><!-- .container -->
</div><!-- section testimonials