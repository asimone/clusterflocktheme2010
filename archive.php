<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h2 class="archives"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	
		<?php the_content(__('Read more'));?><div style="clear:both;"></div>
		
		<div class="postmeta">
			<p><?php the_time('F j, Y'); ?> | Filed Under <?php the_category(', ') ?> | posted by <?php the_author_posts_link(); ?> | <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>&nbsp;</p>
		</div>
	 			
		<!--
		<?php trackback_rdf(); ?>
		-->
		
		<?php endwhile; else: ?>
		
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
		<p><?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?></p>
</div><!-- end main-content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>