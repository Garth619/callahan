<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />



<style>

@import url("https://use.typekit.net/rzj3elv.css");

<?php the_field( 'review_css','option'); ?>

</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>

</head>

<body <?php body_class(); ?>>
	
	<header>
		
		<div class="header_inner">
		
		<div class="header_left">
			
			<a class="logo_link" href="<?php bloginfo('url');?>">
				
				<?php echo file_get_contents("wp-content/themes/callahan/images/logo.svg"); ?>
								
			</a><!-- logo_link -->
			
		</div><!-- header_left -->
		
		<div class="header_right">
			
			<div class="phone_nav_wrapper">
			
			<nav class="nav_desktop">
				
				<div class="menu_wrapper menu_wrapper_close">
				
					<div class="close_wrapper">
			
						<div class="close"></div><!-- close -->
			
							<span class="close_title">Close</span><!-- close_title -->
			
					</div><!-- close_wrapper -->
				
				</div><!-- menu_wrapper -->
				
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
				
			</nav>
			
			<div class="phone_wrapper">
				
				<span class="call_us">Call Us Today</span><!-- call_us -->
				
				
				
				<a class="phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('phone_number', 'option')); ?>"><?php the_field('phone_number', 'option');?></a><!-- phone -->
				
			</div><!-- phone_wrapper -->
			
			</div><!-- phone_nav_wrapper -->
			
			<div class="menu_wrapper">
				
			<div class="open_wrapper">
					
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
				<span class="menu_bar"></span><!-- menu_bar -->
					
				<span class="menu_title">Menu</span><!-- menu_title -->
					
			</div><!-- open_wrapper -->
				
			</div><!-- menu_wrapper -->
			
			<div class="internal_desktop_consulation">
				
				<a class="" href="#consultation">
					
					<span class="">Start Your Free Consultation</span>
					
				</a>
				
			</div><!-- internal_desktop_consulation -->
			
			<div class="internal_desktop_email">
				
				<a class="" href="#consultation">
					
					<?php echo file_get_contents("wp-content/themes/callahan/images/icon-mail.svg"); ?>
					
				</a>
				
			</div><!-- internal_desktop_email -->
			
		</div><!-- header_right -->
		
		</div><!-- header_inner -->
		
	</header><!-- homepage_header -->
				


			