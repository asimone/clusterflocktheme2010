<?php get_header(); ?>

<?php $previousTime = '' ?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<?php if ( $previousTime != get_the_time('F j, Y') ) { ?>
		<h2 class="date-header"><?php the_time('F j, Y'); ?></h2>
                <?php $previousTime = get_the_time('F j, Y'); } ?>

<div id="post-<?php the_ID(); ?>"<?php if (is_sticky()) {echo " class=\"sticky\"";} ?>>
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<?php the_content('Read more...'); ?>

<?php wp_link_pages(array('before' => '<p class="page-link"><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number', 'pagelink' => '<span>%</span>')); ?>
</div>

<div class="post-meta"><p><strong>posted by</strong> <?php the_author_posts_link(); ?> <strong>in</strong> <?php the_category(', ') ?> | <a href="http://twitter.com/share?url=<?php the_permalink() ?>&text=RT%20&#64;clusterflock%20<?php the_title(); ?>">Post to Twitter</a> | <?php comments_popup_link('comment', '1 comment', '% comments'); ?>&nbsp;<?php edit_post_link('[Edit]', '', ''); ?></p></div>


<?php endwhile; ?>
<div class="page-nav">
<span class="older"><?php next_posts_link('&laquo; Previous Articles') ?></span><span class="newer"><?php previous_posts_link('Next Articles &raquo;') ?></span>
<div class="clear"></div>
</div><!-- end page-nav -->

<?php else : ?>
<h2>Woops...</h2>
<?php endif; ?>

</div><!-- end main-content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>