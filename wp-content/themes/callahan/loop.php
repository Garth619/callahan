
<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		
		<h2>Not Found</h2>
		
		<div class="entry-content">
			<p>Apologies, but no posts have been created</p>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>

<div class="blog_feed">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="blog_post content">
		
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		
		<div class="meta_data">
			
			<span class="date">Posted on <?php $pfx_date = get_the_date(); echo $pfx_date ?></span>
			
			<?php echo get_the_category_list();?>
		
		</div><!-- meta_data -->
		
		<div class="blog_post_content">
			
			<?php echo wp_trim_words( get_the_content(), 75, '...' );?>
		
		</div><!-- blog_post_content -->
		
		<a class="read_more" href="<?php the_permalink();?>">Read More</a><!-- read_more -->
			
		<?php edit_post_link( __( 'Edit'), '', '' ); ?>

	</div><!-- blog_post -->
		
<?php endwhile; // end of loop ?>

<?php endif; ?>

</div><!-- blog_feed -->

<div class="pagination">

	<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	
		<div id="nav-below">
			
			<?php if(get_previous_posts_link()) { ?>
			
				<div class="nav-next"><?php previous_posts_link( __( '<span class="meta-nav">Prev</span>') ); ?></div>
				
			<?php } ?>
			
			<?php if(get_next_posts_link()) { ?>
		
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">Next</span>' ) ); ?></div>
			
			<?php } ?>
			
		</div>

		<?php endif; ?>

		<?php wpbeginner_numeric_posts_nav(); ?>

</div><!-- pagination -->








