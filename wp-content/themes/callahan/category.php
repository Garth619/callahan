<?php get_header(); ?>

	<div id="internal_main">
	
	<div class="container">
	
	<div class="internal_content_wrapper two_col">
		
		<div class="content_wrapper content">
			
			<h1 class="content_header"><?php single_cat_title();?></h1><!-- content_header -->
			
			<?php get_template_part( 'loop', 'index' ); ?>
			
		</div><!-- content_wrapper -->
		
		<?php get_sidebar('blog'); ?>
		
	</div><!-- internal_content_wrapper -->
	
	</div><!-- container -->
		
</div><!-- internal_main -->


<?php get_footer(); ?>


		
		
				





				
				
			
		
