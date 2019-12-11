<?php get_header(); ?>

<div id="internal_main">

	<div class="internal_banner">
		
		<div class="internal_banner_content">
			
			<?php if(get_field('internal_banner_title')) :?>
			
				<?php 
					
					$yes = get_field('h1_tag'); if( $yes && in_array('Yes', $yes) ) : ?>
			
						<h1 class="internal_banner_header"><?php the_field( 'internal_banner_title'); ?></h1><!-- internal_banner_header -->
			
						<?php else: ?>
			
						<span class="internal_banner_header"><?php the_field( 'internal_banner_title'); ?></span><!-- internal_banner_header -->
			
					<?php endif;?>
			
				<?php else: ?>
				
				<?php $yes = get_field('h1_tag'); if( $yes && in_array('Yes', $yes) ) : ?>
				
				<h1 class="internal_banner_header"><?php the_field( 'global_internal_banner_title','option'); ?></h1><!-- internal_banner_header -->
			
				<?php else:?>
				
				<span class="internal_banner_header"><?php the_field( 'global_internal_banner_title','option'); ?></span><!-- internal_banner_header -->
				
				<?php endif;?>
			
			<?php endif;?>
			
			<a class="banner_button" href="#consultation">Free Consultation</a><!-- banner_button -->
			
		</div><!-- internal_banner_content -->
		
		<?php $global_internal_banner_image = get_field( 'global_internal_banner_image','option'); ?>
		
		<?php $internal_banner = get_field( 'internal_banner' ); ?>
		
		<?php if ( $internal_banner ) : ?>
			
			<img src="<?php echo $internal_banner['url']; ?>" alt="<?php echo $internal_banner['alt']; ?>" />
		
		<?php else: ?>
			
			<img src="<?php echo $global_internal_banner_image['url']; ?>" alt="<?php echo $global_internal_banner_image['alt']; ?>" />
			
			<?php endif; ?>
		
		
		
	</div><!-- internal_banner -->
	
	<div class="container">
	
	<div class="internal_content_wrapper two_col">
		
		<div class="content_wrapper content">
			
			<?php $yes = get_field('h1_tag'); if( $yes && in_array('Yes', $yes) ) : ?>
			
				<h2 class="content_header"><?php the_title();?></h2><!-- content_header -->
			
			<?php else: ?>
			
				<h1 class="content_header"><?php the_title();?></h1><!-- content_header -->
			
			<?php endif;?>
			
			<?php get_template_part( 'loop', 'page' ); ?>
			
		</div><!-- content_wrapper -->
		
		<?php get_sidebar(); ?>
		
	</div><!-- internal_content_wrapper -->
	
	</div><!-- container -->
		
</div><!-- internal_main -->


<?php get_footer(); ?>
