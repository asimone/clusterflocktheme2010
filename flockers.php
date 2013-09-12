<?php
/*
Template Name: flockers
*/
?>

<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2 class="page-title"><a href="<?php the_permalink() ?>"> </a></h2>

<p>
<ul class="categorylist2"><?php wp_list_authors('show_fullname=1&optioncount=1'); ?>
</ul>
</p>


<?php wp_link_pages(array('before' => '<p class="page-link"><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number', 'pagelink' => '<span>%</span>')); ?>
<?php comments_template(); ?>
<?php endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div><!-- end main-content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>