<footer id="footer_trigger">
	
	<div id="consultation" class="form_wrapper">
		
		<div class="form_inner">
			
			<span class="free_consultation_title"><?php the_field( 'free_consultation_verbiage','option'); ?></span><!-- free_consultation_title -->
			
			<span class="free_consultation_subtitle"><?php the_field( 'free_consultation_subheader','option'); ?></span><!-- free_consultation_subtitle -->
			
			<span class="required">*Field Required</span><!-- required -->
			
			<?php gravity_form(1, false, false, false, '', true, 12); ?>
			
		</div><!-- form_inner -->
		
	</div><!-- form_wrapper -->
	
	<div class="footer_bottom">
		
		<?php if(!is_page_template('page-templates/template-contact.php')) {?>
		
		<div class="location_wrapper">
		
			<div class="location_col location_col_one">
			
				<span class="location_title"><?php the_field( 'office_location_title','option'); ?></span><!-- location_title -->
			
				<span class="address"><?php the_field( 'address','option'); ?></span><!-- address -->
			
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
			
				<a class="map_button" href="<?php the_field( 'google_maps_link','option'); ?>" target="_blank">Map</a><!-- map_button -->
			
			</div><!-- location_col_one -->
		
			<div class="location_col location_col_two">
			
				<span class="location_title"><?php the_field( 'stay_connected_title','option'); ?></span><!-- location_title -->
				
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
			
			</div><!-- location_col_two -->
		
			<div class="location_col location_col_three">
			
				<span class="location_title"><?php the_field( 'practice_areas_title_header','option'); ?></span><!-- location_title -->
				
				
				<?php if(get_field('practice_areas_list','option')): ?>
				
					<ul>
				 
					<?php while(has_sub_field('practice_areas_list','option')): ?>
				 
						<?php $post_object = get_sub_field( 'practice_area_title' ); ?>
						
						<?php if ( $post_object ): ?>
							
							<?php $post = $post_object; ?>
							
							<?php setup_postdata( $post ); ?> 
							
								<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
							
							<?php wp_reset_postdata(); ?>
							
						<?php endif; ?>
				    
					<?php endwhile; ?>
					
					</ul>
				 
				<?php endif; ?>
				
			
			
			</div><!-- location_col_three -->
		
			<div class="location_col location_col_four">
			
				<span class="location_title"><?php the_field( 'in_the_news_title','option'); ?></span><!-- location_title -->
				
				<?php $post_object = get_field( 'in_the_news_post_title','option'); ?>
				
				<?php if ( $post_object ): ?>
				
					<?php $post = $post_object; ?>
					
					<?php setup_postdata( $post ); ?> 
						
						<a class="news_post_title" href="<?php the_permalink();?>"><?php the_title(); ?></a>
					
					<?php wp_reset_postdata(); ?>
				
				<?php endif; ?>

				<a class="views_news" href="<?php the_field( 'news_feed_link','option'); ?>"><?php the_field( 'view_news_archive_verbiage','option'); ?></a><!-- views_news -->
			
			</div><!-- location_col_four -->
		
		</div><!-- location_wrapper -->
		
		<?php } ?>
		
		<div class="copyright_wrapper">
				
				<ul>
					<li>&copy; <?php echo date("Y"); ?> <?php the_field( 'copyright','option'); ?></li>
					
						<?php $post_object = get_field( 'disclaimer','option'); ?>
						
						<?php if ( $post_object ): ?>
						
						<?php $post = $post_object; ?>
						
						<?php setup_postdata( $post ); ?> 
						
						<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
						
						<?php wp_reset_postdata(); ?>
						
						<?php endif; ?>
					
						<?php $post_object = get_field( 'site_map','option'); ?>
						
						<?php if ( $post_object ): ?>
							
							<?php $post = $post_object; ?>
							
							<?php setup_postdata( $post ); ?> 
							
							<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
							
							<?php wp_reset_postdata(); ?>
							
						<?php endif; ?>
				
				</ul>
				
				<a class="ilawyer" href="//ilawyermarketing.com" target="_blank" rel="noopener">
					
					<img src="<?php bloginfo('template_directory');?>/images/logo-ilawyer.svg" alt="iLawyer Marketing"/>
					
				</a>
			
		</div><!-- copyright_wrapper -->
		
	</div><!-- footer_bottom -->
	
</footer>


<?php wp_footer();?>


</body>
</html>
