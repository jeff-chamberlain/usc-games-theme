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
    	<a href="<?php echo site_url(); ?>"><span class="games_logo"></span></a>
        <a href="http://www.usc.edu/" target="_blank"><span class="usc_logo"></span></a>
		<?php
		$headnav = array(
		  'theme_location'  => 'head-nav',
		  'menu'            => 'head-nav',
		  'container'       => 'div',
		  'container_class' => 'header-menu',
		  'container_id'    => '',
		  'menu_class'      => 'header-navclass',
		  'menu_id'         => '',
		  'echo'            => true,
		  'fallback_cb'     => 'wp_page_menu',
		  'items_wrap'      => '<ul>%3$s</ul>'
		  );
		if(function_exists('wp_nav_menu')) {
		wp_nav_menu( $headnav );
		} else {
			echo '???';
		}
		?>
	</header> <!-- #navbar -->
	<div id="background"> <!-- MESSY -->
	</div> <!-- #background -->