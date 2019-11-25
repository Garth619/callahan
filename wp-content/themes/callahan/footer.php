<footer id="footer_trigger">
	
	<div class="form_wrapper">
		
		<div class="form_inner">
			
			<span class="free_consultation_title">Free Consultation</span><!-- free_consultation_title -->
			
			<span class="free_consultation_subtitle">Fill out the form below to receive a free initial consultation.</span><!-- free_consultation_subtitle -->
			
			<span class="required">*Field Required</span><!-- required -->
			
			<?php gravity_form(1, false, false, false, '', true, 12); ?>
			
		</div><!-- form_inner -->
		
	</div><!-- form_wrapper -->
	
	<div class="footer_bottom">
		
		<div class="location_wrapper">
		
			<div class="location_col location_col_one">
			
				<span class="location_title">Orange County Office</span><!-- location_title -->
			
				<span class="address">3 Hutton Centre Drive Ninth Floor,<br/> Santa Ana, CA 92707</span><!-- address -->
			
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
			
			</div><!-- location_col_one -->
		
			<div class="location_col location_col_two">
			
				<span class="location_title">stay connected</span><!-- location_title -->
				
				<div class="social_media">
					
					<a class="sm-g" href=""><?php echo file_get_contents("wp-content/themes/callahan/images/social-g.svg"); ?></a>
					
					<a class="sm-fb" href=""><?php echo file_get_contents("wp-content/themes/callahan/images/social-fb.svg"); ?></a>
					
					<a class="s-in" href=""><?php echo file_get_contents("wp-content/themes/callahan/images/social-in.svg"); ?></a>
					
					<a class="sm-t" href=""><?php echo file_get_contents("wp-content/themes/callahan/images/social-t.svg"); ?></a>
					
					<a class="sm-yt" href=""><?php echo file_get_contents("wp-content/themes/callahan/images/social-yt.svg"); ?></a>
					
					<a class="sm-av" href=""><?php echo file_get_contents("wp-content/themes/callahan/images/social-av.svg"); ?></a>
					
				</div>
			
			</div><!-- location_col_two -->
		
			<div class="location_col location_col_three">
			
				<span class="location_title">practice area</span><!-- location_title -->
				
				<ul>
					<li><a href="">Complex Business Litigation</a></li>
					<li><a href="">Insurance Litigation</a></li>
					<li><a href="">Trade Secret Litigation</a></li>
					<li><a href="">Employment Law</a></li>
					<li><a href="">Intellectual Property</a></li>
					<li><a href="">Real Estate Litigation</a></li>
					<li><a href="">Professional Liability</a></li>
					<li><a href="">Homeowners Associations</a></li>
					<li><a href="">Construction Litigation</a></li>
					<li><a href="">Class Action</a></li>
					<li><a href="">Transactional and Corporate Law</a></li>
					<li><a href="">Personal Injury</a></li>
				</ul>
			
			</div><!-- location_col_three -->
		
			<div class="location_col location_col_four">
			
				<span class="location_title">In the News</span><!-- location_title -->
				
				<span class="news_post_title">Dan Callahan holds a press conference to announce lawsuit against Michael Avenatti for stealing $4,000,000 from paraplegic client.</span><!-- news_post_title -->
				
				<a class="views_news" href="">view news archive</a><!-- views_news -->
			
			</div><!-- location_col_four -->
		
		</div><!-- location_wrapper -->
		
		<div class="copyright_wrapper">
				
				<ul>
					<li>&copy; <?php echo date("Y"); ?> by Callahan & Blaine. All right reserved.</li>
					<li><a href="">Disclaimer</a></li>
					<li><a href="">Site Map</a></li>
				</ul>
				
				<a class="ilawyer" href="//ilawyermarketing.com" target="_blank" rel="noopener">
					
					<img src="<?php bloginfo('template_directory');?>/images/logo-ilawyer.svg"/>
					
				</a>
			
		</div><!-- copyright_wrapper -->
		
	</div><!-- footer_bottom -->
	
</footer>


<?php wp_footer();?>


</body>
</html>
