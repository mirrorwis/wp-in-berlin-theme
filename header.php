<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title>
		<?php if ( is_home() ) { ?><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_search() ) { ?><?php echo $s; ?> | <?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_single() ) { ?><?php wp_title(''); ?> | <?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_page() ) { ?><?php wp_title(''); ?> | <?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_category() ) { ?>Archive <?php single_cat_title(); ?> | <?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_month() ) { ?>Archive <?php the_time('F'); ?> | <?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_tag() ) { ?><?php single_tag_title();?> | <?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_404() ) { ?>Sorry, not found! | <?php bloginfo('name'); ?><?php } ?>
</title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>

</head>

<body>

<div id="wrap">



<div id="header">

	<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
	<h2 id="blog-description"><?php bloginfo('description'); ?></h2>

	<ul id="menu">
		<li class="page_item page-item-0"><a href="http://yaoyuan.me" title="Home">Home</a></li>
		<?php wp_list_pages('title_li=&depth=1'); ?>
	</ul>
	
	<div class="clear"></div>
	
	<div id="rss">
		<img src="<?php bloginfo('template_url'); ?>/img/rss-icon.png" width="32" height="32" alt="RSS Feed" />
		<p>SUBSCRIBE NOW<br />
		<a href="<?php bloginfo('rss2_url'); ?>">RSS Feed</a> | 
		<a href="<?php bloginfo('comments_rss2_url'); ?>">Comments</a></p>
	</div>

</div><!-- end header -->