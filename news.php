<?php
/* Template Name: USC Games News Page */  
get_header(); 
?>
<div id="content">
  <script type="text/javascript">
	$(window).load(function() {
	$('#slider4').nivoSlider({
	effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
	slices: 15, // For slice animations
	boxCols: 8, // For box animations
	boxRows: 4, // For box animations
	animSpeed: 750, // Slide transition speed
	pauseTime: 7500, // How long each slide will show
	startSlide: 0, // Set starting Slide (0 index)
	directionNav: true, // Next & Prev navigation
	directionNavHide: true, // Only show on hover
	controlNav: true, // 1,2,3... navigation
	controlNavThumbs: false, // Use thumbnails for Control Nav
	controlNavThumbsFromRel: false, // Use image rel for thumbs
	controlNavThumbsSearch: '.jpg', // Replace this with...
	controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
	keyboardNav: true, // Use left & right arrows
	pauseOnHover: true, // Stop animation while hovering
	manualAdvance: false, // Force manual transitions
	captionOpacity: 0.8, // Universal caption opacity
	prevText: 'Prev', // Prev directionNav text
	nextText: 'Next', // Next directionNav text
	randomStart: false, // Start on a random slide
	beforeChange: function(){}, // Triggers before a slide transition
	afterChange: function(){}, // Triggers after a slide transition
	slideshowEnd: function(){}, // Triggers after all slides have been shown
	lastSlide: function(){}, // Triggers when last slide is shown
	afterLoad: function(){} // Triggers when slider has loaded
	});
	});
  </script>
  <div class="textbox" style="left:25px; width:890px;">
    <div class="content">
    <div>
      <div>
      <span class="header" style="position:relative; top:-20px;"><a name="top"></a>_news</span>
      </div>
      <div id="newsslideshow" class="newsSlider">
        <div id="slider4" class="nivoSlider">
		  <?php $args = array( 'post_type' => 'uscgames_news',
                               'post_status' => 'publish',
                               'order' => 'ASC',
                               'orderby' => 'meta_value',
                               'posts_per_page' => '4' );
          $topnewslist = new WP_Query($args);
          while( $topnewslist->have_posts() ) : $topnewslist->the_post(); 
			$post_count++;
            $post_link = '#story' .  $post_count ?>
            <a href="<?php echo $post_link ?>"><?php if ( has_post_thumbnail() ) : the_post_thumbnail( array(472,351) ); else : echo 'blahblahblah'; endif; ?></a>
          <?php endwhile; 
		  wp_reset_postdata(); ?>
          
        </div>
        <!--<div id="news_caption1" class="nivo-html-caption">
        Caption1
        </div>
        <div id="news_caption2" class="nivo-html-caption">
        Caption2
        </div>
        <div id="news_caption3" class="nivo-html-caption">
        Caption3
        </div>
        <div id="news_caption4" class="nivo-html-caption">
        Caption4
        </div>-->
      </div>
      <?php while( $topnewslist->have_posts() ) : $topnewslist->the_post(); 
		$new_post_count++;
		$post_link = '#story' .  $new_post_count;
		if($new_post_count == 1 ) { ?>
          <div style="width:260px; float:right; padding-right:70px;">
            <span style="font-family:headerfont;"><?php echo get_the_date( 'm.d.y' ); ?></span><br />
            <div style="padding-left:35px;">
              <span style="color:#ffcc00; text-transform:uppercase;"><?php the_title(); ?></span><br />
              <?php the_excerpt(); ?>
              <a href="<?php echo $post_link ?>">READ MORE >></a>
            </div>
          </div>
          <div style="clear:both;"></div>
        </div>
      <?php } else { ?>
        <div class="thirdbox" <?php if($new_post_count = 4) : ?> style="margin-right:0px;"<?php else : ''; endif; ?>>
          <span style="font-family:headerfont;"><?php echo get_the_date( 'm.d.y' ); ?></span><br />
          <div style="padding-left:35px;">
            <span style="color:#ffcc00; text-transform:uppercase;"><?php the_title(); ?></span><br />
            <?php the_excerpt(); ?>	
            <a href="<?php echo $post_link ?>">READ MORE >></a>
          </div>
        </div>
	  <?php }
	  endwhile; ?>
      <div style="clear:both;"></div>
      <div style="position:relative; bottom:-20px; z-index:1;">
        <p align="right"><a href="#story5">OLD STORIES>></a></p>
      </div>
    </div>
  </div>
  <?php $newargs = array( 'post_type' => 'uscgames_news',
                               'post_status' => 'publish',
                               'order' => 'ASC',
                               'orderby' => 'meta_value',
                               'posts_per_page' => '10' );
          $allnewslist = new WP_Query($newargs);
          while( $allnewslist->have_posts() ) : $allnewslist->the_post();
          	$all_post_count++;
			$post_link = 'story' .  $all_post_count; ?>
  <div class="newsline"></div>
  <div class="textbox" style="left:25px; width:890px;">
    <div class="content">
      <a name="<?php echo $post_link ?>"><span style="font-family:headerfont;"><?php echo get_the_date( 'm.d.y' ); ?></span></a><br />
      <span style="color:#ffcc00; text-transform:uppercase;"><?php the_title(); ?></span><br />
      <?php the_content(); ?>
      <br />
      <a href="#top">BACK TO TOP</a>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>