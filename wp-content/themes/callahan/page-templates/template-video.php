<?php 

/* Template Name: Video Center */

get_header(); ?>

<div id="internal_main">
	
	<div class="container no_banner">
	
		<h1 class="content_header center"><?php the_title();?></h1><!-- content_header -->
		
		<div class="video_wrapper">
			
			<?php if(get_field('videos_page')): ?>
			 
				<?php while(has_sub_field('videos_page')): ?>
			 
					<div class="single_video">
				
						<a href="https://www.youtube.com/embed/<?php the_sub_field( 'youtube_id' ); ?>" data-lity>
				
							<div class="single_video_thumb">
					
								<?php $video_image = get_sub_field( 'video_image' ); ?>
		
								<img src="<?php echo $video_image['url']; ?>" alt="<?php echo $video_image['alt']; ?>" />
	
								<div class="single_video_overlay">
						
									<?php echo file_get_contents("wp-content/themes/callahan/images/icon-play-button.svg"); ?>
						
								</div><!-- single_video_overlay -->
					
							</div><!-- single_video_thumb -->
				
							<span class="single_video_description"><?php the_sub_field( 'video_description' ); ?></span><!-- single_video_description -->
				
					</a>
				
				</div><!-- single_video -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- video_wrapper -->
		
	</div><!-- container -->
		
</div><!-- internal_main -->

<?php get_footer(); ?>
