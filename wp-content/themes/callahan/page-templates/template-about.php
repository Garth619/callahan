<?php 

/* Template Name: About */

get_header(); ?>

<div id="internal_main">
	
	<div class="container no_banner">
	
		<div class="about_top_wrapper">
			
			<div class="about_left">
				
			 <h1 class="about_header"><?php the_title();?></h1><!-- about_header -->
			 
			 <div class="about_intro_wrapper">
				 
				 <p>Sed aliquam lectus neque, eget tincidunt justo bibendum nec. Aenean pharetra sodales augue sit amet iaculis. Praesent ultricies sollicitudin lectus, ac cursus odio sodales porttitor.</p>
				 
			 </div><!-- about_intro_wrapper -->
			 
			 <div class="about_top_content content">
				 
				 <h2>Duis ut purus scelerisque, eleifend neque</h2>

				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at nisi velit. Ut fringilla, mauris facilisis congue fermentum, orci nunc porta mi, quis viverra quam dui vel augue. Vestibulum id libero laoreet, vulputate velit a, accumsan velit. In tristique ante sed aliquet venenatis. Suspendisse volutpat accumsan viverra.</p>

				 <p>Nullam accumsan ex in metus semper, nec consectetur sapien venenatis. Donec tincidunt ornare volutpat. Praesent tempor est vel neque rutrum, in tempor nibh ultricies. Morbi scelerisque accumsan pharetra.</p>
				 
			 </div><!-- about_top_content -->
				
			</div><!-- about_left -->
			
			<div class="about_right">
				
				<div class="about_video_wrapper">
					
					<a class="" href="https://www.youtube.com/embed/XBPjVzSoepo" data-lity>
					
					<div class="about_video_thumb">
						
						<img class="about_thumb" src="<?php bloginfo('template_directory');?>/images/int-about-video-thumb.jpg"/><!-- about_thumb -->
						
						<div class="about_video_overlay">
							
							<?php echo file_get_contents("wp-content/themes/callahan/images/icon-play-button.svg"); ?>
							
						</div><!-- about_video_overlay -->
						
					</div><!-- about_video_thumb -->
					
					<span class="about_video_description">Praesent tempor est vel neque rutrum, in tempor nibh ultricies. Morbi scelerisque set accumsan pharetra odio neque.</span><!-- about_video_description -->
					
					</a>
					
				</div><!-- about_video_wrapper -->
				
			</div><!-- about_right -->
			
		</div><!-- about_top_wrapper -->
			
		
			
	</div><!-- container -->
		
</div><!-- internal_main -->
	
<?php get_footer(); ?>
