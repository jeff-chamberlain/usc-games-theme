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
}
add_action( 'wp_enqueue_scripts', 'uscgames_scripts' );
/*Add the main home image slider as a widget area
*/
register_sidebar(array( 
        'name' => 'USCGames Main Slider',  
        'id'   => 'uscgames_main_slider',  
        'description'   => 'Holds images for the main slider on the USC Games "Home" page. Always fill ALL SPACES and use with USCGames Main Slider Widget ONLY!',
		'class'         => '' ,
		'before_widget' => '',
		'after_widget'  => '',));
register_sidebar(array( 
        'name' => 'USCGames Featured People Slider',  
        'id'   => 'uscgames_featured_slider',  
        'description'   => 'Holds images for the "Featured People" slider on the USC Games "Home" page. Always fill ALL SPACES and use with USCGames Featured People Slider Widget ONLY!',
		'class'         => '' ,
		'before_widget' => '',
		'after_widget'  => '',));
register_sidebar(array( 
        'name' => 'USCGames Success Stories Slider',  
        'id'   => 'uscgames_success_slider',  
        'description'   => 'Holds images for the "Success Stories" slider on the USC Games "About" page. Always fill ALL SPACES and use with USCGames Success Stories Slider Widget ONLY!',
		'class'         => '' ,
		'before_widget' => '',
		'after_widget'  => '',));
/*
*Remove the admin bar from the front end
*/
show_admin_bar( false );
/*
/**
 * Adds USCGames_homeslider widget.
 */
