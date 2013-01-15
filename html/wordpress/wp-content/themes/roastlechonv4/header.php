<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<style type="text/css" media="screen">@import url('<?php bloginfo('url'); ?>/lightbox.css');</style>
<script type="text/javascript" src="../prototype.js"></script>
<script type="text/javascript" src="../scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="../lightbox.js"></script>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

</head>
<body>
<div id="container">
	<div id="header">
    	<div id="logo"><a href="/" title="Home"><img alt="logo" src="<?php bloginfo('url'); ?>/wp-content/themes/roastlechonv4/images/logo.png" /></a></div>
		<div id="navigation">
		<?php include('topnavigation.php'); ?></div>
	</div>