<?php get_header(); ?>
<h2 class="date-header"><?php the_time('F j, Y'); ?></h2>
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content('Read more...'); ?>
<div class="post-meta"><p><strong>posted by</strong> <?php the_author_posts_link(); ?> <strong>in</strong> <?php the_category(', ') ?> | <a href="<?php the_permalink() ?>" rel="bookmark">*</a> | <?php comments_popup_link('comment', '1 comment', '% comments'); ?>&nbsp;<?php edit_post_link('[Edit]', '', ''); ?></p></div>
<?php wp_link_pages(array('before' => '<p class="page-link"><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number', 'pagelink' => '<span>%</span>')); ?>
<?php comments_template(); ?>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div><!-- end main-content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>