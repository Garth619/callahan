<?php get_header(); ?>

	<div id="internal_main">

	<div class="internal_banner">
		
		<div class="internal_banner_content">
			
			<span class="internal_banner_header">California’s Premier Litigation Law Attorneys</span><!-- internal_banner_header -->
			
			<a class="banner_button" href="#consultation">Free Consultation</a><!-- banner_button -->
			
		</div><!-- internal_banner_content -->
		
		<img src="<?php bloginfo('template_directory');?>/images/int-hero-desktop.jpg"/>
		
	</div><!-- internal_banner -->
	
	<div class="container">
	
	<div class="internal_content_wrapper two_col">
		
		<div class="content_wrapper content">
			
			<h1 class="content_header"><?php the_title();?></h1><!-- content_header -->
			
			<?php get_template_part( 'loop', 'page' ); ?>
			
		</div><!-- content_wrapper -->
		
		<?php get_sidebar(); ?>
		
	</div><!-- internal_content_wrapper -->
	
	</div><!-- container -->
		
</div><!-- internal_main -->


<?php get_footer(); ?>
