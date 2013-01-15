<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title><?php bloginfo('name'); ?>: Food for the soul, design for the heart</title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

<style type="text/css" media="screen">@import url( <?php bloginfo('stylesheet_url'); ?> );</style>
	
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
<?php wp_get_archives('type=monthly&format=link'); ?>
<?php wp_head(); ?>

<script src="/mint/?js" type="text/javascript"></script>
</head>
<body>
<div id="container">
<div id="header">
	<div id="logo"></div>
	<div id="navtext"><?php include("topnavigation.php"); ?></div>
</div>