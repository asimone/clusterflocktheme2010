<?php
/*
Template Name: categories
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2 class="page-title"><a href="<?php the_permalink() ?>"> </a></h2>

<p>
<ul class="categorylist"><?php wp_list_categories('show_count=1&title_li=&hierarchical=false'); ?></ul>
</p>
<p>
<form method="get" action="http://www.google.com/search">
<input type="text" name="q" maxlength="255" style="width: 150px; margin-top: 9px;"/>
<input type="hidden" value="http://www.clusterflock.org" name="domains"/>
<input type="hidden" value="http://www.clusterflock.org" name="sitesearch"/>
<input type="submit" value="Search clusterflock &#x00BB" name="sa"/>
</form>	
</p>

<?php wp_link_pages(array('before' => '<p class="page-link"><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number', 'pagelink' => '<span>%</span>')); ?>
<?php comments_template(); ?>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div><!-- end main-content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>