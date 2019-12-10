<?php get_header(); ?>


<div id="internal_main">
	
	<div class="container">
	
	<div class="internal_content_wrapper two_col">
		
		<div class="content_wrapper content">
			
			<h1 class="content_header"><?php the_field( 'not_found_title','option'); ?></h1><!-- content_header -->
			
			<?php the_field( 'not_found_verbiage','option'); ?>
		
			<a class="goback"><?php the_field( 'not_found_button','option'); ?></a>

		</div><!-- content_wrapper -->
		
		<?php get_sidebar('blog'); ?>
		
	</div><!-- internal_content_wrapper -->
	
	</div><!-- container -->
		
</div><!-- internal_main -->

	
	

<?php get_footer(); ?>