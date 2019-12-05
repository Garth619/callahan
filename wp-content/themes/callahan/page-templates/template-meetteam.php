<?php 

/* Template Name: Attorney Directory */

get_header(); ?>

<div id="internal_main">
	
	<div class="container no_banner">
	
		<h1 class="content_header center"><?php the_title();?></h1><!-- content_header -->
			
		<div class="att_wrapper">
			
			<div class="single_att">
				
				<div class="single_att_img_wrapper">
					
					<div class="single_att_inner">
						
						<img class="profile_pic" src="<?php bloginfo('template_directory');?>/images/att-bio-callahan.jpg"/><!-- profile_pic -->
						
					</div><!-- single_att_inner -->
					
				</div><!-- single_att_img_wrapper -->
				
				<span class="att_title">Daniel J. Callahan</span><!-- att_title -->
				
				<span class="att_position">Founding Partner</span><!-- att_position -->
				
			</div><!-- single_att -->
			
			<div class="single_att"></div><!-- single_att -->
			
			<div class="single_att"></div><!-- single_att -->
			
			<div class="single_att"></div><!-- single_att -->
			
			<div class="single_att"></div><!-- single_att -->
			
		</div><!-- att_wrapper -->
			
	</div><!-- container -->
		
</div><!-- internal_main -->


<?php get_footer(); ?>
