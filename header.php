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
<title><?php
/*
* Print the <title> tag based on what is being viewed.
*/
/*
*$site_description = get_bloginfo( 'description', 'display' );
*if ( $site_description && ( is_home() || is_front_page() ) )
*echo "USC Games - Home";
*else
*/
wp_title( 'USC Games - ', true, 'left' );
 ?></title>
<link rel="icon" href="http://www.usc.edu/favicon.ico">
<?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
<div id="wrapper">
	<header id="navbar">
		<a href="../index.html"><span class="games_logo"></span></a>
		<a href="http://www.usc.edu/" target="_blank"><span class="usc_logo"></span></a>
		<a href="../about.html"><span class="about">about</span></a>
		<a href="../news.html"><span class="news">news</span></a> 
		<a href="../events.html"><span class="events">events</span></a> 
		<a href="../faculty.html"><span class="faculty">faculty</span></a> 
		<a href="../games.html"><span class="games">games</span></a> 
	</header> <!-- #navbar -->
	<div id="background"> <!-- MESSY -->
	</div> <!-- #background -->