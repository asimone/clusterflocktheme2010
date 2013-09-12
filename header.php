<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

<link rel="shortcut icon" href="http://www.clusterflock.org/wp-content/uploads/2010/07/favicon.ico">
<script src="http://platform.twitter.com/widgets.js" charset="utf-8"></script>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
<?php if ( is_single() || is_page() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
<div id="container">
<div id="header">
</div><!-- end header -->

<div id="head-nav">
<ul id="nav">
<a href="<?php bloginfo('home'); ?>"><img src="http://www.clusterflock.org/wp-content/uploads/2010/07/logo.jpg" align="left"></a>
	<?php wp_nav_menu('sort_column=menu_order&depth=3&title_li='); ?>
</ul>
<div class="clear"></div>
</div><!-- end head-nav -->

<div id="main-content">