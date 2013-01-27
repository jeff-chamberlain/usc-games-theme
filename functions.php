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
/*
*Add the main home image slider as a widget area
*/
register_sidebar(array( 
        'name' => 'USCGames Home Slider 1',  
        'id'   => 'uscgames_slider1',  
        'description'   => 'First image in Home image slider',
		'class'         => '' ,
		'before_widget' => '',
		'after_widget'  => '',));
/*
*Remove the admin bar from the front end
*/
show_admin_bar( false );
/**
 * Adds USCGames_homeslider widget.
 */
class USCGames_Homeslider extends WP_Widget {
	
	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'uscgames_homeslider', // Base ID
			'USCGames_Homeslider', // Name
			array( 'description' => __( 'Holds images for main slider on USC Games Home page', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		$image1 = apply_filters( 'widget_text', empty( $instance['image1'] ) ? '' : $instance['image1'], $instance );
		$link1 = apply_filters( 'widget_text', empty( $instance['link1'] ) ? '' : $instance['link1'], $instance );
		$blurb1 = apply_filters( 'widget_text', empty( $instance['blurb1'] ) ? '' : $instance['blurb1'], $instance );
		$image2 = apply_filters( 'widget_text', empty( $instance['image2'] ) ? '' : $instance['image2'], $instance );
		$link2 = apply_filters( 'widget_text', empty( $instance['link2'] ) ? '' : $instance['link2'], $instance );
		$blurb2 = apply_filters( 'widget_text', empty( $instance['blurb2'] ) ? '' : $instance['blurb2'], $instance );
		$image3 = apply_filters( 'widget_text', empty( $instance['image3'] ) ? '' : $instance['image3'], $instance );
		$link3 = apply_filters( 'widget_text', empty( $instance['link3'] ) ? '' : $instance['link3'], $instance );
		$blurb3 = apply_filters( 'widget_text', empty( $instance['blurb3'] ) ? '' : $instance['blurb3'], $instance );
		$image4 = apply_filters( 'widget_text', empty( $instance['image4'] ) ? '' : $instance['image4'], $instance );
		$link4 = apply_filters( 'widget_text', empty( $instance['link4'] ) ? '' : $instance['link4'], $instance );
		$blurb4 = apply_filters( 'widget_text', empty( $instance['blurb4'] ) ? '' : $instance['blurb4'], $instance );
		$image5 = apply_filters( 'widget_text', empty( $instance['image5'] ) ? '' : $instance['image5'], $instance );
		$link5 = apply_filters( 'widget_text', empty( $instance['link5'] ) ? '' : $instance['link5'], $instance );
		$blurb5 = apply_filters( 'widget_text', empty( $instance['blurb5'] ) ? '' : $instance['blurb5'], $instance );
		?>
        <div id="slider" class="nivoSlider">
    		<a href="<?php echo $link1 ?>" target="_blank"><img src="<?php echo $image1 ?>" alt="" title="#caption1" /></a>
   			<a href="<?php echo $link2 ?>" target="_blank"><img src="<?php echo $image2 ?>" alt="" title="#caption1" /></a>
    		<a href="<?php echo $link3 ?>" target="_blank"><img src="<?php echo $image3 ?>" alt="" title="#caption1" /></a>
            <a href="<?php echo $link4 ?>" target="_blank"><img src="<?php echo $image4 ?>" alt="" title="#caption1" /></a>
            <a href="<?php echo $link5 ?>" target="_blank"><img src="<?php echo $image5 ?>" alt="" title="#caption1" /></a>
		</div>
        <div id="caption1" class="nivo-html-caption">
            <div class="textbox">
                <div class="content"><?php echo $blurb1 ?></div>
            </div>
        </div>
        <div id="caption1" class="nivo-html-caption">
            <div class="textbox">
                <div class="content"><?php echo $blurb2 ?></div>
            </div>
        </div>
        <div id="caption1" class="nivo-html-caption">
            <div class="textbox">
                <div class="content"><?php echo $blurb3 ?></div>
            </div>
        </div>
        <div id="caption1" class="nivo-html-caption">
            <div class="textbox">
                <div class="content"><?php echo $blurb4 ?></div>
            </div>
        </div>
        <div id="caption1" class="nivo-html-caption">
            <div class="textbox">
                <div class="content"><?php echo $blurb5 ?></div>
            </div>
        </div>
        <?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['image1'] =  $new_instance['image1'];
		$instance['link1'] =  $new_instance['link1'];
		$instance['blurb1'] =  $new_instance['blurb1'];
		$instance['image2'] =  $new_instance['image2'];
		$instance['link2'] =  $new_instance['link2'];
		$instance['blurb2'] =  $new_instance['blurb2'];
		$instance['image3'] =  $new_instance['image3'];
		$instance['link3'] =  $new_instance['link3'];
		$instance['blurb3'] =  $new_instance['blurb3'];
		$instance['image4'] =  $new_instance['image4'];
		$instance['link4'] =  $new_instance['link4'];
		$instance['blurb4'] =  $new_instance['blurb4'];
		$instance['image5'] =  $new_instance['image5'];
		$instance['link5'] =  $new_instance['link5'];
		$instance['blurb5'] =  $new_instance['blurb5'];
		return $instance;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'image1' => '', 'link1' => '', 'blurb1' => '', 'image2' => '', 'link2' => '', 'blurb2' => '', 'image3' => '', 'link3' => '', 'blurb3' => '', 'image4' => '', 'link4' => '', 'blurb4' => '', 'image5' => '', 'link5' => '', 'blurb5' ) );
		$image1 = strip_tags($instance['image1']);
		$link1 = strip_tags($instance['link1']);
		$blurb2 = esc_textarea($instance['blurb2']);
		$image2 = strip_tags($instance['image2']);
		$link2 = strip_tags($instance['link2']);
		$blurb3 = esc_textarea($instance['blurb3']);
		$image3 = strip_tags($instance['image3']);
		$link3 = strip_tags($instance['link3']);
		$blurb3 = esc_textarea($instance['blurb3']);
		$image4 = strip_tags($instance['image4']);
		$link4 = strip_tags($instance['link4']);
		$blurb4 = esc_textarea($instance['blurb4']);
		$image5 = strip_tags($instance['image5']);
		$link5 = strip_tags($instance['link5']);
		$blurb5 = esc_textarea($instance['blurb5']);
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'image1' ); ?>"><?php _e( 'Image 1:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'image1' ); ?>" name="<?php echo $this->get_field_name( 'image1' ); ?>" type="text" value="<?php echo esc_attr( $image1 ); ?>" />
		</p>
        <p>
        <label for="<?php echo $this->get_field_id( 'link1' ); ?>"><?php _e( 'Link 1:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'link1' ); ?>" name="<?php echo $this->get_field_name( 'link1' ); ?>" type="text" value="<?php echo esc_attr( $link1 ); ?>" />
        </p>
        <p>
         <label for="<?php echo $this->get_field_id( 'blurb1' ); ?>"><?php _e( 'Blurb 1:' ); ?></label> 
        <textarea class="widefat" rows="5" cols="15" id="<?php echo $this->get_field_id('blurb1'); ?>" name="<?php echo $this->get_field_name('blurb1'); ?>"><?php echo $blurb1; ?></textarea>
		</p>
        <p>
		<label for="<?php echo $this->get_field_id( 'image2' ); ?>"><?php _e( 'Image 2:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'image2' ); ?>" name="<?php echo $this->get_field_name( 'image2' ); ?>" type="text" value="<?php echo esc_attr( $image2 ); ?>" />
		</p>
        <p>
        <label for="<?php echo $this->get_field_id( 'link2' ); ?>"><?php _e( 'Link 2:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'link2' ); ?>" name="<?php echo $this->get_field_name( 'link2' ); ?>" type="text" value="<?php echo esc_attr( $link2 ); ?>" />
        </p>
        <p>
         <label for="<?php echo $this->get_field_id( 'blurb2' ); ?>"><?php _e( 'Blurb 2:' ); ?></label> 
        <textarea class="widefat" rows="5" cols="15" id="<?php echo $this->get_field_id('blurb2'); ?>" name="<?php echo $this->get_field_name('blurb2'); ?>"><?php echo $blurb2; ?></textarea>
		</p>
        <p>
		<label for="<?php echo $this->get_field_id( 'image3' ); ?>"><?php _e( 'Image 3:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'image3' ); ?>" name="<?php echo $this->get_field_name( 'image3' ); ?>" type="text" value="<?php echo esc_attr( $image3 ); ?>" />
		</p>
        <p>
        <label for="<?php echo $this->get_field_id( 'link3' ); ?>"><?php _e( 'Link 3:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'link3' ); ?>" name="<?php echo $this->get_field_name( 'link3' ); ?>" type="text" value="<?php echo esc_attr( $link3 ); ?>" />
        </p>
        <p>
         <label for="<?php echo $this->get_field_id( 'blurb3' ); ?>"><?php _e( 'Blurb 3:' ); ?></label> 
        <textarea class="widefat" rows="5" cols="35" id="<?php echo $this->get_field_id('blurb3'); ?>" name="<?php echo $this->get_field_name('blurb3'); ?>"><?php echo $blurb3; ?></textarea>
		</p>
        <p>
		<label for="<?php echo $this->get_field_id( 'image4' ); ?>"><?php _e( 'Image 4:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'image4' ); ?>" name="<?php echo $this->get_field_name( 'image4' ); ?>" type="text" value="<?php echo esc_attr( $image4 ); ?>" />
		</p>
        <p>
        <label for="<?php echo $this->get_field_id( 'link4' ); ?>"><?php _e( 'Link 4:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'link4' ); ?>" name="<?php echo $this->get_field_name( 'link4' ); ?>" type="text" value="<?php echo esc_attr( $link4 ); ?>" />
        </p>
        <p>
         <label for="<?php echo $this->get_field_id( 'blurb4' ); ?>"><?php _e( 'Blurb 4:' ); ?></label> 
        <textarea class="widefat" rows="5" cols="45" id="<?php echo $this->get_field_id('blurb4'); ?>" name="<?php echo $this->get_field_name('blurb4'); ?>"><?php echo $blurb4; ?></textarea>
		</p>
        <p>
		<label for="<?php echo $this->get_field_id( 'image5' ); ?>"><?php _e( 'Image 5:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'image5' ); ?>" name="<?php echo $this->get_field_name( 'image5' ); ?>" type="text" value="<?php echo esc_attr( $image5 ); ?>" />
		</p>
        <p>
        <label for="<?php echo $this->get_field_id( 'link5' ); ?>"><?php _e( 'Link 5:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'link5' ); ?>" name="<?php echo $this->get_field_name( 'link5' ); ?>" type="text" value="<?php echo esc_attr( $link5 ); ?>" />
        </p>
        <p>
         <label for="<?php echo $this->get_field_id( 'blurb5' ); ?>"><?php _e( 'Blurb 5:' ); ?></label> 
        <textarea class="widefat" rows="5" cols="55" id="<?php echo $this->get_field_id('blurb5'); ?>" name="<?php echo $this->get_field_name('blurb5'); ?>"><?php echo $blurb5; ?></textarea>
		</p>
		<?php 
	}

} // class USCGames_homeslider

// register USCGames_homeslider widget
add_action( 'widgets_init', create_function( '', 'register_widget( "uscgames_homeslider" );' ) );