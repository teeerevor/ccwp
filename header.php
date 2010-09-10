<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>

<?php bloginfo('name'); ?>
<?php if(is_home()) { ?>
 - <?php bloginfo('description'); ?>
<?php } ?>
<?php if(is_single()) { ?>
<?php wp_title(); ?>
<?php } ?>
<?php if(is_404()) { ?>
 - Page Not Found
<?php } ?>
<?php if(is_search()) { ?>
 - Search Results for: <?php echo wp_specialchars($s, 1); ?>
<?php } ?>

</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script src="<?php bloginfo('template_directory'); ?>/js/tabcontent.js" type="text/javascript"></script>

<?php wp_head(); ?>

</head>
<body>

<div id="container">

<!-- ^^^^^^^^^^^^^^ header code ^^^^^^^^^^^^^^ -->
<div id="header">

        <div id="logo">
	<a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>">
         <img src="/wp-content/themes/blue-dream/images/cclogo.gif" /></a>
	</div>

</div>
<div class="clear"></div>
<!-- ^^^^^^^^^^^^^^ header code ^^^^^^^^^^^^^^ -->