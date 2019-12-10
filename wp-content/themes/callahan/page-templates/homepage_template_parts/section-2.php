<section id="section_two">
	
	<div class="sec_two_slider">
		
		<?php if(get_field('section_two_selling_points')): ?>
		 
			<?php while(has_sub_field('section_two_selling_points')): ?>
		 
				<div class="sec_two_slide">
			
					<a href="<?php the_sub_field( 'learn_more_link' ); ?>">
		
						<div class="sec_two_inner">
				
							<span class="sec_two_slide_title"><?php the_sub_field( 'title' ); ?></span><!-- sec_two_slide_title -->
				
							<span class="sec_two_slide_content"><?php the_sub_field( 'description' ); ?></span><!-- sec_two_slide_content -->
				
							<span class="learn_more">Learn More</span><!-- learn_more -->
				
						</div><!-- sec_two_inner -->
			
					</a>
			
			</div><!-- sec_two_slide -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
	</div><!-- sec_two_slider -->
	
	<div class="sec_two_content_wrapper">
		
		<div class="sec_two_content_intro">
			
			<h1><?php the_field( 'section_two_header' ); ?></h1>
			
			<?php the_field( 'section_two_intro' ); ?>
			
		</div><!-- sec_two_content_intro -->
		
		<div class="sec_two_columns content">
			
			<!-- css columns get buggy, here are two div columns instead -->
			
			<div class="sec_two_col">
				
				<?php the_field( 'section_two_column_one' ); ?>
								
			</div><!-- sec_two_col -->
			
			<div class="sec_two_col">
				
				<?php the_field( 'section_two_column_two' ); ?>				
				
			</div><!-- sec_two_col -->
			
		</div><!-- sec_two_columns -->
		
	</div><!-- sec_two_content_wrapper -->
	
</section><!-- section_two -->