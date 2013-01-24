<?php
/**
 * The frontpage
 *
 * @package USC Games Theme
 * @since USCGames Theme v1.0
 */
 
get_header(); ?>
<div id="content">
 <script type="text/javascript">
				$(window).load(function() {
					$('#slider').nivoSlider({
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
					$('#slider2').nivoSlider({
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
        	<div id="mainslider" class="featureSlider">
            	<div id="slider" class="nivoSlider">
    				<a href="http://cinema.usc.edu/news/article.cfm?id=12521" target="_blank"><img src="<?php echo $_GET[ 'mt_favorite_color' ] ?>" alt=""title="#caption1" /></a>
   					<a href="http://cinema.usc.edu/news/article.cfm?id=12842" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/slider2.png" alt="" title="#caption2" /></a>
    				<a href="http://cinema.usc.edu/news/article.cfm?id=12795" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/slider3.png" alt="" title="#caption3" /></a>
                    <a href="http://cinema.usc.edu/news/article.cfm?id=12769" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/slider4.png" alt="" title="#caption4" /></a>
                    <a href="http://cinema.usc.edu/news/article.cfm?id=12697" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/slider5.png" alt="" title="#caption5" /></a>
				</div>
				<div id="caption1" class="nivo-html-caption">
                    <div class="textbox">
                                   <div class="content">For the third year in a row, The Princeton Review has named USC the top school in the nation for studying video game design for both undergraduate and graduate programs. USC has led the category every year since the list debuted in 2010.
                    </div>
                    </div>
                </div>
                <div id="caption2" class="nivo-html-caption">
                	<div class="textbox">
                        <div class="content">Puzzlejuice is pitched as a "game that will punch your brain in the face." The game was designed by recent USC alum Asher Vollmer and has been racking up accolades since it was released in January of this year.
                    	</div>
                    </div>
                </div>
                <div id="caption3" class="nivo-html-caption">
                	<div class="textbox">
                        <div class="content">The Interactive Media Division at the USC School of Cinematic Arts has the backing and attention of many top video game companies and personalities. This July, Activision Blizzard executive George Rose joins their ranks by establishing the Rose Family Foundation Fellowship for Interactive Entertainment.
                    	</div>
                	</div>
                </div>
                <div id="caption4" class="nivo-html-caption">
                	<div class="textbox">
                        <div class="content">Ranked the number one game design school in North America by the Princeton Review and GamerPro Media for the third year running, USC is home to renowned faculty and staff.
                    	</div>
                    </div>
                </div>
                <div id="caption5" class="nivo-html-caption">
                	<div class="textbox">
                        <div class="content"> With the addition of leading game designer Richard Lemarchand to the faculty list beginning in Fall 2012, the bar has been raised even higher for USC Games.
                    	</div>
              		</div>
            	</div>
            </div>
            <div class="textbox" style="top:36px; left:20px; width:374px;">
                    <div class="content" style="font-size:18px; line-height:120%;"><span class="header">_about</span><br /><br />Recognized as the #1 game design program in North America by the Princeton Review and GamePro Magazine, USC Games represents an exciting collaboration between the School of Cinematic Arts' <a href="http://interactive.usc.edu/" target="_blank">Interactive Media Division</a> and the Viterbi School of Engineering's <a href="http://www.cs.usc.edu/" target="_blank">Department of Computer Science</a>. Incorporating elements of design, artistry and engineering, USC Games offers an utterly unique educational experience for students, and serves as the launching pad for them to play significant roles in the game design field. With rigorous, hands-on instruction from master designers, engineers and working professionals in the industry, students have an unprecedented level of opportunity to delve into every aspect of creating games for a global audience.<br /><br /><p align="right"><a href="about.html">READ MORE</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
            </div>
      		<div id="numberoneimage"></div>
            <div class="textbox" style="width:360px; left:50px;">
                    	<p style="text-align:center;"><span class="header">_degrees offered</span></p>
            </div>
            <div class="textbox" style="width:700px; left:50px;">
                   <div class="content">
                    	<div style="top:0px; left:0px; width:285px;"><a href="https://cinema.usc.edu/interactive/degrees.cfm" target="_blank">SCHOOL OF CINEMATIC ARTS DEGREES</a>
<br /><br />
<span style="color:#ffcc00;">B.A. in Interactive Entertainment</span><br />
The Bachelor of Arts in Interactive Entertainment combines a broad liberal arts background with specialization in the design of games and interactive entertainment. Students make games at all levels of the program gaining hands-on skills across a range of digital media arts. Hands-on skills are taught within a vibrant community of thought that explores new models of interactivity as well as emerging markets and platforms for playful media. Emphasis is placed on collaboration, teambuilding, innovation and creative leadership.
<br /><br />
<span style="color:#ffcc00;">M.F.A. in Interactive Media</span><br />
The M.F.A. in Interactive Media is an intensive three-year program designed to prepare students to become creative thought leaders and innovators in the evolving fields of games and interactive entertainment. As with the undergraduate degree, M.F.A. students are immersed in hands-on project development, gaining skills in design, development, collaboration and creative leadership, culminating in a year long thesis 
project. 
<br /><br />
The M.F.A. program draws on the strengths of the School of Cinematic Arts, including Game Design, Animation, Sound Production, Screenwriting, Producing and Critical Studies, bringing these resources together in a vibrant community of innovative digital media practice.</div>
						<div style="top:0px; right:38px; width:290px; position:absolute;"><a href="http://www.cs.usc.edu/academics/" target="_blank">VITERBI SCHOOL OF ENGINEERING DEGREES</a>
<br /><br />
<span style="color:#ffcc00;">B.S. in Computer Science (Games)</span><br />
The goal of the B.S. in Computer Science (Games) program is to graduate students with a solid grounding in computer science and a cross-disciplinary background in game development.
<br /><br />
<span style="color:#ffcc00;">M.S. in Computer Science with 
Specialization in Game Development</span><br />
The goal of the M.S. in Computer Science (Game Development) program is to graduate students with a core in computer science, an engineering-oriented game development core, and a concentration in one of the key research directions in game development infrastructure, cognition and games, immersion, and serious games.</div>
                    </div>
</div> <!-- #content -->
<?php get_footer(); ?>