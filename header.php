<?php
/**
 * Theme: Flat Bootstrap
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 * @package flat-bootstrap
 */
?>
<?php ob_start(); ?><!-- so the cookie set doesn't try to resend header info -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-site-verification" content="OfS3N8IpSNuu7feezZ9m6dh6QPiRM8K2NX4BFgRonw0" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <script type="text/javascript">
        (function() {
            var trial = document.createElement('script');
            trial.type = 'text/javascript';
            trial.async = true;
            trial.src = 'https://easy.myfonts.net/v2/js?sid=99208(font-family=Bank+Gothic+Light)&sid=99209(font-family=Bank+Gothic+Medium)&key=cW00FwbQZH';
            var head = document.getElementsByTagName("head")[0];
            head.appendChild(trial);
        })();
    </script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- This modal once a day if home page -->
    <!-- splash modal -->
    <?php if ( is_front_page() && newday_cookie() ) : ?>
	    <div id="splashModal">
	        <div id="splashModal-content">
	            <img id="splashModal-image" src="<?php echo content_url(); ?>/images/klawbanner4.png">
	        </div>
	    </div>
	<?php endif; ?><!-- splash modal -->

	<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>
	
		<header id="masthead" class="site-header" role="banner">

			<?php
			/**
			  * CUSTOM HEADER IMAGE DISPLAYS HERE FOR THIS THEME, BUT CHILD THEMES MAY DISPLAY
			  * IT BELOW THE NAV BAR (VIA CONTENT-HEADER.PHP)
			  */
			global $xsbf_theme_options;
			$custom_header_location = isset ( $xsbf_theme_options['custom_header_location'] ) ? $xsbf_theme_options['custom_header_location'] : 'content-header';
			if ( $custom_header_location == 'header' ) :
			?>
				<div id="site-branding" class="site-branding">
					<div class="container site-branding-container">

							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<div id="header-image">
									<img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
								</div>
							</a>

					</div><!-- container -->
				</div><!-- .site-branding -->

			<?php			
			endif; // $custom_header_location
			?>			

			<?php
			/**
			  * ALWAYS DISPLAY THE NAV BAR
			  */
	 		?>	
			<nav id="site-navigation" class="main-navigation" role="navigation">

				<h1 class="menu-toggle sr-only screen-reader-text"><?php _e( 'Primary Menu', 'flat-bootstrap' ); ?></h1>
				<div class="skip-link"><a class="screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'flat-bootstrap' ); ?></a></div>

				<?php
				// Collapsed navbar menu toggle
				global $xsbf_theme_options;
				$navbar = '<div class="navbar ' . $xsbf_theme_options['navbar_classes'] . '">'
					.'<div class="container nav-container">'
		        	.'<div class="navbar-header">'
		        	// the button is the mobile hamburger menu
		          	.'<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">'
		            .'<span class="icon-bar"></span>'
		            .'<span class="icon-bar"></span>'
		            .'<span class="icon-bar"></span>'
		          	.'</button>';

				// Site title (Bootstrap "brand") in navbar. Hidden by default. Customizer will
				// display it if user turns of the main site title and tagline.
				$navbar .= '<a class="navbar-brand" href="'
					.esc_url( home_url( '/' ) )
					.'" rel="home">'
					.get_bloginfo( 'name' )
					.'</a>';
				
		        $navbar .= '</div><!-- navbar-header -->';

				// Display the desktop navbar
				$navbar .= wp_nav_menu( 
					array(  'theme_location' => 'primary',
					'container_class' => 'navbar-collapse collapse', //<nav> or <div> class
					'menu_class' => 'nav navbar-nav', //<ul> class
					'walker' => new wp_bootstrap_navwalker(),
					'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
					'echo'	=> false
					) 
				);
				echo apply_filters( 'xsbf_navbar', $navbar );
				?>

			</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
	
    <div class="container" id="search-container">
	    <form class="searchbox" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<span class="screen-reader-text sr-only"><?php _ex( 'Search for:', 'label', 'flat-bootstrap' ); ?></span>
            <input type="search" placeholder="Search..." class="searchbox-input" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" required >

            <span class="searchbox-submit">
            	<span class="glyphicon glyphicon-search"></span>
            	<input type="submit" value="">
            </span>
            
            <span class="searchbox-icon">
	            <span class="glyphicon glyphicon-search"></span>
            </span>
        </form>
    </div>

    <?php get_template_part( 'content', 'contact-modal' ); ?><!-- This modal available from clicking primary nav -->

	<?php // Set up the content area (but don't put it in a container) ?>	
	<div id="content" class="site-content"><!-- this closes at the beginning of the footer -->