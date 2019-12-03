<?php 

/* Template Name: Testimonials */

get_header(); ?>


<div id="internal_main">
	
	<div class="container no_banner">
	
		<h1 class="content_header center"><?php the_title();?></h1><!-- content_header -->
			
		<div class="testimonial_page_wrapper">
			
			<div class="testi_col">
				
				<?php if(get_field('testimonial_column_one')): ?>
				 
					<?php while(has_sub_field('testimonial_column_one')): ?>
				 
						<div class="single_testi">
					
							<div class="single_testi_inner">
						
								<img src="<?php bloginfo('template_directory');?>/images/test-stars-03.svg"/>
						
								<span class="tesi_quote"><?php the_sub_field( 'quote' ); ?></span><!-- tesi_quote -->
						
								<div class="content">
						
									<?php the_sub_field( 'content' ); ?>
						
								</div><!-- content -->
						
						<span class="testi_name">- <?php the_sub_field( 'name' ); ?></span><!-- testi_name -->
						
					</div><!-- single_testi_inner -->
					
				</div><!-- single_testi -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- testi_col -->
			
			<div class="testi_col">
				
				<?php if(get_field('testimonial_column_two')): ?>
				 
					<?php while(has_sub_field('testimonial_column_two')): ?>
				 
						<div class="single_testi">
					
							<div class="single_testi_inner">
						
								<img src="<?php bloginfo('template_directory');?>/images/test-stars-03.svg"/>
						
								<span class="tesi_quote"><?php the_sub_field( 'quote' ); ?></span><!-- tesi_quote -->
						
								<div class="content">
						
									<?php the_sub_field( 'content' ); ?>
						
								</div><!-- content -->
						
						<span class="testi_name">- <?php the_sub_field( 'name' ); ?></span><!-- testi_name -->
						
					</div><!-- single_testi_inner -->
					
				</div><!-- single_testi -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- testi_col -->
			
						
		</div><!-- testimonial_page_wrapper -->
			
	</div><!-- container -->
		
</div><!-- internal_main -->


<?php get_footer(); ?>
