
<div class="sidebar_wrapper att_bio">
	
	<?php if(get_field('att_sidebar')): ?>
	 
		<?php while(has_sub_field('att_sidebar')): ?>
	 
			<div class="sidebar_box">
				
				<div class="sidebarbox_inner">
					
					<div class="widget">
						
						<h3><?php the_sub_field( 'sidebar_title' ); ?></h3>
				
						<?php if(get_sub_field('sidebar_list_items')): ?>
							
							<ul>
				 
							<?php while(has_sub_field('sidebar_list_items')): ?>
				 
								<li><?php the_sub_field( 'list_item' ); ?>
								
								<?php if(get_sub_field('nested_list_items')): ?>
									
									<ul>
								 
									<?php while(has_sub_field('nested_list_items')): ?>
								 
										<li><?php the_sub_field( 'nested_list_item' ); ?></li>
								    
									<?php endwhile; ?>
									
									</ul>
								 
								<?php endif; ?>
								
								
								</li>
				    
							<?php endwhile; ?>
							
							</ul>
				 
						<?php endif; ?>
				
				</div><!-- widget -->
				
				</div><!-- sidebarbox_inner -->
				
			</div><!-- sidebar_box -->
	    
		<?php endwhile; ?>
	 
	<?php endif; ?>
	
</div><!-- sidebar_wrapper -->