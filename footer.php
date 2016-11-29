<?php
/**
 * Theme: Flat Bootstrap
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 * @package flat-bootstrap
 */
?>
	</div><!-- #content -->

	<?php // Start the footer area ?>
	<footer id="colophon" class="site-footer" role="contentinfo">

	<?php // Footer "sidebar" widget area (1 to 4 columns supported)
	get_sidebar( 'footer' );
	?>

	<?php // Check for footer navbar (optional)

	global $xsbf_theme_options;
	$nav_menu = null;
	if ( function_exists('has_nav_menu') AND has_nav_menu( 'footer' ) ) {
		$nav_menu = wp_nav_menu(
			array( 'theme_location' => 'footer',
			'container_div' 		=> 'div', //'nav' or 'div'
			'container_class' 		=> '', //class for <nav> or <div>
			'menu_class' 			=> 'list-inline dividers', //class for <ul>
			'walker' 				=> new wp_bootstrap_navwalker(),
			'fallback_cb'			=> '',
			'echo'					=> false, // we'll output the menu later
			'depth'					=> 1,
			)
		);

	// If not, default one
	} elseif ( $xsbf_theme_options['sample_footer_menu'] ) {
			$nav_menu = '
			<div class="sample-menu-footer-container">
			<ul id="sample-menu-footer" class="list-inline dividers">
			<li id="menu-item-sample-1" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-sample-1"><a class="smoothscroll" title="'
			.__( 'Back to top of page', 'flat-bootstrap' )
			.'" href="#page"><span class="fa fa-angle-up"></span> '
			.__( 'Top', 'flat-bootstrap' )
			.'</a></li>
			<li id="menu-item-sample-2" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-sample-2"><a title="'
			.__( 'Home', 'flat-bootstrap' )
			.'" href="' . get_home_url() . '">'
			.__( 'Home', 'flat-bootstrap' )
			.'</a></li>
			</ul>
			</div>';
	} //endif has_nav_menu()
?>

	<?php // Check for site credits (can be overriden in a child theme)
	$theme = wp_get_theme();
	$site_credits = sprintf( __( '&copy; %1$s %2$s. Theme by %3$s.', 'flat-bootstrap' ),
		date ( 'Y' ),
		'<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . get_bloginfo( 'name' ) . '</a>',
		'<a href="' . $theme->get( 'ThemeURI' ) . '" rel="profile" target="_blank">' . $theme->get( 'Author' ) . '</a>'
	);
	$site_credits = apply_filters( 'xsbf_credits', $site_credits );
 	?>

	<?php // If either footer nav or site credits, display them
	if ( $nav_menu OR $site_credits ) : ?>
		<div class="after-footer">
			<div class="container">
				<div id="back-to-top"><a class="smoothscroll" href="#page"><span class="fa fa-angle-double-up">&nbsp;</span></a>
				</div>

				<div class="row footer-content">
					<?php // Footer nav menu
					if ( $nav_menu ) : ?>
						<div class="footer-nav-menu pull-left col-md-4 col-sm-3 col-xs-4">
							<nav id="footer-navigation" class="secondary-navigation" role="navigation">
								<h1 class="menu-toggle sr-only"><?php _e( 'Footer Menu', 'flat-bootstrap' ); ?></h1>
								<?php echo $nav_menu; ?>
							</nav>
						</div><!-- .footer-nav-menu -->
					<?php endif; ?>

					<div id="contact-footer" class="col-md-4 col-sm-5 col-xs-4">
						<p>260&nbspMadison&nbspAvenue, 22nd&nbspfloor, <br>New&nbspYork, New&nbspYork 10016&#8209;2404</p>
						<p>Phone 212&#8209;532&#8209;1934 <br>Fax 212&#8209;532&#8209;1939</p>
					</div><!-- contact-footer -->

					<div id="social-footer" class="col-md-4 col-sm-4 col-xs-4">
						<p id="social-links">
							<div class="social-icon">
								<a target="_blank" href="https://www.facebook.com/kousouroslawoffice?fref=ts">
									<span class="white-icon-bg"></span><i class="fa fa-facebook-square"></i>
								</a>&nbsp;
							</div>
							<div class="social-icon">
								<a target="_blank" href="https://www.linkedin.com/pub/james-kousouros/29/72/a66">
									<span class="white-icon-bg"></span><i class="fa fa-linkedin-square"></i>
								</a>&nbsp;
							</div>
							<div class="social-icon" id="youtube-icon-dv">
								<a target="_blank" href="https://www.youtube.com/channel/UCf0p1mIGTRomb7qsA9648oQ">
									<span class="white-icon-bg"></span><i class="fa fa-youtube-play"></i>
								</a>
							</div>
						</p>


						<p>&copy; <?php echo date ( 'Y' ); ?>. All Rights Reserved.</p>
						<p id="linaweb">Site designed by <a href="http://donnaagajanian.dphoto.com/" target="_blank">Donna Agajanian</a> with <a href="http://lisajaynewells.com" target="_blank">Lisa Wells,</a> developer</p>
						<p>Attorney advertising. Prior results do not guarantee a similar outcome.</p>
					</div><!-- social-footer -->

				</div><!-- row footer-content -->

			</div><!-- .container -->
		</div><!-- .after-footer -->
	<?php endif; ?>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-69736661-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>
</html>
