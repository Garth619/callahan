<?php 

/* Template Name: Case Results */

get_header(); ?>


<div id="internal_main">
	
	<div class="container no_banner">
	
		<h1 class="content_header center"><?php the_title();?></h1><!-- content_header -->
			
		<div class="cr_wrapper">
			
			<?php if(get_field('case_results_page')): ?>
			 
				<?php while(has_sub_field('case_results_page')): ?>
			 
					<div class="single_cr">
				
						<div class="single_cr_inner">
					
							<span class="amount"><?php the_sub_field( 'amount_cr' ); ?></span><!-- amount -->
					
							<span class="cr_content"><?php the_sub_field( 'description_cr' ); ?></span><!-- cr_content -->
					
						</div><!-- single_cr_inner -->
				
					</div><!-- single_cr -->

			  <?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- cr_wrapper -->
		
	</div><!-- container -->
		
</div><!-- internal_main -->

						
			  


<?php get_footer(); ?>
