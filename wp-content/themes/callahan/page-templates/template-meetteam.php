<?php 

/* Template Name: Attorney Directory */

get_header(); ?>

<div id="internal_main">
	
	<div class="container no_banner">
	
		<h1 class="content_header center"><?php the_title();?></h1><!-- content_header -->
			
		<div class="att_wrapper">
			
			<?php if(get_field('attorneys')): ?>
			 
				<?php while(has_sub_field('attorneys')): ?>
			 
						<?php $post_object = get_sub_field( 'attorney' ); ?>
						
						<?php if ( $post_object ): ?>
							
							<?php $post = $post_object; ?>
							
							<?php setup_postdata( $post ); ?> 
				
								<div class="single_att">
				
									<a class="" href="<?php the_permalink();?>">
				
										<div class="single_att_img_wrapper">
					
											<div class="single_att_inner">
						
												<div class="single_profile_pic_wrapper">
													
													<?php $attorney_profile_image = get_field( 'attorney_profile_image' ); ?>
													
													<?php if ( $attorney_profile_image ) { ?>
														
														<img class="profile_pic" src="<?php echo $attorney_profile_image['url']; ?>" alt="<?php echo $attorney_profile_image['alt']; ?>" />
													
													<?php } ?>
						
													<div class="single_att_overlay"></div><!-- single_att_overlay -->
						
												</div><!-- single_profile_pic_wrapper -->
						
											</div><!-- single_att_inner -->
					
											<div class="single_overlay_hover"></div><!-- single_overlay_hover -->
					
										</div><!-- single_att_img_wrapper -->
				
										<span class="att_title"><?php the_title();?></span><!-- att_title -->
				
										<span class="att_position"><?php the_field( 'position' ); ?></span><!-- att_position -->
				
									</a>
				
								</div><!-- single_att -->
				
							<?php wp_reset_postdata(); ?>
								
						<?php endif; ?>
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
						
		</div><!-- att_wrapper -->
			
	</div><!-- container -->
		
</div><!-- internal_main -->


<?php get_footer(); ?>
