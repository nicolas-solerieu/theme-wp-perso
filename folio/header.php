<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package folio
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<title><?php bloginfo('name'); ?> — <?php bloginfo('description'); ?></title>

	<!-- Meta Zone -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="I'm a junior designer. I design & build digital products to promote brands and services." />
    <meta name="robots" content="index, follow, all" />
    <meta name="author" content="Nicolas SOLERIEU">
    <meta name="publisher" content="Nicolas SOLERIEU">

    <!-- User agent / Viewport / compression -->
    <meta http-equiv="content-encoding" content="gzip, deflate">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Favicon -->

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>

	<!-- CSS Zone -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" >
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" >
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" >
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css" >

	<meta name="google-site-verification" content="LonFqDfWq0PYU-ZlJjbgeGv5DbSt82PckdamnNw8Gwk" />

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-30964355-2', 'auto');
	  ga('send', 'pageview');

	</script>

	<?php wp_head(); ?>

</head>

<!-- THIS IS IT -->

<body <?php body_class(); ?>>

<!-- BODY -->
<body>

<!-- PAGE -->
<div id="page">

<!-- HEADER -->
<header class="site-header">
	<div class="site-infos" onclick="document.location.href='<?php echo esc_url( home_url( '/' ) ); ?>'">
		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" title="<?php bloginfo('name'); ?>" alt="<?php bloginfo('name'); ?>" class="logo">
	</div>

	<div class="menu-bt"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-bt.svg" ></div>
</header>

<!-- HEADER RIGHT -->
<nav class="site-nav">

	<div class="close-menu-bt"><img src="<?php echo get_template_directory_uri(); ?>/img/close-bt.svg" ></div>
	<div class="menu-label">Explore</div>

	<div class="nav-links">
		<a class="site-nav-link <?php if ( is_front_page() ) { echo 'active'; } ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" >Works</a>
		<a class="site-nav-link <?php if ( is_page( 4 ) ) { echo 'active'; } ?>" href="<?php echo get_permalink(4); ?>" >About</a>
		<a class="site-nav-link <?php if ( is_page( 78 ) ) { echo 'active'; } ?>" href="<?php echo get_permalink(78); ?>" >Shots</a>
		<a class="site-nav-link <?php if ( is_home() ) { echo 'active'; } ?>" href="<?php echo get_permalink(43); ?>" >Journal</a>
		<a class="site-nav-link <?php if ( is_page( 239 ) ) { echo 'active'; } ?>" href="<?php echo get_permalink(239); ?>" >Contact</a>
	</div>
</nav>

<div class="overlay-black"></div>

<!-- MAIN -->
<main class="main-wrap">
