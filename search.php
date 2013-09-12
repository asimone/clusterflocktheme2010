<?php get_header(); ?>
<?php if(have_posts()) : ?>
<h2>Search Results for <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="kunci">'); echo $key; _e('</span>'); _e(' - '); echo $count . ' '; _e('articles'); wp_reset_query(); ?></h2>
<ul>
<?php while(have_posts()) : the_post(); ?>
<li><h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
Posted in <?php the_category(', ') ?> - <?php the_time('j F Y'); ?> - <?php comments_number('No comment', '1 comment', '% comments'); ?></li>
<?php endwhile; ?>
</ul>
<div class="page-nav">
<span class="older"><?php next_posts_link('&laquo; Previous Articles') ?></span><span class="newer"><?php previous_posts_link('Next Articles &raquo;') ?></span>
<div class="clear"></div>
</div><!-- end page-nav -->
<?php else : ?>
<h2>No posts found. Try a different search?</h2>
<?php get_search_form(); ?>
<?php endif; ?>

</div><!-- end main-content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>