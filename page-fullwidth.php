<?php
/**
 * Theme: Flat Bootstrap
 * 
 * Template Name: Page - Full Width
 *
 * Full-width page with no sidebar or container.
 *
 * This is the template for full width pages with no sidebar and no container. This 
 * page truly stretches the full width of the browser window. You should set a 
 * <div class="container"> before your content to keep it in line with the rest of 
 * the site content.
 *
 * @package flat-bootstrap
 */

get_header(); ?>

			<!-- removed content header (page title) in child -->

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page-fullwidth' ); ?>

				<!-- removed comments section in child -->

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php //get_sidebar(); ?>

<?php get_footer(); ?>
