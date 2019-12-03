<?php 

/* Template Name: PA Directory */

get_header(); ?>

<div id="internal_main">
	
	<div class="container no_banner">
	
		<h1 class="content_header center"><?php the_title();?></h1><!-- content_header -->
			
		<div class="pa_directory">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
			
		</div><!-- pa_directory -->
			
	</div><!-- container -->
		
</div><!-- internal_main -->


<?php get_footer(); ?>


		
		



