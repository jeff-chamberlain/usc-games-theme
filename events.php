<?php
/* Template Name: USC Games Events Page */  
get_header(); 
?>
<div id="content">
  <div class="textbox" style="left:25px; width:890px;">
    <div class="content"><span class="header" style="font-size:200%"><p align="right"><a name="top"></a>_events</p></span>
      <div>
        <span style="font-size:150%; color:#ffcc00;">COMING UP</span>
        <!--Past Evnts header went here, but doesn't make sense anymore-->
        <div style="position:absolute; left:296px; bottom:0px;">
          <span style="font-size:120%; color:#ffcc00;"></span>
        </div>
      </div>
      <div>
		<?php $args = array( 'post_type' => 'uscgames_events',
							 'post_status' => 'publish',
							 'order' => 'ASC',
							 'orderby' => 'meta_value',
							 'meta_compare' => '>=',
							 'meta_value' => strtotime(date_i18n('m/d/y')),
							 'meta_key' => 'uscgames_event_date' );
        $featurelist = new WP_Query($args);
		while( $featurelist->have_posts()  && ($post_count < 3 ) ) : $featurelist->the_post(); 
		  $post_count++;
		  $post_link = '#story' . $post_count; ?>
		  <div style="width:260px;top:0px; float:left; <?php if($post_count != 3) : ?> margin-right:36px;<?php else : ''; endif; ?>">
			<span style="font-family:headerfont;"><?php echo date("m.d.y", get_post_meta( get_the_ID() , 'uscgames_event_date', true ) ); ?></span><br/>
			<p style="padding-left:35px;"><a href="#story1"><?php the_title(); ?></a><br />
			<span style="color:#ffcc00;">WHEN: <?php echo get_post_meta( get_the_ID() , 'uscgames_event_when', true )?><br />
            WHERE: <?php echo get_post_meta( get_the_ID() , 'uscgames_event_where', true )?></span><br /><br />
			<?php echo get_the_excerpt();?><br>
			<a href="<?php echo $post_link ?>">READ MORE >></a></p>
		  </div>
		<?php endwhile;
		if ($post_count < 3) : 
        	$post_count++ ?>
          <div style="width:260px;top:0px; float:left; <?php if($post_count != 3) : ?> margin-right:36px;<?php else : ''; endif; ?>">
          <br /><br />
          </div>
		<?php endif; ?>
      </div>
      <div style="clear:both;"></div>
      <div style=" bottom:0px;">
        <p align="right"><a href="#oldevent">OLD EVENTS>></a></p>
      </div>
    </div>
  </div>
  <?php //rewind_posts();
  $comingeventslist = new WP_Query($args);
  while( $comingeventslist->have_posts()  && ($event_count < 10 ) ) : $comingeventslist->the_post();
  $event_count++;
  $event_name = 'story' . $event_count; ?>
  <div class="textbox" style="left:25px; width:890px;">
    <div class="content">
      <a name="<?php echo $event_name ?>"><?php the_title(); ?></a><br />
      <span style="color:#ffcc00;">WHEN: <?php echo get_post_meta( get_the_ID() , 'uscgames_event_when', true )?><br />
      WHERE: <?php echo get_post_meta( get_the_ID() , 'uscgames_event_where', true )?></span><br /><br />
      <?php echo get_the_content(); ?><br />
      <a href="#top">BACK TO TOP</a>
    </div>
  </div>
  <?php endwhile; ?>
  <div style="position:relative;">
    <span style="font-size:120%; color:#ffcc00;">PAST EVENTS</span>
  </div>
  <?php 
  $pastargs = array( 'post_type' => 'uscgames_events',
							 'post_status' => 'publish',
							 'order' => 'DEC',
							 'orderby' => 'meta_value',
							 'meta_compare' => '<=',
							 'meta_value' => strtotime(date_i18n('m/d/y')),
							 'meta_key' => 'uscgames_event_date' );
  $pasteventslist = new WP_Query($pastargs);
  while( $pasteventslist->have_posts()  && ($event_count < 10 ) ) : $pasteventslist->the_post(); ?>
  <div class="textbox" style="left:25px; width:890px;">
    <div class="content">
      <a name="oldevent"><?php the_title(); ?></a><br />
      <span style="color:#ffcc00;">WHEN: <?php echo get_post_meta( get_the_ID() , 'uscgames_event_when', true )?><br />
      WHERE: <?php echo get_post_meta( get_the_ID() , 'uscgames_event_where', true )?></span><br /><br />
      <?php echo get_the_content(); ?><br />
      <a href="#top">BACK TO TOP</a>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>