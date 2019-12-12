<section id="section_three">
	
	<div class="sec_three_inner">
		
		<div class="sec_three_slider_wrapper">
			
			<div class="star_title_wrapper">
				
				<img class="stars desktop" data-src="<?php bloginfo('template_directory');?>/images/test-stars.svg"/>
				
				<img class="stars mobile" data-src="<?php bloginfo('template_directory');?>/images/test-stars-02.svg"/>
				
				<span class="star_title"><?php the_field( 'section_three_testimonials_title' ); ?></span><!-- star_title -->

			</div><!-- star_title_wrapper -->
			
			<div class="sec_three_slider">
				
				<?php if(get_field('section_three_testimonials')): ?>
				 
					<?php while(has_sub_field('section_three_testimonials')): ?>
				 
						<div class="sec_three_slide">
					
							<span class="sec_three_slide_content"><?php the_sub_field( 'testimonial' ); ?></span><!-- sec_three_slide_content -->

							<span class="sec_three_name">- <?php the_sub_field( 'name' ); ?></span><!-- sec_three_name -->
					
						</div><!-- sec_three_slide -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- sec_three_slider -->
			
		</div><!-- sec_three_slider_wrapper -->
		
		<div class="sec_three_image_wrapper">
			
			<?php $section_three_image = get_field( 'section_three_image' ); ?>
			
			<?php if ( $section_three_image ) { ?>
			
				<img data-src="<?php echo $section_three_image['url']; ?>" alt="<?php echo $section_three_image['alt']; ?>" />
			
			<?php } ?>
			
		</div><!-- sec_three_image_wrapper -->
		
	</div><!-- sec_three_inner -->
	
</section><!-- section_three -->