<div id="sidebar">
<br /><a href="http://www.clusterflock.org/2010/11/from-the-comments-the-book.html"><img src="http://www.clusterflock.org/wp-content/uploads/2010/11/fromthecommentsbookcoversmall.jpg"></a><br /><br />

<a href="<?php bloginfo('rss2_url'); ?>"><img src="http://www.clusterflock.org/wp-content/uploads/2010/07/rss_32.png" width="24" height="24"></a>
<a href="http://twitter.com/clusterflock"><img src="http://www.clusterflock.org/wp-content/uploads/2010/07/twitter_32.png" width="24" height="24"></a>
<br /><br/>

<div class="widget">

<?php if (function_exists('get_recent_comments')) { ?>
   <h4><?php _e('comments:'); ?></h4>
   <ul><?php get_recent_comments(); ?></ul>
  <?php } ?>   


</div><!-- end sidebar -->