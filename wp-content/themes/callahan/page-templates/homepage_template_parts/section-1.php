<section id="section_one">
	
	<div class="sec_one_bg_wrapper">
	
		<div class="sec_one_left"></div><!-- sec_one_left -->
	
		<div class="sec_one_right">
			
			<?php $section_one_image = get_field( 'section_one_image' ); ?>
			
			<?php $section_one_image_webp = get_field( 'section_one_image_webp' ); ?>
			
			<picture>
			
				<source srcset="<?php echo $section_one_image_webp['url']; ?>" type="image/webp">
			
				<img src="<?php echo $section_one_image['url']; ?>" alt="<?php echo $section_one_image['alt']; ?>" />
				
			</picture>
				
		</div><!-- sec_one_right -->
	
	</div><!-- sec_one_bg_wrapper -->
	
	<div class="sec_one_content">
		
		<div class="sec_one_content_inner">
			
			<div class="sec_one_vid_wrapper">
				
				<div class="sec_one_video_thumb_wrapper">
					
					<a class="" href="https://www.youtube.com/embed/<?php the_field( 'section_one_youtube_video_id' ); ?>" data-lity>
					
						<?php echo file_get_contents("wp-content/themes/callahan/images/icon-play-button.svg"); ?>
						
						<?php $section_one_video_thumb = get_field( 'section_one_video_thumb' ); ?>
						
						<?php $section_one_video_thumb_webp = get_field( 'section_one_video_thumb_webp' ); ?>

						<picture>
							
							<source srcset="<?php echo $section_one_video_thumb_webp['url']; ?>" type="image/webp">
							
							<img class="video_thumb" src="<?php echo $section_one_video_thumb['url']; ?>" alt="<?php echo $section_one_video_thumb['alt']; ?>" />
							
						</picture>
						
					</a>
					
				</div><!-- sec_one_video_thumb_wrapper -->
				
				<span class="video_title"><?php the_field( 'section_one_video_description' ); ?></span><!-- video_title -->
				
				<a class="button video_button" href="#consultation"><?php the_field( 'section_one_button_verbiage' ); ?></a>
				
			</div><!-- sec_one_vid_wrapper -->
			
			<div class="sec_one_title_wrapper">
				
				<span class="sec_one_header"><?php the_field( 'section_one_header' ); ?></span>
				
				<a class="button title_button" href="#consultation"><?php the_field( 'section_one_button_verbiage' ); ?></a>
				
			</div><!-- sec_one_title_wrapper -->
			
		</div><!-- sec_one_content_inner -->
		
	</div><!-- sec_one_content -->
	
</section><!-- section_one -->

