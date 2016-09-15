<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.fullPage.js"></script>
	
	<link href='https://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/jquery.fullPage.css" />

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['page1', 'page2', 'page3', 'page4', 'page5'],
				sectionsColor: ['#000', '#000', '#000', '#000', '#000'],
				css3: true
			});

			$.fn.fullpage.setKeyboardScrolling(true);
			$.fn.fullpage.setAllowScrolling(true, 'down, right');

			$(".fullpage-wrapper").css("position", "absolute");
			<?php if ( !(is_front_page() && is_home() )): ?>
					$(".hamburger div").css("background", "#ccc");
					$(".header-bar.home-logo").css("-webkit-filter", "invert(1)");
					$(".header-bar.home-logo").css("filter", "invert(1)");
					$(".category-menus a").css("color", "#000");
			<?php else: ?>
					$(".hamburger div").css("background", "#fff");
			<?php endif; ?>

			$(".hamburger").click(function() {
				$(this).toggleClass("close");
				$(".headerdropdown").toggleClass("opened");
				$(".slide").toggleClass("opened");
				$(".site-main").toggleClass("opened");
			});

		});
	</script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>
		<?php
		if ( is_front_page() && is_home() ): ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> 
				<img class="home-logo" src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
		</a>
	<?php endif;?>

	<div class="hamburger">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>

	<?php if ( !(is_front_page() && is_home() )): ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> 
			<img class="header-bar home-logo" src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>">
		</a>
	<?php endif; ?>
	<div class="headerdropdown">
		<div class="header-left">
			<ul>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> 
				<img class="home-logo" src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" 
					style="opacity:
					<?php if ( !(is_front_page() && is_home() )): ?>
						1 
					<?php else: ?>
						0 
					<?php endif; ?>"/></a><!-- .home-logo in dropdown for positioning-->
				
				<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<nav id="site-navigation" class="primary-nav" role="navigation">
				    <?php // Primary navigation menu.
				    wp_nav_menu( array(
				    	'menu_class'     => 'nav-menu',
				    	'theme_location' => 'primary',
				    	) );
				    	?>
				    </nav><!-- .primary-nav -->
				<?php endif; ?>
				<?php if ( has_nav_menu( 'secondary' ) ) : ?>
					<nav id="site-navigation" class="secondary-nav" role="navigation">
				    <?php // Secondary navigation menu.
				    wp_nav_menu( array(
				    	'menu_class'     => 'nav-menu',
				    	'theme_location' => 'secondary',
				    	) );
				    	?>
				    </nav><!-- .secondary-nav -->
				<?php endif; ?>
			</ul>
		</div><!-- .header-left -->

		<div id="widget-area" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
			<div class="social-media-cluster">
				<a href="#" class="social-media-icon"><i class="fa fa-facebook-square fa-2x"></i></a>
				<a href="#" class="social-media-icon"><i class="fa fa-twitter fa-2x"></i></a>
				<a href="#" class="social-media-icon"><i class="fa fa-instagram fa-2x"></i></a>
				<!-- <a href="#" class="social-media-icon"><i class="fa fa-pinterest fa-2x"></i></a> -->
			</div>
		</div><!-- .widget-area -->
	</div>

		<div id="content" class="site-content">
