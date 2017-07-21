<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en-US"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en-US"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en-US">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Jack Tan Photography, jack tan photography, jack, comcat, Jack, 攀岩摄影, 攀岩记录, 攀岩艺术">
	<title>Jack Tan Photography</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<script src="/ui/js/modernizr-2.6.2.min.js"></script>
	<script src="/ui/js/jquery/1.10.2/jquery.min.js"></script>

	<link rel='stylesheet' id='jquery-ui-smoothness-css'  href='/ui/css/jquery-ui.css' type='text/css' media='all' />
	<link rel='stylesheet' id='roots_app-css'  href='/ui/css/screen.css' type='text/css' media='all' />

	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>

	<link rel="stylesheet" type="text/css" href="/gallery/resources/colorbox/3/colorbox.css" />
	<script type="text/javascript" src="/gallery/resources/colorbox/jquery.colorbox.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("a[rel='colorbox']").colorbox({maxWidth: "96%", maxHeight: "96%", opacity: ".5", fixed: true});
		});
	</script>

	<link rel="shortcut icon" href="/ui/img/logo.ico">
</head>

<body class="home page page-id-5 page-template-default page-home">
<header id="banner" role="banner">
  <div class="brand-wrap">
    <a class="brand hide-text" href="/">Jack Tan Photography</a>
  </div>
  <nav id="nav-main" role="navigation">
    <a class="nav-toggle" href="#nav"><div class="burg"></div></a>
    <ul id="menu-primary-navigation" class="nav is-uppercase nav-pills">
		<li class="menu-artists"><a href="/">Home</a></li>
		<li class="menu-artists"><a href="/gallery">Gallery</a></li>
		<li class="menu-about"><a href="/about">About</a></li>
		<li class="ss-icon menu-%ef%98%90"><a title="Visit our Facebook" href="https://www.facebook.com/comcat">Facebook</a></li>
		<li class="ss-icon menu-%ef%98%91"><a title="Follow us on Twitter" href="https://weibo.com/comcat"></a></li>
		<li class="menu-instagram"><a href="http://500px.com/comcat">500px</a></li>
	</ul>
  </nav>
</header>

<div id="wrap" role="document">
<div id="content">
  <div id="main" role="main"></div>
</div><!-- /#content -->
</div><!-- /#wrap -->

<?php

    // Include the UberGallery class
    include('resources/UberGallery.php');

    // Initialize the UberGallery object
    $gallery = new UberGallery();

    // Initialize the gallery array
    $galleryArray = $gallery->readImageDirectory('gallery-images');

    // Define theme path
    if (!defined('THEMEPATH')) {
        define('THEMEPATH', $gallery->getThemePath());
    }

    // Set path to theme index
    $themeIndex = $gallery->getThemePath(true) . '/embeded.php';

    // Initialize the theme
    if (file_exists($themeIndex)) {
        include($themeIndex);
    } else {
        die('ERROR: Failed to initialize theme');
    }

?>

<footer id="content-info" class="container" role="contentinfo">
    <p>&copy; 2015 Jack Tan Photography</p>
</footer>

<!--[if lt IE 9 ]>
	<div class="shit-browser-overlay">
		<div class="the-message">
			<div class="logo"></div>
			<h1 class="super">You're Old!</h1>
			<p>Well maybe not you, but your browser certainly is. And it's not supported. Upgrade to a newer version of Internet Explorer, or better yet, get something even better like <a href="http://browsehappy.com/" target="_blank">Google Chrome</a> or <a href="http://browsehappy.com/" target="_blank">Mozilla Firefox</a>. Trust us, you'll like it.</p>
		</div>
	</div>
<![endif]-->

<!--
<script type='text/javascript' src='/ui/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='/ui/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='/ui/js/jquery/ui/mouse.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='/ui/js/jquery/ui/resizable.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='/ui/js/jquery/ui/draggable.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='/ui/js/jquery/ui/button.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='/ui/js/jquery/ui/position.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='/ui/js/jquery/ui/dialog.min.js?ver=1.11.4'></script>
-->
<script type='text/javascript' src='/ui/js/plugins.min.js'></script>
<script type='text/javascript' src='/ui/js/init.js'></script>

</body>
</html>
