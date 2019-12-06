<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>


<div id="internal_main">
	
	<div class="contact_wrapper">
		
		<div class="contact_left">
			
			<h1 class="contact_header">Contact Us Today</h1>
			
			<div class="contact_location_wrapper">
		
			<div class="contact_location_col contact_location_col_one">
			
				<span class="contact_location_title">Orange County Office</span><!-- contact_location_title -->
			
				<span class="address">3 Hutton Centre Drive Ninth Floor,<br/> Santa Ana, CA 92707</span><!-- address -->
			
				<a class="map_button" href="">Map</a><!-- map_button -->
			
			</div><!-- contact_location_col_one -->
		
			<div class="contact_location_col contact_location_col_two">
			
				<span class="contact_location_title">Call Us at</span><!-- contact_location_title -->
				
				<div class="phone_row">
				
					<span>Phone</span>
				
					<a href="tel:7142414444">(714) 241-4444</a>
				
				</div><!-- phone_row -->
			
				<div class="phone_row">
				
					<span>Toll Free</span>
				
					<a href="tel:8882840809">(888) 284-0809</a>
				
				</div><!-- phone_row -->
			
				<div class="phone_row">
				
					<span>Fax</span>
				
					<a>(714) 241-4445</a>
				
				</div><!-- phone_row -->
				
				<a class="map_button" href="">Map</a><!-- map_button -->
							
			</div><!-- contact_location_col_two -->
			
			<div class="contact_location_col contact_location_col_three">
			
				<span class="contact_location_title">Stay Connected</span><!-- contact_location_title -->
				
				<div class="social_media">
					
					<a class="sm-g" href=""><?php echo file_get_contents("wp-content/themes/callahan/images/social-g.svg"); ?></a>
					
					<a class="sm-fb" href=""><?php echo file_get_contents("wp-content/themes/callahan/images/social-fb.svg"); ?></a>
					
					<a class="s-in" href=""><?php echo file_get_contents("wp-content/themes/callahan/images/social-in.svg"); ?></a>
					
					<a class="sm-t" href=""><?php echo file_get_contents("wp-content/themes/callahan/images/social-t.svg"); ?></a>
					
					<a class="sm-yt" href=""><?php echo file_get_contents("wp-content/themes/callahan/images/social-yt.svg"); ?></a>
					
					<a class="sm-av" href=""><?php echo file_get_contents("wp-content/themes/callahan/images/social-av.svg"); ?></a>
					
				</div>
			
			</div><!-- contact_location_col_three -->
		
			<div class="contact_location_col contact_location_col_four">
			
				<span class="contact_location_title">In the News</span><!-- contact_location_title -->
				
				<span class="news_post_title">Dan Callahan holds a press conference to announce lawsuit against Michael Avenatti for stealing $4,000,000 from paraplegic client.</span><!-- news_post_title -->
				
				<a class="views_news" href="">view news archive</a><!-- views_news -->
			
			</div><!-- contact_location_col_four -->
		
		</div><!-- contact_location_wrapper -->
			
		</div><!-- contact_left -->
		
		<div class="contact_right">
			
			<iframe src="https://snazzymaps.com/embed/204238" width="100%" height="600px" style="border:none;"></iframe>
			
		</div><!-- contact_right -->
		
	</div><!-- contact_wrapper -->			
					
</div><!-- internal_main -->



			
<?php get_footer(); ?>