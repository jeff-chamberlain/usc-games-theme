<?php
/**
 * The Header for the theme.
 *
 * @package USC Games Theme
 * @since USCGames Theme v1.0
 */
?><!DOCTYPE html>
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>USC Games - <?php if (is_front_page()) { ?>Home<?php  } else { wp_title(''); } ?></title>
<link rel="icon" href="http://www.usc.edu/favicon.ico">
<?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
<div id="wrapper">
	<header id="navbar">
		<a href="../home.php"><span class="games_logo"></span></a>
		<a href="http://www.usc.edu/" target="_blank"><span class="usc_logo"></span></a>
		<a href="../about.php"><span class="about">about</span></a>
		<a href="../news.php"><span class="news">news</span></a> 
		<a href="../events.php"><span class="events">events</span></a> 
		<a href="../faculty.php"><span class="faculty">faculty</span></a> 
		<a href="../games.php"><span class="games">games</span></a> 
	</header> <!-- #navbar -->
	<div id="background"> <!-- MESSY -->
	</div> <!-- #background -->