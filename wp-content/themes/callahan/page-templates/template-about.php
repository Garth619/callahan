<?php 

/* Template Name: About */

get_header(); ?>

<div id="internal_main">
	
	<div class="container no_banner">
	
		<div class="about_top_wrapper">
			
			<div class="about_left">
				
				<div class="about_left_inner">
					
					<div class="about_left_content">
				
			 <h1 class="about_header"><?php the_title();?></h1><!-- about_header -->
			 
			 <div class="about_intro_wrapper">
				 
				 <?php the_field( 'about_intro' ); ?>
				 
			 </div><!-- about_intro_wrapper -->
			 
			 </div><!-- about_left_content -->
			 
			 <div class="about_video_wrapper">
					
					<a class="" href="https://www.youtube.com/embed/<?php the_field( 'youtube_id_about' ); ?>" data-lity>
					
					<div class="about_video_thumb">
						
						<?php $video_thumbnail = get_field( 'video_thumbnail' ); ?>

						<img class="about_thumb" src="<?php echo $video_thumbnail['url']; ?>" alt="<?php echo $video_thumbnail['alt']; ?>" />
						
						<div class="about_video_overlay">
							
							<?php echo file_get_contents("wp-content/themes/callahan/images/icon-play-button.svg"); ?>
							
						</div><!-- about_video_overlay -->
						
					</div><!-- about_video_thumb -->
					
					<span class="about_video_description"><?php the_field( 'about_video_description' ); ?></span><!-- about_video_description -->
					
					</a>
					
				</div><!-- about_video_wrapper -->
				
				</div><!-- about_left_inner -->
			 
			 <div class="about_top_content content">
				 
				 <?php the_field( 'about_top_content' ); ?>
				 
			 </div><!-- about_top_content -->
				
			</div><!-- about_left -->
			
			<div class="about_right">
				
				<div class="about_video_wrapper">
					
					<a class="" href="https://www.youtube.com/embed/<?php the_field( 'youtube_id_about' ); ?>" data-lity>
					
					<div class="about_video_thumb">

						<img class="about_thumb" src="<?php echo $video_thumbnail['url']; ?>" alt="<?php echo $video_thumbnail['alt']; ?>" />
						
						<div class="about_video_overlay">
							
							<?php echo file_get_contents("wp-content/themes/callahan/images/icon-play-button.svg"); ?>
							
						</div><!-- about_video_overlay -->
						
					</div><!-- about_video_thumb -->
					
					<span class="about_video_description"><?php the_field( 'about_video_description' ); ?></span><!-- about_video_description -->
					
					</a>
					
				</div><!-- about_video_wrapper -->
				
			</div><!-- about_right -->
			
		</div><!-- about_top_wrapper -->
			
		<div class="about_blockquote">
			
			<div class="about_blocquote_inner">
				
				<span class="about_blockquote_title"><?php the_field( 'about_blockquote_title' ); ?></span><!-- about_blockquote_title -->
				
				<div class="about_blockquote_content">
					
					<?php the_field( 'about_quote_description' ); ?>
					
				</div><!-- about_blockquote_content -->
				
			</div><!-- about_blocquote_inner -->
			
		</div><!-- about_blockquote -->
		
		<div class="about_bottom_wrapper content">
			
			<div class="about_col">
				
				<?php the_field( 'about_column_one' ); ?>

				</div><!-- about_col -->
			
			<div class="about_col">
				
				<?php the_field( 'about_column_two' ); ?>
				
				
			</div><!-- about_col -->
			
		</div><!-- about_bottom_wrapper -->
			
	</div><!-- container -->
		
</div><!-- internal_main -->
	
<?php get_footer(); ?>