class uscgames_main_widget extends WP_Widget {
	
	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'uscgames_main_widget', // Base ID
			'USCGames Main Slider Widget', // Name
			array( 'description' => __( 'Defines images for main slider on USC Games Home page. Always fill ALL SPACES and use in USCGames Main Slider Sidebar ONLY!', 'text_domain' ), ) // Args
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
   			<a href="<?php echo $link2 ?>" target="_blank"><img src="<?php echo $image2 ?>" alt="" title="#caption2" /></a>
    		<a href="<?php echo $link3 ?>" target="_blank"><img src="<?php echo $image3 ?>" alt="" title="#caption3" /></a>
            <a href="<?php echo $link4 ?>" target="_blank"><img src="<?php echo $image4 ?>" alt="" title="#caption4" /></a>
            <a href="<?php echo $link5 ?>" target="_blank"><img src="<?php echo $image5 ?>" alt="" title="#caption5" /></a>
		</div>
        <div id="caption1" class="nivo-html-caption">
            <div class="textbox">
                <div class="content"><?php echo $blurb1 ?></div>
            </div>
        </div>
        <div id="caption2" class="nivo-html-caption">
            <div class="textbox">
                <div class="content"><?php echo $blurb2 ?></div>
            </div>
        </div>
        <div id="caption3" class="nivo-html-caption">
            <div class="textbox">
                <div class="content"><?php echo $blurb3 ?></div>
            </div>
        </div>
        <div id="caption4" class="nivo-html-caption">
            <div class="textbox">
                <div class="content"><?php echo $blurb4 ?></div>
            </div>
        </div>
        <div id="caption5" class="nivo-html-caption">
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
		$blurb1 = esc_textarea($instance['blurb1']);
		$image2 = strip_tags($instance['image2']);
		$link2 = strip_tags($instance['link2']);
		$blurb2 = esc_textarea($instance['blurb2']);
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
/**
 * Adds USCGames_homeslider widget.
 */
} // class USCGames_homeslider
class uscgames_feat_widget extends WP_Widget {
	
	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'uscgames_feat_widget', // Base ID
			'USCGames Featured Slider Widget', // Name
			array( 'description' => __( 'Defines images for "Featured People" slider on USC Games Home page. Always fill ALL SPACES and use in USCGames Featured People Slider Sidebar ONLY!', 'text_domain' ), ) // Args
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
		$name1 = apply_filters( 'widget_text', empty( $instance['name1'] ) ? '' : $instance['name1'], $instance );
		$blurb1 = apply_filters( 'widget_text', empty( $instance['blurb1'] ) ? '' : $instance['blurb1'], $instance );
		$image2 = apply_filters( 'widget_text', empty( $instance['image2'] ) ? '' : $instance['image2'], $instance );
		$name2 = apply_filters( 'widget_text', empty( $instance['name2'] ) ? '' : $instance['name2'], $instance );
		$blurb2 = apply_filters( 'widget_text', empty( $instance['blurb2'] ) ? '' : $instance['blurb2'], $instance );
		$image3 = apply_filters( 'widget_text', empty( $instance['image3'] ) ? '' : $instance['image3'], $instance );
		$name3 = apply_filters( 'widget_text', empty( $instance['name3'] ) ? '' : $instance['name3'], $instance );
		$blurb3 = apply_filters( 'widget_text', empty( $instance['blurb3'] ) ? '' : $instance['blurb3'], $instance );
		$image4 = apply_filters( 'widget_text', empty( $instance['image4'] ) ? '' : $instance['image4'], $instance );
		$name4 = apply_filters( 'widget_text', empty( $instance['name4'] ) ? '' : $instance['name4'], $instance );
		$blurb4 = apply_filters( 'widget_text', empty( $instance['blurb4'] ) ? '' : $instance['blurb4'], $instance );
		?>
          <div id="slider2" class="nivoSlider">
            <a href="<?php echo site_url(); ?>/faculty"><img src="<?php echo $image1 ?>" alt=""title="#fac_caption1" /></a>
            <a href="<?php echo site_url(); ?>/faculty"><img src="<?php echo $image2 ?>" alt="" title="#fac_caption2" /></a>
            <a href="<?php echo site_url(); ?>/faculty"><img src="<?php echo $image3 ?>" alt="" title="#fac_caption3" /></a>
            <a href="<?php echo site_url(); ?>/faculty"><img src="<?php echo $image4 ?>" alt="" title="#fac_caption4" /></a>
          </div>
          <div id="fac_caption1" class="nivo-html-caption">
            <a href="<?php echo site_url(); ?>/faculty"><?php echo $name1 ?></a>
            <br />
            <?php echo $blurb1 ?>
          </div>
          <div id="fac_caption2" class="nivo-html-caption">
            <a href="<?php echo site_url(); ?>/faculty"><?php echo $name2 ?></a>
            <br />
            <?php echo $blurb2 ?>
          </div>
          <div id="fac_caption3" class="nivo-html-caption">
            <a href="<?php echo site_url(); ?>/faculty"><?php echo $name3 ?></a>
            <br />
            <?php echo $blurb3 ?>
          </div>
          <div id="fac_caption4" class="nivo-html-caption">
            <a href="<?php echo site_url(); ?>/faculty"><?php echo $name4 ?></a>
            <br />
            <?php echo $blurb4 ?>
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
		$instance['name1'] =  $new_instance['name1'];
		$instance['blurb1'] =  $new_instance['blurb1'];
		$instance['image2'] =  $new_instance['image2'];
		$instance['name2'] =  $new_instance['name2'];
		$instance['blurb2'] =  $new_instance['blurb2'];
		$instance['image3'] =  $new_instance['image3'];
		$instance['name3'] =  $new_instance['name3'];
		$instance['blurb3'] =  $new_instance['blurb3'];
		$instance['image4'] =  $new_instance['image4'];
		$instance['name4'] =  $new_instance['name4'];
		$instance['blurb4'] =  $new_instance['blurb4'];
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
		$instance = wp_parse_args( (array) $instance, array( 'image1' => '', 'name1' => '', 'blurb1' => '', 'image2' => '', 'name2' => '', 'blurb2' => '', 'image3' => '', 'name3' => '', 'blurb3' => '', 'image4' => '', 'name4' => '', 'blurb4' ) );
		$image1 = strip_tags($instance['image1']);
		$name1 = strip_tags($instance['name1']);
		$blurb1 = esc_textarea($instance['blurb1']);
		$image2 = strip_tags($instance['image2']);
		$name2 = strip_tags($instance['name2']);
		$blurb2 = esc_textarea($instance['blurb2']);
		$image3 = strip_tags($instance['image3']);
		$name3 = strip_tags($instance['name3']);
		$blurb3 = esc_textarea($instance['blurb3']);
		$image4 = strip_tags($instance['image4']);
		$name4 = strip_tags($instance['name4']);
		$blurb4 = esc_textarea($instance['blurb4']);
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'image1' ); ?>"><?php _e( 'Image 1:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'image1' ); ?>" name="<?php echo $this->get_field_name( 'image1' ); ?>" type="text" value="<?php echo esc_attr( $image1 ); ?>" />
		</p>
        <p>
        <label for="<?php echo $this->get_field_id( 'name1' ); ?>"><?php _e( 'Name 1:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'name1' ); ?>" name="<?php echo $this->get_field_name( 'name1' ); ?>" type="text" value="<?php echo esc_attr( $name1 ); ?>" />
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
        <label for="<?php echo $this->get_field_id( 'name2' ); ?>"><?php _e( 'Name 2:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'name2' ); ?>" name="<?php echo $this->get_field_name( 'name2' ); ?>" type="text" value="<?php echo esc_attr( $name2 ); ?>" />
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
        <label for="<?php echo $this->get_field_id( 'name3' ); ?>"><?php _e( 'Name 3:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'name3' ); ?>" name="<?php echo $this->get_field_name( 'name3' ); ?>" type="text" value="<?php echo esc_attr( $name3 ); ?>" />
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
        <label for="<?php echo $this->get_field_id( 'name4' ); ?>"><?php _e( 'Name 4:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'name4' ); ?>" name="<?php echo $this->get_field_name( 'name4' ); ?>" type="text" value="<?php echo esc_attr( $name4 ); ?>" />
        </p>
        <p>
         <label for="<?php echo $this->get_field_id( 'blurb4' ); ?>"><?php _e( 'Blurb 4:' ); ?></label> 
        <textarea class="widefat" rows="5" cols="45" id="<?php echo $this->get_field_id('blurb4'); ?>" name="<?php echo $this->get_field_name('blurb4'); ?>"><?php echo $blurb4; ?></textarea>
		</p>
		<?php 
	}

} // class uscgames_feat_widget
/*
/**
 * Adds uscgames_suc_widget widget.
 */
class uscgames_suc_widget extends WP_Widget {
	
	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'uscgames_suc_widget', // Base ID
			'USCGames Success Slider Widget', // Name
			array( 'description' => __( 'Defines images for "Success Stories" slider on USC Games About page. Always fill ALL SPACES and use in USCGames Success Stories Slider Sidebar ONLY!', 'text_domain' ), ) // Args
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
		$name1 = apply_filters( 'widget_text', empty( $instance['name1'] ) ? '' : $instance['name1'], $instance );
		$link1 = apply_filters( 'widget_text', empty( $instance['link1'] ) ? '' : $instance['link1'], $instance );
		$blurb1 = apply_filters( 'widget_text', empty( $instance['blurb1'] ) ? '' : $instance['blurb1'], $instance );
		$image2 = apply_filters( 'widget_text', empty( $instance['image2'] ) ? '' : $instance['image2'], $instance );
		$name2 = apply_filters( 'widget_text', empty( $instance['name2'] ) ? '' : $instance['name2'], $instance );
		$link2 = apply_filters( 'widget_text', empty( $instance['link2'] ) ? '' : $instance['link2'], $instance );
		$blurb2 = apply_filters( 'widget_text', empty( $instance['blurb2'] ) ? '' : $instance['blurb2'], $instance );
		$image3 = apply_filters( 'widget_text', empty( $instance['image3'] ) ? '' : $instance['image3'], $instance );
		$name3 = apply_filters( 'widget_text', empty( $instance['name3'] ) ? '' : $instance['name3'], $instance );
		$link3 = apply_filters( 'widget_text', empty( $instance['link3'] ) ? '' : $instance['link3'], $instance );
		$blurb3 = apply_filters( 'widget_text', empty( $instance['blurb3'] ) ? '' : $instance['blurb3'], $instance );
		$image4 = apply_filters( 'widget_text', empty( $instance['image4'] ) ? '' : $instance['image4'], $instance );
		$name4 = apply_filters( 'widget_text', empty( $instance['name4'] ) ? '' : $instance['name4'], $instance );
		$link4 = apply_filters( 'widget_text', empty( $instance['link4'] ) ? '' : $instance['link4'], $instance );
		$blurb4 = apply_filters( 'widget_text', empty( $instance['blurb4'] ) ? '' : $instance['blurb4'], $instance );
		$image5 = apply_filters( 'widget_text', empty( $instance['image5'] ) ? '' : $instance['image5'], $instance );
		$name5 = apply_filters( 'widget_text', empty( $instance['name5'] ) ? '' : $instance['name5'], $instance );
		$link5 = apply_filters( 'widget_text', empty( $instance['link5'] ) ? '' : $instance['link5'], $instance );
		$blurb5 = apply_filters( 'widget_text', empty( $instance['blurb5'] ) ? '' : $instance['blurb5'], $instance );
		$image6 = apply_filters( 'widget_text', empty( $instance['image6'] ) ? '' : $instance['image6'], $instance );
		$name6 = apply_filters( 'widget_text', empty( $instance['name6'] ) ? '' : $instance['name6'], $instance );
		$link6 = apply_filters( 'widget_text', empty( $instance['link6'] ) ? '' : $instance['link6'], $instance );
		$blurb6 = apply_filters( 'widget_text', empty( $instance['blurb6'] ) ? '' : $instance['blurb6'], $instance );
		?>
        <div id="slider3" class="nivoSlider">
    		<a href="<?php echo $link1 ?>" target="_blank"><img src="<?php echo $image1 ?>" alt="" title="#suc_caption1" /></a>
   			<a href="<?php echo $link2 ?>" target="_blank"><img src="<?php echo $image2 ?>" alt="" title="#suc_caption2" /></a>
    		<a href="<?php echo $link3 ?>" target="_blank"><img src="<?php echo $image3 ?>" alt="" title="#suc_caption3" /></a>
            <a href="<?php echo $link4 ?>" target="_blank"><img src="<?php echo $image4 ?>" alt="" title="#suc_caption4" /></a>
            <a href="<?php echo $link5 ?>" target="_blank"><img src="<?php echo $image5 ?>" alt="" title="#suc_caption5" /></a>
            <a href="<?php echo $link6 ?>" target="_blank"><img src="<?php echo $image6 ?>" alt="" title="#suc_caption6" /></a>
		</div>
        <div id="suc_caption1" class="nivo-html-caption">
          <span style="color:#ffCC00;"><?php echo $name1 ?></span> - <?php echo $blurb1 ?>
        </div>
        <div id="suc_caption2" class="nivo-html-caption">
            <span style="color:#ffCC00;"><?php echo $name2 ?></span> - <?php echo $blurb2 ?>
        </div>
        <div id="suc_caption3" class="nivo-html-caption">
            <span style="color:#ffCC00;"><?php echo $name3 ?></span> - <?php echo $blurb3 ?>
        </div>
        <div id="suc_caption4" class="nivo-html-caption">
            <span style="color:#ffCC00;"><?php echo $name4 ?></span> - <?php echo $blurb4 ?>
        </div>
        <div id="suc_caption5" class="nivo-html-caption">
            <span style="color:#ffCC00;"><?php echo $name5 ?></span> - <?php echo $blurb5 ?>
        </div>
        <div id="suc_caption6" class="nivo-html-caption">
            <span style="color:#ffCC00;"><?php echo $name6 ?></span> - <?php echo $blurb6 ?>
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
		$instance['name1'] =  $new_instance['name1'];
		$instance['link1'] =  $new_instance['link1'];
		$instance['blurb1'] =  $new_instance['blurb1'];
		$instance['image2'] =  $new_instance['image2'];
		$instance['name2'] =  $new_instance['name2'];
		$instance['link2'] =  $new_instance['link2'];
		$instance['blurb2'] =  $new_instance['blurb2'];
		$instance['image3'] =  $new_instance['image3'];
		$instance['name3'] =  $new_instance['name3'];
		$instance['link3'] =  $new_instance['link3'];
		$instance['blurb3'] =  $new_instance['blurb3'];
		$instance['image4'] =  $new_instance['image4'];
		$instance['name4'] =  $new_instance['name4'];
		$instance['link4'] =  $new_instance['link4'];
		$instance['blurb4'] =  $new_instance['blurb4'];
		$instance['image5'] =  $new_instance['image5'];
		$instance['name5'] =  $new_instance['name5'];
		$instance['link5'] =  $new_instance['link5'];
		$instance['blurb5'] =  $new_instance['blurb5'];
		$instance['image6'] =  $new_instance['image6'];
		$instance['name6'] =  $new_instance['name6'];
		$instance['link6'] =  $new_instance['link6'];
		$instance['blurb6'] =  $new_instance['blurb6'];
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
		$name1 = strip_tags($instance['name1']);
		$link1 = strip_tags($instance['link1']);
		$blurb1 = esc_textarea($instance['blurb1']);
		$image2 = strip_tags($instance['image2']);
		$name2 = strip_tags($instance['name2']);
		$link2 = strip_tags($instance['link2']);
		$blurb2 = esc_textarea($instance['blurb2']);
		$image3 = strip_tags($instance['image3']);
		$name3 = strip_tags($instance['name3']);
		$link3 = strip_tags($instance['link3']);
		$blurb3 = esc_textarea($instance['blurb3']);
		$image4 = strip_tags($instance['image4']);
		$name4 = strip_tags($instance['name4']);
		$link4 = strip_tags($instance['link4']);
		$blurb4 = esc_textarea($instance['blurb4']);
		$image5 = strip_tags($instance['image5']);
		$name5 = strip_tags($instance['name5']);
		$link5 = strip_tags($instance['link5']);
		$blurb5 = esc_textarea($instance['blurb5']);
		$image6 = strip_tags($instance['image6']);
		$name6 = strip_tags($instance['name6']);
		$link6 = strip_tags($instance['link6']);
		$blurb6 = esc_textarea($instance['blurb6']);
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'image1' ); ?>"><?php _e( 'Image 1:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'image1' ); ?>" name="<?php echo $this->get_field_name( 'image1' ); ?>" type="text" value="<?php echo esc_attr( $image1 ); ?>" />
		</p>
        <p>
		<label for="<?php echo $this->get_field_id( 'name1' ); ?>"><?php _e( 'Name 1:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'name1' ); ?>" name="<?php echo $this->get_field_name( 'name1' ); ?>" type="text" value="<?php echo esc_attr( $name1 ); ?>" />
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
		<label for="<?php echo $this->get_field_id( 'name2' ); ?>"><?php _e( 'Name 2:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'name2' ); ?>" name="<?php echo $this->get_field_name( 'name2' ); ?>" type="text" value="<?php echo esc_attr( $name2 ); ?>" />
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
		<label for="<?php echo $this->get_field_id( 'name3' ); ?>"><?php _e( 'Name 3:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'name3' ); ?>" name="<?php echo $this->get_field_name( 'name3' ); ?>" type="text" value="<?php echo esc_attr( $name3 ); ?>" />
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
		<label for="<?php echo $this->get_field_id( 'name4' ); ?>"><?php _e( 'Name 4:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'name4' ); ?>" name="<?php echo $this->get_field_name( 'name4' ); ?>" type="text" value="<?php echo esc_attr( $name4 ); ?>" />
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
		<label for="<?php echo $this->get_field_id( 'name5' ); ?>"><?php _e( 'Name 5:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'name5' ); ?>" name="<?php echo $this->get_field_name( 'name5' ); ?>" type="text" value="<?php echo esc_attr( $name5 ); ?>" />
		</p>
        <p>
        <label for="<?php echo $this->get_field_id( 'link5' ); ?>"><?php _e( 'Link 5:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'link5' ); ?>" name="<?php echo $this->get_field_name( 'link5' ); ?>" type="text" value="<?php echo esc_attr( $link5 ); ?>" />
        </p>
        <p>
         <label for="<?php echo $this->get_field_id( 'blurb5' ); ?>"><?php _e( 'Blurb 5:' ); ?></label> 
        <textarea class="widefat" rows="5" cols="55" id="<?php echo $this->get_field_id('blurb5'); ?>" name="<?php echo $this->get_field_name('blurb5'); ?>"><?php echo $blurb5; ?></textarea>
		</p>
        <p>
		<label for="<?php echo $this->get_field_id( 'image6' ); ?>"><?php _e( 'Image 6:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'image6' ); ?>" name="<?php echo $this->get_field_name( 'image6' ); ?>" type="text" value="<?php echo esc_attr( $image6 ); ?>" />
		</p>
        <p>
		<label for="<?php echo $this->get_field_id( 'name6' ); ?>"><?php _e( 'Name 6:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'name6' ); ?>" name="<?php echo $this->get_field_name( 'name6' ); ?>" type="text" value="<?php echo esc_attr( $name6 ); ?>" />
		</p>
        <p>
        <label for="<?php echo $this->get_field_id( 'link6' ); ?>"><?php _e( 'Link 6:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'link6' ); ?>" name="<?php echo $this->get_field_name( 'link6' ); ?>" type="text" value="<?php echo esc_attr( $link6 ); ?>" />
        </p>
        <p>
         <label for="<?php echo $this->get_field_id( 'blurb6' ); ?>"><?php _e( 'Blurb 6:' ); ?></label> 
        <textarea class="widefat" rows="6" cols="66" id="<?php echo $this->get_field_id('blurb6'); ?>" name="<?php echo $this->get_field_name('blurb6'); ?>"><?php echo $blurb6; ?></textarea>
		</p>
		<?php 
	}
} // class USCGames_suc_widget
// register USCGames widgets
add_action( 'widgets_init', regMyWidgets() );
function regMyWidgets() {
	register_widget( "uscgames_main_widget" );
	register_widget( "uscgames_feat_widget" );
	register_widget( "uscgames_suc_widget" );
}
// register top nav menu
add_action( 'after_setup_theme', 'regMyMenu' );
function regMyMenus() {
register_nav_menu( array( 'head-nav' => __( 'Header Navigation Menu' ) ) );
}
//allow posts to have featured images attached (used for news)
add_theme_support( 'post-thumbnails' );
//create custom "event" and "news" post types
add_action( 'init', 'uscgames_create_eventandnews' );
function uscgames_create_eventandnews() {
    register_post_type( 'uscgames_events',
        array(
            'labels' => array(
                'name' => 'Events',
                'singular_name' => 'Event',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Event',
                'edit' => 'Edit',
                'edit_item' => 'Edit Event',
                'new_item' => 'New Event',
                'view' => 'View',
                'view_item' => 'View Event',
                'search_items' => 'Search Events',
                'not_found' => 'No Events found',
                'not_found_in_trash' => 'No Events found in Trash',
            ),
 
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
            'menu_icon' => 'http://www.usc.edu/favicon.ico',
            'has_archive' => true
        )
    );
	 register_post_type( 'uscgames_news',
        array(
            'labels' => array(
                'name' => 'News',
                'singular_name' => 'News Story',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New News Story',
                'edit' => 'Edit',
                'edit_item' => 'Edit News Story',
                'new_item' => 'New News Story',
                'view' => 'View',
                'view_item' => 'View News Story',
                'search_items' => 'Search News',
                'not_found' => 'No News found',
                'not_found_in_trash' => 'No News found in Trash',
            ),
 
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
            'menu_icon' => 'http://www.usc.edu/favicon.ico',
            'has_archive' => true
        )
    );
}
//create custom date field for events
add_action( 'admin_init', 'uscgames_addeventfields' );
function uscgames_addeventfields() {
    add_meta_box( 'uscgames_eventfields',
        'Event Details',
        'display_eventfields_metabox',
        'uscgames_events', 'normal', 'low'
    );
function display_eventfields_metabox( $uscgames_event ) {
// Retrieve current date based on event ID
$event_date = date("m/d/y", get_post_meta( $uscgames_event->ID, 'uscgames_event_date', true ) );
$event_when = get_post_meta( $uscgames_event->ID, 'uscgames_event_when', true );
$event_where = get_post_meta( $uscgames_event->ID, 'uscgames_event_where', true );
    ?>
    <p>
    <label for="event_date"><?php _e( 'Event Date (mm/dd/yy):' ); ?></label> 
	<input type="text" size="10" id="event_date" name="event_date" value="<?php echo $event_date; ?>" />
    </p>
    <p>
    <label for="event_when"><?php _e( 'Event When (More detailed description that may include time):' ); ?></label> 
	<input type="text" size="50" id="event_when" name="event_when" value="<?php echo $event_when; ?>" />
    </p>
    <p>
    <label for="event_where"><?php _e( 'Event Where:' ); ?></label> 
	<input type="text" size="50" id="event_where" name="event_where" value="<?php echo $event_where; ?>" />
    </p>
<?php }
}
add_action( 'save_post', 'add_event_fields', 10, 2 );
function add_event_fields( $event_id, $event ) {
    // Check post type for events
    if ( $event->post_type == 'uscgames_events' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['event_date'] ) && $_POST['event_date'] != '' ) {
            update_post_meta( $event_id, 'uscgames_event_date', strtotime( $_POST['event_date'] ) );
        }
		if ( isset( $_POST['event_date'] ) && $_POST['event_when'] != '' ) {
            update_post_meta( $event_id, 'uscgames_event_when', $_POST['event_when'] );
        }
		if ( isset( $_POST['event_date'] ) && $_POST['event_date'] != '' ) {
            update_post_meta( $event_id, 'uscgames_event_where', $_POST['event_where'] );
        }
    }
}
