<?php get_header(); ?>

	<div id="internal_main">
	
	<div class="container">
	
	<div class="internal_content_wrapper two_col">
		
		<div class="content_wrapper content">
			
			<?php
	/*
	 * Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

			<h1 class="content_header">
				<?php if ( is_day() ) : ?>
						<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date() ); ?>
					<?php elseif ( is_month() ) : ?>
						<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
					<?php elseif ( is_year() ) : ?>
						<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
					<?php else : ?>
					<?php _e( 'Blog Archives', 'twentyten' ); ?>
				<?php endif; ?>
			</h1>
		
			<?php rewind_posts(); ?>
			
			<?php get_template_part( 'loop', 'index' ); ?>
			
		</div><!-- content_wrapper -->
		
		<?php get_sidebar('blog'); ?>
		
	</div><!-- internal_content_wrapper -->
	
	</div><!-- container -->
		
</div><!-- internal_main -->


<?php get_footer(); ?>


		

		




