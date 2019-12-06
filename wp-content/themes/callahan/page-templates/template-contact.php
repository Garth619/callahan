<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>


<div id="internal_main">
	
	<div class="contact_wrapper">
		
		<div class="contact_left">
			
			<h1 class="contact_header"><?php the_title();?></h1>
			
			<div class="contact_location_wrapper">
		
			<div class="contact_location_col contact_location_col_one">
			
				<span class="contact_location_title"><?php the_field( 'office_location_title','option'); ?></span><!-- contact_location_title -->
			
				<span class="address"><?php the_field( 'address','option'); ?></span><!-- address -->
			
				<a class="map_button" href="<?php the_field( 'google_maps_link' ); ?>" target="_blank">Map</a><!-- map_button -->
			
			</div><!-- contact_location_col_one -->
		
			<div class="contact_location_col contact_location_col_two">
			
				<span class="contact_location_title"><?php the_field( 'call_us_at_title','option'); ?></span><!-- contact_location_title -->
				
				<div class="phone_row">
				
					<span>Phone</span>
					
					
				
					<a href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('phone_number', 'option')); ?>"><?php the_field( 'phone_number','option'); ?></a>
				
				</div><!-- phone_row -->
			
				<div class="phone_row">
				
					<span>Toll Free</span>
				
					<a href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('toll_free_number', 'option')); ?>"><?php the_field( 'toll_free_number','option'); ?></a>
				
				</div><!-- phone_row -->
			
				<div class="phone_row">
				
					<span>Fax</span>
				
					<a><?php the_field( 'fax_number','option'); ?></a>
				
				</div><!-- phone_row -->
				
				<a class="map_button" href="<?php the_field( 'google_maps_link' ); ?>" target="_blank">Map</a><!-- map_button -->
							
			</div><!-- contact_location_col_two -->
			
			<div class="contact_location_col contact_location_col_three">
			
				<span class="contact_location_title"><?php the_field( 'stay_connected_title','option'); ?></span><!-- contact_location_title -->
				
				<div class="social_media">
					
					<?php if(get_field('google_link','option')) { ?>
					
						<a class="sm-g" href="<?php the_field( 'google_link','option'); ?>" target="_blank" rel="noopener"><?php echo file_get_contents("wp-content/themes/callahan/images/social-g.svg"); ?></a>
					
					<?php } ?>
					
					<?php if(get_field('facebook_link','option')) { ?>
					
						<a class="sm-fb" href="<?php the_field( 'facebook_link','option'); ?>" target="_blank" rel="noopener"><?php echo file_get_contents("wp-content/themes/callahan/images/social-fb.svg"); ?></a>
					
					<?php } ?>
					
					<?php if(get_field('linkedin_link','option')) { ?>
					
						<a class="s-in" href="<?php the_field( 'linkedin_link','option'); ?>" target="_blank" rel="noopener"><?php echo file_get_contents("wp-content/themes/callahan/images/social-in.svg"); ?></a>
					
					<?php } ?>
					
					<?php if(get_field('twitter_link','option')) { ?>
					
						<a class="sm-t" href="<?php the_field( 'twitter_link','option'); ?>" target="_blank" rel="noopener"><?php echo file_get_contents("wp-content/themes/callahan/images/social-t.svg"); ?></a>
						
					<?php } ?>
					
					<?php if(get_field('youtube_link','option')) { ?>
					
						<a class="sm-yt" href="<?php the_field( 'youtube_link','option'); ?>" target="_blank" rel="noopener"><?php echo file_get_contents("wp-content/themes/callahan/images/social-yt.svg"); ?></a>
					
					<?php } ?>
						
					<?php if(get_field('avvo_link','option')) { ?>
					
						<a class="sm-av" href="<?php the_field( 'avvo_link','option'); ?>" target="_blank" rel="noopener"><?php echo file_get_contents("wp-content/themes/callahan/images/social-av.svg"); ?></a>
					
					<?php } ?>
					
				</div>
			
			</div><!-- contact_location_col_three -->
		
			<div class="contact_location_col contact_location_col_four">
			
				<span class="contact_location_title"><?php the_field( 'in_the_news_title','option'); ?></span><!-- contact_location_title -->
				
				<?php $post_object = get_field( 'in_the_news_post_title','option'); ?>
				
				<?php if ( $post_object ): ?>
				
					<?php $post = $post_object; ?>
					
					<?php setup_postdata( $post ); ?> 
						
						<a class="news_post_title" href="<?php the_permalink();?>"><?php the_title(); ?></a>
					
					<?php wp_reset_postdata(); ?>
				
				<?php endif; ?>
				
				<a class="views_news" href="<?php the_field( 'news_feed_link','option'); ?>"><?php the_field( 'view_news_archive_verbiage','option'); ?></a><!-- views_news -->
			
			</div><!-- contact_location_col_four -->
		
		</div><!-- contact_location_wrapper -->
			
		</div><!-- contact_left -->
		
		<div class="contact_right">
			
			<?php the_field( 'google_iframe_map'); ?>
			
		</div><!-- contact_right -->
		
	</div><!-- contact_wrapper -->			
					
</div><!-- internal_main -->



			
<?php get_footer(); ?>