<!-- look for video modal html in header.php -->
<!-- /* Most of this content is generated through Custom Fields added through Home Page edit. */ -->

<!-- HOME PRESS SECTION -->
<div class="section center" id="home-press"><!-- home press -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 home-press-col home-press-col-video1">
                <figure class="video" id="home-press-1-group">
                    <?php $video_id = get_field( 'home_press_video_id_1' ); ?>
                    <a href="#" data-toggle="modal" data-theVideo="https://www.youtube.com/embed/<?php echo $video_id?>">
                    <img class="youtube" alt="video of james kousouros" rel="<?php echo $video_id?>" src="https://img.youtube.com/vi/<?php echo $video_id?>/mqdefault.jpg" /></a>
                </figure>

            </div>

            <div class="col-md-4 home-press-col home-press-col-text">
                <h2><?php the_field('home_press_title'); ?></h2>
                <p><?php the_field('home_press_subhed'); ?></p>
            </div>


            <div class="col-md-4 home-press-col home-press-col-video2">
                <figure class="video" id="home-press-2-group">
                    <?php $video_id = get_field( 'home_press_video_id_2' ); ?>
                    <a href="#" data-toggle="modal" data-theVideo="https://www.youtube.com/embed/<?php echo $video_id?>">
                    <img class="youtube" alt="video of james kousouros" rel="<?php echo $video_id?>" src="https://img.youtube.com/vi/<?php echo $video_id?>/mqdefault.jpg" /></a>
                </figure>

            </div>


        </div><!-- row -->
            <p id="home_press_cta" style="text-align: center;"><a class="home-cta-a" href="<?php bloginfo('url'); ?>/in-the-news/tv-appearances/">More press/media</a></p>

    </div><!-- container -->
</div><!-- section home-press -->
