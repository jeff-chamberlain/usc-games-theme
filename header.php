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
<?php if( is_front_page() ) { ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/feature-slider.css" type="text/css" media="screen" />;
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/faculty-slider.css" type="text/css" media="screen" />;
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri() ?>/scripts/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<?php } elseif ( is_page_template( 'about.php' ) ) { ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/about-slider.css" type="text/css" media="screen" />;
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri() ?>/scripts/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<?php } elseif ( is_page_template( 'news.php' )  ) { ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/news-slider.css" type="text/css" media="screen" />;
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo get_template_directory_uri() ?>/scripts/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<?php }; ?>
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