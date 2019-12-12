<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal_main">
	
	<div class="container">
	
		<div class="att_bio_top">
			
			<div class="att_top_inner">
			
				<div class="att_bio_left">
					
					<div class="att_bio_img_wrapper">
						
						<?php $attorney_profile_image = get_field( 'attorney_profile_image' ); ?>
						
						<?php if ( $attorney_profile_image ) { ?>
						
							<img class="att_bio_img desktop" src="<?php echo $attorney_profile_image['url']; ?>" alt="<?php echo $attorney_profile_image['alt']; ?>" />
						
						<?php } ?>
					
					</div><!-- att_bio_img_wrapper -->
				
				</div><!-- att_bio_left -->
			
				<div class="att_bio_right">
					
					<h1 class="att_bio_header" ><?php the_title();?></h1><!-- att_bio_header -->
					
					<span class="position"><?php the_field( 'position' ); ?></span><!-- position -->
					
					<?php if ( $attorney_profile_image ) { ?>
						
							<img class="att_bio_img mobile" src="<?php echo $attorney_profile_image['url']; ?>" alt="<?php echo $attorney_profile_image['alt']; ?>" />
						
					<?php } ?>

					
				</div><!-- att_bio_right -->
			
			</div><!-- att_top_inner -->
			
		</div><!-- att_bio_top -->
		
		<div class="att_bio_bottom">
			
			<div class="att_bio_bottom_content content">
				
				<div class="att_bio_intro">
				
					<?php the_field( 'att_top_intro' ); ?>
				
				</div><!-- att_bio_intro -->

				
				<?php the_field( 'att_bottom_content' ); ?>
								
			</div><!-- att_bio_bottom_content -->
			
			<?php get_sidebar('attbio'); ?>
			
		</div><!-- att_bio_bottom -->
		
	</div><!-- container -->
		
</div><!-- internal_main -->
					 
					 	
<?php get_footer(); ?>
