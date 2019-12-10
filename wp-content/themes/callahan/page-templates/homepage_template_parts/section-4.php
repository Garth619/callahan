<section id="section_four">
	
	<div class="sec_four_top">
		
		<div class="sec_four_top_content">
			
			<span><?php the_field( 'section_four_title' ); ?></span>
			
			<a class="results_button" href="<?php the_field( 'section_four_button_link' ); ?>"><?php the_field( 'section_four_button_verbiage' ); ?></a><!-- results_button -->
			
		</div><!-- sec_four_top_content -->
		
		<?php $section_four_top_image = get_field( 'section_four_top_image' ); ?>
		
		<?php if ( $section_four_top_image ) { ?>
		
			<img src="<?php echo $section_four_top_image['url']; ?>" alt="<?php echo $section_four_top_image['alt']; ?>" />
		
		<?php } ?>
		
	</div><!-- sec_four_top -->
	
	<div class="sec_four_slider_wrapper">
		
		<div class="sec_four_slider">
			
			<?php if(get_field('section_four_results')): ?>
			 
				<?php while(has_sub_field('section_four_results')): ?>
			 
					<div class="sec_four_slide">
				
						<div class="sec_four_slide_inner">
					
							<span class="amount"><?php the_sub_field( 'amount' ); ?></span>
					
							<span class="description"><?php the_sub_field( 'description' ); ?></span><!-- description -->
					
						</div><!-- sec_four_slide_inner -->
				
					</div><!-- sec_four_slide -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>

		</div><!-- sec_four_slider -->
		
	</div><!-- sec_four_slider_wrapper -->
	
	<div id="selling_points_trigger" class="sec_four_selling_points">
		
		<?php if(get_field('section_four_selling_points')): ?>
		 
			<?php while(has_sub_field('section_four_selling_points')): ?>
				
				<div class="sec_four_selling_point">
			
					<span class="number"><?php the_sub_field( 'number' ); ?></span>
			
					<div class="sec_four_sp_inner">
				
						<div class="sec_four_sp_left">
					
							<span><?php the_sub_field( 'large_text' ); ?></span>
					
						</div><!-- sec_four_sp_left -->
				
						<div class="sec_four_sp_right content">
					
							<?php the_sub_field( 'description' ); ?>
					
						</div><!-- sec_four_sp_right -->
				
					</div><!-- sec_four_sp_inner -->
			
				</div><!-- sec_four_selling_point -->
				
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
	</div><!-- sec_four_selling_points -->
	
</section><!-- section_four -->