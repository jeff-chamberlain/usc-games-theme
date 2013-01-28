<?php
/* Template Name: USC Games Events Page */  
get_header(); 
?>
<div id="content">
  <div class="textbox" style="left:15px; width:890px;">
    <div class="content"><span class="header" style="font-size:200%"><p align="right"><a name="top"></a>_events</p></span>
      <div style="position:relative; width:260px">
        <span style="font-size:150%; color:#ffcc00;">COMING UP</span>
        <div style="position:absolute; width:260px; bottom:0px; left:294px;">
          <span style="font-size:120%; color:#ffcc00;">PAST EVENTS</span>
        </div>
      </div>
      <div style="position:relative; height:400px;">
		<?php $args = array( 'post_type' => 'uscgames_events',
							 'post_status' => 'publish',
							 'order' => 'DEC',
							 'orderby' => 'meta_value',
							 'meta_key' => 'uscgames_event_date' );
        $eventslist = new WP_Query($args);
		while( $eventslist->have_posts()  && ($post_count < 3 ) ) : $eventslist->the_post(); 
		  $post_count++;
		  $post_link = '#story' . $post_count; ?>
		  <div style="width:260px;top:0px; float:left; <?php if($post_count != 2) : ?> margin-right:35px;<?php else : ''; endif; ?>">
			<span style="font-family:headerfont;"><?php echo date("m.d.y", get_post_meta( get_the_ID() , 'uscgames_event_date', true ) ); ?></span><br/>
			<p style="padding-left:35px;"><a href="#story1"><?php the_title(); ?></a><br />
			<span style="color:#ffcc00;"><?php echo get_the_excerpt(); ?></span><br /><br />
			<?php echo get_the_content();?><br>
			<a href="<?php echo $post_link ?>">READ MORE >></a></p>
		  </div>
		<?php endwhile; ?>
      </div>
      <div style=" bottom:0px;">
        <p align="right"><a href="#story4">OLD EVENTS>></a></p>
      </div>
    </div>
  </div>
  <?php rewind_posts();
  while( $eventslist->have_posts()  && ($event_count < 10 ) ) : $eventslist->the_post();
  $event_count++;
  $event_name = 'story' . $event_count; ?> ?>
  <div class="textbox" style="left:15px; width:890px;">
    <div class="content">
      <a name="<?php echo $event_name ?>">DEMO DAY</a><br />
      <span style="color:#ffcc00;">WHEN: Wednesday, December 12, 2012, 1:00PM – 4:00PM<br />
      WHERE: School of Cinematic Arts Gallery, 900 W. 34th Street, Los Angeles, CA 90089</span><br /><br />
      We are excited to announce a new format this year for the fall Demo Day, which entails longer hands-on demos, and opportunities for industry professionals to meet and interact with game design students.
      <br /><br />
      Presenting students are enrolled in either the School of Cinematic Arts (B.A., Interactive Media; M.F.A., Interactive Media) or Viterbi School of Engineering (B.S., Computer Science - Games; M.S., Computer Science - Game Development; Ph.D., Computer Science - Games). Concept art, 3D models, animation, rigging, music and sound for the games are provided by students across USC, as well as collaborative schools such as Laguna College of Art & Design and Atlantic College in Puerto Rico.<br /><br />
      This year's demonstrations will include:<br /><ul>
      <li>Conclave - <a target="_blank" title="Conclave" href="http://conclavemod.com/">http://conclavemod.com/</a></li>
      <li>Core Overload - <a target="_blank" title="Core Overload" href="http://core.metagame-studios.com/">http://core.metagame-studios.com/</a></li>
      <li>Holodeck - <a target="_blank" title="Holodeck" href="http://www.projectholodeck.com/">http://www.projectholodeck.com/</a></li>
      <li>Homeward - <a target="_blank" title="Homeward" href="https://sites.google.com/site/homewarddesign/">https://sites.google.com/site/homewarddesign/</a></li>
      <li>House of Cards - <a target="_blank" title="House of Cards" href="http://houseofcardsgame.com/">http://houseofcardsgame.com/</a></li>
      <li>Outer Wilds - <a target="_blank" title="Outer Wilds" href="https://sites.google.com/site/outerwildsgame/">https://sites.google.com/site/outerwildsgame/</a></li>
      <li>Scrapyard - <a target="_blank" title="Scrapyard" href="http://www.scrapyardthegame.com/">http://www.scrapyardthegame.com/</a></li>
      <li>Thralled - <a target="_blank" title="Thralled" href="http://www.thralled.org/">http://www.thralled.org/</a></li></ul>
      CONTACT: Suzanne Wu, USC Media Relations<br />
      Kristin Borella, USC School of Cinematic Arts<br />
      Michael Chung, USC Viterbi School of Engineering<br />
      <a href="#top">BACK TO TOP</a>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>