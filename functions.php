<?php
/**
 * USC Games Theme functions and definitions
 *
 * @package USC Games Theme
 * @since USCGames Theme v1.0
 */
 if ( ! isset( $content_width ) )
    $content_width = 980; /* pixels */
/** Enqueue scripts and styles */
function uscgames_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'feature-slider', get_template_directory_uri()  . '/feature-slider.css' );
    wp_enqueue_style( 'faculty-slider', get_template_directory_uri()  . '/faculty-slider.css' );
    wp_enqueue_script( 'jquery.min', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js' );
	wp_enqueue_script( 'jquery.nivo.slider.pack', get_template_directory_uri()  . '/scripts/jquery.nivo.slider.pack.js' );
}
add_action( 'wp_enqueue_scripts', 'uscgames_scripts' );
//New admin menu items
function uscgames_add_menus() {
	add_theme_page('Home Images Sliders', 'Home Image Sliders', 'manage_options', 'uscgames_home_image_handle', 'uscgames_home_image_slider' );
}
function uscgames_home_image_slider() {
	if (!current_user_can('manage_options'))
    {
      wp_die( __('You do not have sufficient permissions to access this page.') );
    }
	// variables for the field and option names 
    $opt_name = 'mt_favorite_color';
    $hidden_field_name = 'mt_submit_hidden';
    $data_field_name = 'mt_favorite_color';

    // Read in existing option value from database
    $opt_val = get_option( $opt_name );

    // See if the user has posted us some information
    // If they did, this hidden field will be set to 'Y'
    if( isset($_POST[ $hidden_field_name ]) && $_POST[ $hidden_field_name ] == 'Y' ) {
        // Read their posted value
        $opt_val = $_POST[ $data_field_name ];

        // Save the posted value in the database
        update_option( $opt_name, $opt_val );

        // Put an settings updated message on the screen

?>
<div class="updated"><p><strong><?php _e('settings saved.', 'menu-test' ); ?></strong></p></div>
<?php

    }
    ?>
<!-- Now display slider edit -->
<div class="wrap"> 
<h2>Main Image Slider</h2>
<form name="form1" method="post" action="">
<input type="hidden" name="<?php echo $hidden_field_name; ?>" value="Y">

<p>Image 1
<input type="text" name="<?php echo $data_field_name; ?>" value="<?php echo $opt_val; ?>" size="50">
</p><hr />

<p class="submit">
<input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
</p>

</form>
</div>
<?php
}

// Hook for adding admin menus
add_action('admin_menu', 'uscgames_add_menus');


