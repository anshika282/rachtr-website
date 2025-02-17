<?php 
/*
Template Name: Location Page
*/
get_header('inner');    
?>     
<?php     
    global $post;          
    $post_slug = $post->post_name;             
?>     
<?php
	$current_url = $_SERVER['REQUEST_URI'];
	if (strpos($current_url, '-pd') !== false) {
?>
	<style type="text/css">    
        navigation.main-nav.site-menu {
            opacity: 0;
        }
        .quick-links-menu {
            opacity: 0;
        }   
       div#skj-loc-lists {
          opacity: 0;
      }
      .celebrate-in-style-section {
        display: none;
      }
    </style>  
     <script>
          $(document).ready(function() {
              $('.web-logo a').contents().unwrap();
          });
     </script>
<?php 
	}
?>


<?php if($post_slug == "noida-go-bananas") { ?>            
<style type="text/css">                        
  .header-block {background: #2a386d;}      
</style>                       
<?php } ?>   
<?php while(have_posts()) : the_post(); ?>                  
<main class="location-page <?php echo $post_slug;  ?>" >          
 <?php if($post_slug == "noida-go-bananas") {?>                               
  <section class="banner-section backbgbox">          
    <video autoplay="" muted="" loop="" id="myVideo" playsinline="true" style="background-color:#000;" poster="https://skyjumpertrampolinepark.com/wp-content/uploads/2024/06/gobanana-poster.jpg">
      <source src="https://skyjumpergobananas.com/assets/image/city/video/1692050542main.mp4" type="video/mp4">
      Your browser does not support HTML5 video.         
    </video>     
  </section>        
<?php } else { ?>              
<?php if(get_field('banner_section')) : ?>    
<section class="location-banner-slider-section">       
	<div class="location-bg-slider <?php echo $post_slug;  ?>" id="location-bg-slider">    
              <div>
                <div class="location-slider-wrapper nb-<?php echo $post_slug;  ?>"> 
                  <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/02/valentine-banner-desktop.jpeg" alt="Slide">
                  <div class="caption-block">  
                      <div class="btn-wrapper">  
                        <a href="#book-panel" class="btn btn-book" tabindex="0">Buy Ticket</a>						
                        <a href="#enquiry" class="btn btn-party" tabindex="0">Book a Party</a>					
                      </div>
                  </div> 
                </div> 
              </div>
    	    <?php while(the_repeater_field('banner_section')): ?>  
              <div>
                  <div class="location-slider-wrapper nb-<?php echo $post_slug;  ?>"> 
                      <?php $bimg1 = get_sub_field('banner_image'); ?>
                          <img <?php awesome_acf_responsive_image($bimg1,'thumb-400','1400px'); ?>  alt="Slide">
                      <?php $bannerCaption = get_sub_field('caption_image'); ?> 
                      <div class="caption-block">
                          <?php  if($bannerCaption) { ?>
                              <img src="<?php the_sub_field('caption_image'); ?>" alt="Caption">
                          <?php } ?>
                          <div class="btn-wrapper">
                              <?php $buttonFirst = get_sub_field('button_first_text'); $buttonSec = get_sub_field('button_second_text');?>
                              <?php if($buttonFirst) { ?><a href="#book-panel" class="btn btn-book"><?php the_sub_field('button_first_text'); ?></a><?php } ?>
                              <?php if($buttonSec) { ?><a href="<?php the_sub_field('button_second_link'); ?>"  class="btn btn-party"><?php the_sub_field('button_second_text'); ?></a><?php } ?>
                          </div>
                      </div>
                  </div>
              </div>
	    	<?php endwhile; ?>
	</div>
</section>
<?php endif; ?>
<?php }  ?>
<?php if(get_field('ticket_price_section')) :  while(the_repeater_field('ticket_price_section')): ?>
  <div class="trampoline-park-laser <?php if($post_slug == "bangalore-pd") {?>bangalore<?php } elseif($post_slug == "m3m-broadway-pd") { ?>m3m-broadway<?php } else { ?><?php echo $post_slug;  ?><?php } ?>" >    
    <h3 class="text-center">TICKET PRICES</h3>
    <div class="wrapper2">
        <div class="cards-holder">
            <div class="card days first-box" id="hidethisslide">
                <div class="top">
                    <h4><?php echo "DAYS"; ?></h4>
                </div>
                <div class="bottom">
                    <div class="row-block hd">
                        <p> &nbsp;</p>
                    </div>
                    <div class="row-block sd">  
                        <p>WEEKDAYS</p>  
                    </div>
                    <div class="row-block sd">
                        <p>WEEKENDS/<br>SPECIAL DAYS*</p>
                    </div>
                </div>
            </div>
            <?php 
				$i = 1; while(the_repeater_field('ticket_price_block')): 
          		$parkIcon = get_sub_field('label'); 
          ?>
            <div class="card widecard"> 
                <div class="top">
                  <?php if($parkIcon == "TRAMPOLINE PARK") { ?> 
                  	<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/trampoline.png" alt="Icon">
                  <?php } elseif($parkIcon == "LASER TAG" || $parkIcon == "LASER TAG GAMING") {?> 
                  	<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/laser-tag.png" alt="Icon">
                  <?php } elseif($parkIcon == "HYPER GRID") {?>
                  	<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/dance-floor-2-1.png" alt="Icon">
                  <?php } elseif($parkIcon == "LASER SPY") {?>
                  	 <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/challenge.png" alt="Icon">
                  <?php } elseif($parkIcon == "SKY VERVE (VR)" || $parkIcon == "SKY VERVE") {?>
                  	<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/virtual-reality-glasses.png" alt="Icon">
                  <?php } elseif($parkIcon == "WALL CLIMB") {?> 
                  	<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/climbing.png" alt="Icon">
                  <?php } elseif($parkIcon == "SKYJUMPER CARNIVAL") {?> 
                  	<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/carnival.png" alt="Icon">
                  <?php } elseif($parkIcon == "GENZ...THE TEEN DISCO") {?> 
                  	<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/disco-ball.png" alt="Icon">
                  <?php } elseif($parkIcon == "SKY VR COASTER") {?>   
                  	<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/vr-coaster.png" alt="Icon">
                  <?php } elseif($parkIcon == "SOFT PLAY") {?>   
                  	<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/soft-pay.png" alt="Icon"> 
                  <?php } elseif($parkIcon == "BOWLING") {?>    
                  	<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/bowling.png" alt="Icon">  
                  <?php } elseif($parkIcon == "ALL GAME COMBO") {?> 
                  	<?php if($post_slug == "bangalore") { ?>
                  		<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/banglore-03.jpg" style="height: 75px;"  alt="Icon">
                 	 <? } elseif($post_slug == "faridabad") { ?>
                  		<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/Faridabad-03.png" style="height: 75px;"  alt="Icon">
                  	<? } else { ?>
                  		<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/offer-tag-02.png" style="height: 75px;"  alt="Icon">
                  	<?php } ?>
                  <?php } elseif($parkIcon == "SPECIAL GAME COMBO") {?> 
                  	<?php if($post_slug == "bangalore") { ?>
                  		<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/banglore-03.jpg" style="height: 75px;"  alt="Icon">
                  	<? } elseif($post_slug == "faridabad") { ?>
                  		<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/Faridabad-03.png" style="height: 75px;"  alt="Icon">
                  <? } else { ?>
                  		<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/offer-tag-02.png" style="height: 75px;"  alt="Icon">
                  	<?php } ?>  
                  <?php } elseif($parkIcon == "VR ESCAPE") {?>    
                  	<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/emergency-exit.png" alt="Icon">
                  <?php } elseif($parkIcon == "VR TANK") {?>    
                  	<img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/ar.png" alt="Icon">
                  <?php } ?>
                    <h4><?php the_sub_field('label'); ?></h4>
                </div>
                <div class="bottom">
                    <div class="row-block hd">
                            <p class="nmshow" >WEEKDAYS<br>(MON-FRI)</p>
                    	<?php while(the_repeater_field('time_label')): ?>
                      <?php $labelField = get_sub_field('label'); if($labelField) { ?>
                        	<p><?php the_sub_field('label'); ?></p> 
                      <?php } ?>
                        <?php endwhile; ?>
                    </div>
                    
                    <?php $i = 1; while(the_repeater_field('schedule_time')): ?>
	                    <div class="row-block sd">
	                            <?php if($i == "1") { ?>
	                                <p class="only-mb">WEEKDAYS</p>
	                            <?php } elseif($i == "2") { ?>
	                                <p class="only-mb">WEEKENDS /<br>SPECIAL DAYS*</p>
	                            <?php } ?>
	                    	<?php while(the_repeater_field('time_sheet')): ?>
	                            <p>₹<?php the_sub_field('time_value'); ?></p>
	                        <?php endwhile; ?>
	                    </div>
                    <?php $i++; endwhile; ?>
                </div>
              <?php if($parkIcon == "SPECIAL GAME COMBO" || $parkIcon == "ALL GAME COMBO") { ?>
              	<div class="ticket-info">
                   <?php if($parkIcon == "ALL GAME COMBO" && $post_slug == "bangalore") { ?>
                      <p>PLAY ONE GAME EACH OF</p>
                      <p>30 MIN TRAMPOLINE + 30 MIN LASER TAG + 30 MIN CARNIVAL + VERVE + COASTER + 15 MIN MASSAGE CHAIR </p>
                      <h6 style="display:none; ">* NOT INCLUDING PAIR OF SOCKS</h6>
                  <?php } else if($parkIcon == "SPECIAL GAME COMBO" && $post_slug == "bangalore") { ?>
                  	  <p>PLAY ONE GAME EACH OF</p>
                      <p>VERVE + COASTER + 30 MIN LASER TAG + MASSAGE CHAIR</p> 
                  <?php } else if($parkIcon == "ALL GAME COMBO" && $post_slug == "faridabad") { ?>
                  	  <p>PLAY ONE GAME EACH OF</p>
                      <p>30 MIN TRAMPOLINE + 30 MIN SOFT PLAY + 30 MIN LASER TAG + BOWLING</p>  
                  <?php } else if($parkIcon == "ALL GAME COMBO" && $post_slug == "pune-amanora") { ?>
                  	  <p>PLAY ONE GAME EACH OF</p>
                      <p>30 MIN TRAMPOLINE + 30 MIN LASER TAG + VERVE + LASER WAR + HYPER GRID</p> 
                  <?php } else if($parkIcon == "SPECIAL GAME COMBO" && $post_slug == "pune-amanora") { ?>
                  	  <p>PLAY ONE GAME EACH OF</p>
                      <p>VERVE + LASER WAR + HYPER GRID</p>  
                   <?php } else if($parkIcon == "ALL GAME COMBO" && $post_slug == "m3m-broadway") { ?>
                  	  <p>PLAY ONE GAME EACH OF</p>
                      <p>30 MIN TRAMPOLINE + 30 MIN LASER TAG + VERVE + VR TANK + 30 MIN WALL CLIMB + LASER SPY + HYPER GRID</p>  
                  <?php } else if($parkIcon == "SPECIAL GAME COMBO" && $post_slug == "m3m-broadway") { ?>
                  	  <p>PLAY ONE GAME EACH OF</p>   
                      <p>VERVE + VR TANK + 30 MIN WALL CLIMB + LASER SPY + HYPER GRID</p>  
                  <?php  }?>
                </div>
           	 <?php } ?>
              
              
            </div>
            <?php $i++; endwhile; ?>
        </div>
        <div class="ticket-btn-block"> 
          		<button class="btn btn-book" id="openFancybox">View Calendar</button>
		        <a target="_blank" href="<?php the_sub_field('fill_waiver_link'); ?>" class="btn btn-party" >Fill Waiver</a>
		</div>
		<div class="ticket-center-details">
			<?php the_sub_field('description_text'); ?>
          
          <?php if($post_slug == "noida-go-bananas") { ?>
     		<div class="faq-lists">
                    <div class="faq-articles">
                      
                        <article class="faq-accordion">
                              <input type="checkbox" class="tgg-title" id="tgg-title-1">
                              <div class="faq-accordion-title">
                                <label for="tgg-title-1">
                                  <h2>Additional Information</h2>
                                  <span class="arrow-icon">
                                    <i class="fa-solid fa-chevron-down"></i>
                                  </span>
                                </label>
                              </div>
                              <div class="faq-accordion-content">
                                <p>Adults are not allowed for activity they can only assist inside activity area. Weekend Pricing will be applicable on Weekends, Public Holidays & Special Days. To know more about Special Days, Refer SkyJumper Calendar. In group events there must be one parents/guardian on every 10 children, for more Refer SkyJumper Policy. Special days are defined in the SkyJumper calendar.</p>  
                              </div>
                        </article>
                    
                    </div>
                </div>
          <?php } else { ?>      
            <p>*Special days as defined in calendar</p>
          <?php }  ?>
		</div> 
    </div>
</div>
<?php endwhile;  endif; ?>            
            
<?php if(get_field('ticket_price_section')) :  while(the_repeater_field('ticket_price_section')): ?>
<section class="ticket-price-section" style="display:none; ">
	<div class="jumping-chichi">
		<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/11/jumping-chichi.gif" alt="Image">
	</div>
	<div class="container">
		<h3><?php the_sub_field('heading'); ?></h3>
		<?php 
		    $priceBlockDesk = get_sub_field('image');  
		    $priceBlockMob = get_sub_field('mobile_image'); 
		?>
		<div class="ticket-pricing-block">
			<?php if($priceBlockDesk) { ?><img src="<?php the_sub_field('image'); ?>" class="desk-view-img" alt="Trampoline Park"><?php } ?>
			<?php if($priceBlockMob) { ?><img src="<?php the_sub_field('mobile_image'); ?>" class="mob-view-img" alt="Trampoline Park"><?php } ?>
		</div>
		
		<div class="ticket-center-details">
			<?php the_sub_field('description_text'); ?>          
		</div>
	</div>
</section>
<?php endwhile;  endif; ?>

<?php if(get_field('ticket_center_details_section')) :  while(the_repeater_field('ticket_center_details_section')): ?>
<section class="ticket-center-informtion">
	<div class="mini-container">
		<div class="row align-items-center">
			<div class="col-md-4">
			    <?php $chichiimage = get_sub_field('image'); if($chichiimage) {  ?>
				<div class="location-chichi">
					<img src="<?php the_sub_field('image'); ?>" alt="Location">
				</div>
				<?php } ?>
			</div>
			<div class="col-md-8">
				<div class="location-address-details">
					<h4><?php the_sub_field('heading'); ?></h4>
                  <address><a href="#gmap-address"><?php the_sub_field('address'); ?></a></address>
                  <?php if($post_slug == "faridabad") { ?> 
                  	<a href="https://maps.google.com/?q=28.377939,77.361359" class="btn btn-location btn-party" target="_blank" style="border-radius:30px;display: block; width: 150px; margin: 0 auto 25px">Get Direction</a>
                  <?php } ?>
					<div class="time-slots">
					    <?php while(the_repeater_field('time_slots')): ?>
    						<div class="time-slot-block">
    							<label><?php the_sub_field('label'); ?></label>
    							<span class="value"><?php the_sub_field('value'); ?></span>
    						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile;  endif; ?>

  
    <section class="booking-demo-section" id="book-panel">
            <div class="container">
                <div class="booking-demo-inner-block" >
                    <h3 class="text-center">BUY TICKET ONLINE</h3>
                    <div class="row">

                        <div class="col-md-6 sitebook">
                            <div class="site-gallery-wrapper">  
                                <div class="site-gallery"> 
                                    <?php if($post_slug == "noida-go-bananas") { ?>
                                  
                                     <div> 
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/12/16920520172Citygallary.webp" class="no-lazy" alt="Slider Image 1"> 
                                    </div>
                                     <div> 
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/12/16920520184Citygallary.webp" class="no-lazy" alt="Slider Image 2"> 
                                    </div>
                                  	<?php } else if($post_slug == "m3m-broadway" || $post_slug == "bangalore" || $post_slug == "pune-amanora" || $post_slug == "faridabad") { ?>
                                    <div> 
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/10/galleryn1.webp" class="no-lazy" alt="Slider Image 3"> 
                                    </div>
                                    <div> 
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/10/gallery1.webp" class="no-lazy" alt="Slider Image 4"> 
                                    </div>
                                    <div>
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/10/gallery3.webp" class="no-lazy" alt="Slider Image 5">
                                    </div>
                                     <div>
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/10/gallery4.webp" class="no-lazy" alt="Slider Image 6">
                                    </div>
                                  	<?php if($post_slug == "m3m-broadway") { ?>
                                    <div>
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2025/01/m3mspecial-game-combo-m3m-02-1-scaled.jpg" class="no-lazy" alt="Slider Image 7">
                                    </div>
                                    <div>
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2025/01/ALL-GAME-COMBO-m3m-1-scaled.jpg" class="no-lazy" alt="Slider Image 8">
                                    </div>
                                  	<?php } else if($post_slug == "pune-amanora") { ?>
                                    <div>
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2025/01/SPECIAL-GAME-COMBO-Amanora-scaled.jpg" class="no-lazy" alt="Slider Image 7">
                                    </div>
                                     <div>
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2025/01/ALL-GAME-COMBO-Amanora-scaled.jpg" class="no-lazy" alt="Slider Image 8">
                                    </div>
                                  	<?php } else if($post_slug == "bangalore") { ?>
                                    <div>
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2025/01/special-GAME-COMBO-banglore-scaled.jpg" class="no-lazy" alt="Slider Image 7">
                                    </div>
                                     <div>
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2025/01/ALL-GAME-COMBO-banglore-scaled.jpg" class="no-lazy" alt="Slider Image 8">
                                    </div>
                                    <?php } else { ?>
                                    <div>
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2025/01/All-game-combo-weekend-Faridabad-scaled.jpg" class="no-lazy" alt="Slider Image 7">
                                    </div>
                                    <div>
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2025/01/All-game-combo-weekdays-Faridabad-scaled.jpg" class="no-lazy" alt="Slider Image 8">
                                    </div>
                                    <?php } ?>
                                   
                                    <?php } else { ?>
                                    <div> 
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/10/galleryn1.webp" class="no-lazy" alt="Slider Image 3"> 
                                    </div>
                                    <div> 
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/10/gallery1.webp" class="no-lazy" alt="Slider Image 4"> 
                                    </div>
                                     <div>
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/10/gallery3.webp" class="no-lazy" alt="Slider Image 5">
                                    </div>
                                     <div>
                                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/10/gallery4.webp" class="no-lazy" alt="Slider Image 6">
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"> 
                            <div class="site-booking-form">
                                <div class="sitebookform" id="gformtrig">  
                                    <div id="selform" class="sellocation">      
                                        <h5 style="font-family: Poppins;">Book a Time Slot*</h5>   
                                          <select class="selLocation">
                                            <option>Select Slot</option>  
                                            <?php if($post_slug == "m3m-broadway" ) { ?>
                                                <option value="m3mbroadway30">M3M Broadway Trampoline Park (30 Min)</option>
                                                <option value="m3mbroadway60">M3M Broadway Trampoline Park (60 Min)</option>
                                                <option value="m3mbroadway90">M3M Broadway Trampoline Park (90 Min)</option>
                                            	<option value="lsm3mbroadway30">M3M Broadway Laser Tag (30 Min)</option>
                                            	<option value="laserwm3mbroadway15">M3M Broadway Laser War (10/15 Min)</option>
                                            	<option value="hypergridm3mbroadway15">M3M Broadway HyperGrid (10/15 Min)</option>
                                            	<option value="skyvbroadway15">M3M Broadway Sky Verve (10/15 Min)</option>
                                            	<option value="vrtankm3mbroadway15">M3M Broadway VR Tank (10/15 Min)</option>
                                            	<option value="vrescapem3mbroadway15">M3M Broadway VR Escape (10/15 Min)</option>
                                            	<option value="wallcm3mbroadway30">M3M Broadway Wall Climb (30 Min)</option>
                                            	<option value="wallcm3mbroadway60">M3M Broadway Wall Climb (60 Min)</option>
                                            	<option value="allgamecombom3mbroadway">M3M Broadway All Game Combo</option>
                                            	<option value="specialgamecombom3mbroadway">M3M Broadway Special Game Combo</option>
                                            <?php } ?>
                                            
                                            <?php if($post_slug == "m3m-broadway-pd" ) { ?>
                                                <option value="m3mbroadway30-pd">M3M Broadway Trampoline Park (30 Min)</option>
                                                <option value="m3mbroadway60-pd">M3M Broadway Trampoline Park (60 Min)</option>
                                                <option value="m3mbroadway90-pd">M3M Broadway Trampoline Park (90 Min)</option>
                                            	<option value="lsm3mbroadway30-pd">M3M Broadway Laser Tag (30 Min)</option>
                                            	<option value="laserwm3mbroadway15-pd">M3M Broadway Laser War (10/15 Min)</option>
                                            	<option value="hypergridm3mbroadway15-pd">M3M Broadway HyperGrid (10/15 Min)</option>
                                            	<option value="skyvbroadway15-pd">M3M Broadway Sky Verve (10/15 Min)</option>
                                            	<option value="vrtankm3mbroadway15-pd">M3M Broadway VR Tank (10/15 Min)</option>
                                            	<option value="vrescapem3mbroadway15-pd">M3M Broadway VR Escape (10/15 Min)</option>
                                            	<option value="wallcm3mbroadway30-pd">M3M Broadway Wall Climb (30 Min)</option>
                                            	<option value="wallcm3mbroadway60-pd">M3M Broadway Wall Climb (60 Min)</option>
                                            	<option value="allgamecombom3mbroadway-pd">M3M Broadway All Game Combo</option>
                                            	<option value="specialgamecombom3mbroadway-pd">M3M Broadway Special Game Combo</option>
                                            <?php } ?>
                                            
                                             <?php if($post_slug == "ocus" ) { ?>
                                                <option value="ocus30">Ocus Medley Trampoline Park (30 Min)</option>
                                                <option value="ocus60">Ocus Medley Trampoline Park (60 Min)</option>
                                                <option value="ocus90">Ocus Medley Trampoline Park (90 Min)</option>
                                            	<option value="lsocus30">Ocus Laser Tag (30 Min)</option>
                                            <?php } ?>
                                            
                                            
                                            <?php if($post_slug == "faridabad" ) { ?>
                                                <option value="faridabad30">Faridabad Trampoline Park (30 Min)</option>
                                                <option value="faridabad60">Faridabad Trampoline Park (60 Min)</option>
                                                <option value="faridabad90">Faridabad Trampoline Park (90 Min)</option>
                                            	<option value="lsfaridabad30">Faridabad Laser Tag (30 Min)</option>
                                                <option value="allgamecombofaridabad">Faridabad All Game Combo (₹1499)</option>
                                            <?php } ?>

                                            <?php if($post_slug == "amritsar" ) { ?>
                                                <option value="amritsar30">Amritsar Trampoline Park (30 Min)</option>
                                                <option value="amritsar60">Amritsar Trampoline Park (60 Min)</option>
                                                <option value="amritsar90">Amritsar Trampoline Park (90 Min)</option>
                                            	<option value="lsamritsar30">Amritsar Laser Tag (30 Min)</option>
                                            <?php } ?>

                                            <?php if($post_slug == "bangalore" ) { ?>
                                                <option value="bangalore30">Bangalore Trampoline Park (30 Min)</option>
                                                <option value="bangalore60">Bangalore Trampoline Park (60 Min)</option>
                                        		<option value="bangalore90">Bangalore Trampoline Park (90 Min)</option>
                                            	<option value="lsbangalore30">Bangalore Laser Tag (30 Min)</option>
                                          		<option value="skyvbangalore30">Bangalore Sky Verve (10/15 Min)</option>
                                            	<option value="skycbangalore30">Bangalore SkyCoaster (10/15 Min)</option>
                                           		<option value="allgamecombobangalore">Bangalore All Game Combo (₹1499)</option>
                                            	<option value="specialgamecombobangalore">Bangalore Special Game Combo (₹799)</option>
                                            <?php } ?>
                                            
                                            <?php if($post_slug == "bangalore-pd" ) { ?>
                                                <option value="bangalore30-pd">Bangalore Trampoline Park (30 Min)</option>
                                                <option value="bangalore60-pd">Bangalore Trampoline Park (60 Min)</option>
                                        		<option value="bangalore90-pd">Bangalore Trampoline Park (90 Min)</option>
                                            	<option value="lsbangalore30-pd">Bangalore Laser Tag (30 Min)</option>
                                          		<option value="skyvbangalore30-pd">Bangalore Sky Verve (10/15 Min)</option>
                                            	<option value="skycbangalore30-pd">Bangalore SkyCoaster (10/15 Min)</option>
                                           		<option value="allgamecombobangalore-pd">Bangalore All Game Combo (₹1499)</option>
                                            	<option value="specialgamecombobangalore-pd">Bangalore Special Game Combo (₹799)</option>
                                            <?php } ?>
                                            

                                            <?php if($post_slug == "chennai" ) { ?>
                                                <option value="chennai30">Chennai Trampoline Park (30 Min)</option> 
                                                <option value="chennai60">Chennai Trampoline Park (60 Min)</option> 
                                                <option value="chennai90">Chennai Trampoline Park (90 Min)</option>
                                            	<option value="lschennai30">Chennai Laser Tag (30 Min)</option>
                                            <?php } ?>

                                            <?php if($post_slug == "chandigarh" ) { ?>
                                                <option value="chandigarh30">Chandigarh Trampoline Park (30 Min)</option>
                                                <option value="chandigarh60">Chandigarh Trampoline Park (60 Min)</option>
                                                <option value="chandigarh90">Chandigarh Trampoline Park (90 Min)</option>
                                            	<option value="lschandigarh30">Chandigarh Laser Tag (30 Min)</option>
                                            <?php } ?>

                                            <?php if($post_slug == "delhi" ) { ?>
                                                <option value="delhi30">Delhi Trampoline Park (30 Min)</option>
                                                <option value="delhi60">Delhi Trampoline Park (60 Min)</option>
                                                <option value="delhi90">Delhi Trampoline Park (90 Min)</option>
                                            <?php } ?>

                                            <?php if($post_slug == "gurugram" ) { ?>
                                                <option value="gurugram30">Gurugram ILD Trampoline Park (30 Min)</option>
                                                <option value="gurugram60">Gurugram ILD Trampoline Park (60 Min)</option> 
                                                <option value="gurugram90">Gurugram ILD Trampoline Park (90 Min)</option>
                                            	<option value="lsgurugram30">Gurugram ILD Laser Tag (30 Min)</option>
                                            <?php } ?>

                                            <?php if($post_slug == "jalandhar-2" ) { ?>
                                                <option value="jalandhar30">Jalandhar Trampoline Park (30 Min)</option>
                                                <option value="jalandhar60">Jalandhar Trampoline Park (60 Min)</option>
                                                <option value="jalandhar90">Jalandhar Trampoline Park (90 Min)</option>
                                            	<option value="lsjalandhar30">Jalandhar Laser Tag (30 Min)</option>
                                            <?php } ?>

                                            <?php if($post_slug == "karnal" ) { ?>
                                                <option value="karnal30">Karnal Trampoline Park (30 Min)</option>
                                                <option value="karnal60">Karnal Trampoline Park (60 Min)</option>
                                                <option value="karnal90">Karnal Trampoline Park (90 Min)</option>
                                            	<option value="lskarnal30">Karnal Laser Tag (30 Min)</option>
                                            <?php } ?>

                                            <?php if($post_slug == "lucknow" ) { ?>
                                                <option value="lucknow30">Lucknow Trampoline Park (30 Min)</option>
                                                <option value="lucknow60">Lucknow Trampoline Park (60 Min)</option> 
                                                <option value="lucknow90">Lucknow Trampoline Park (90 Min)</option>
                                            	<option value="lslucknow30">Lucknow Laser Tag (30 Min)</option>
                                        	<?php } ?>   

                                        	<?php if($post_slug == "noida-wave" ) { ?>
                                            	<option value="nw-noida30">Noida Wave Trampoline Park (30 Min)</option>
                                                <option value="nw-noida60">Noida Wave Trampoline Park (60 Min)</option>
                                        		<option value="nw-noida90">Noida Wave Trampoline Park (90 Min)</option>
                                            <?php } ?>
                                            
                                            <?php if($post_slug == "pune" ) { ?> 
                                                <option value="pune30">Pune Trampoline Park (30 Min)</option>
                                                <option value="pune60">Pune Trampoline Park (60 Min)</option>
                                                <option value="pune90">Pune Trampoline Park (90 Min)</option>
                                                <option value="lspune30">Pune Laser Tag (30 Min)</option>
                                            	<option value="ibcpune30">Pune IB Cricket (10/15 Min)</option>
                                            <?php } ?>
                                            
                                            <?php if($post_slug == "pune-amanora" ) { ?>
                                                <option value="pa-pune30">Pune Amanora Trampoline Park (30 Min)</option>
                                                <option value="pa-pune60">Pune Amanora Trampoline Park (60 Min)</option>
                                        		<option value="pa-pune90">Pune Amanora Trampoline Park (90 Min)</option>
                                            	<option value="lspa-pune30">Pune Amanora Laser Tag (30 Min)</option>
                                            	<option value="laserwpa-pune30">Pune Amanora Laser War (10/15 Min)</option>
                                            	<option value="hypergpa-pune30">Pune Amanora HyperGrid (10/15 Min)</option>
                                            	<option value="skyvpa-pune30">Pune Amanora Sky Verve (10/15 Min)</option> 
                                            
                                            	<option value="allgamecombopa-pune">Pune Amanora All Game Combo (₹1499)</option>
                                            	<option value="specialgamecombopa-pune">Pune Amanora Special Game Combo (₹799)</option>
                                            <?php } ?>
                                            
                                            <?php if($post_slug == "noida" ) { ?>
                                                <option value="tnoida30">Noida Spectrum Trampoline Park (30 Min)</option>
                                                <option value="tnoida60">Noida Spectrum Trampoline Park (60 Min)</option>
                                                <option value="tnoida90">Noida Spectrum Trampoline Park (90 Min)</option>
                                            <?php } ?>

                                            <?php if($post_slug == "noida-go-bananas" ) { ?>
                                                <option value="tnoidagobanana30">Noida Go Bananas(30 Min)</option>
                                                <option value="tnoidagobanana60">Noida Go Bananas(60 Min)</option>
                                                <option value="tnoidagobanana90">Noida Go Bananas(90 Min)</option>
                                            <?php } ?>

                                            <?php if($post_slug == "ghaziabad" ) { ?> 
                                                <option value="ghaziabad30">Ghaziabad Trampoline Park(30 Min)</option>
                                                <option value="ghaziabad60">Ghaziabad Trampoline Park(60 Min)</option>
                                                <option value="ghaziabad90">Ghaziabad Trampoline Park(90 Min)</option>
                                            	<option value="lsghaziabad30">Ghaziabad Laser Tag (30 Min)</option>
                                            <?php } ?>
                                        </select>  
                                      
                                      	<div class="tm3mbroadway30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="23388"]'); ?>
                                        </div>
                                        <div class="tm3mbroadway60" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="23387"]'); ?>
                                        </div>
                                        <div class="tm3mbroadway90" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="23386"]'); ?>
                                        </div>
                                      	<div class="tlsm3mbroadway30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="27957"]'); ?>
                                        </div>
                                      	
                                      	<div class="tlaserwm3mbroadway15" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="29423"]'); ?>
                                        </div>
                                      	<div class="thypergridm3mbroadway15" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="29424"]'); ?>
                                        </div>
                                      	<div class="tskyvbroadway15" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="29422"]'); ?>
                                        </div>
                                      <div class="tvrescapem3mbroadway15" style="display:none;">  
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="30953"]'); ?>
                                        </div>
                                      	<div class="tvrtankm3mbroadway15" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="29421"]'); ?>
                                        </div>
                                      	<div class="twallcm3mbroadway30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="29420"]'); ?>
                                        </div>
                                      	<div class="twallcm3mbroadway60" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="30143"]'); ?>
                                        </div>
                                      	<div class="tallgamecombom3mbroadway" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="30405"]'); ?>
                                        </div>
                                      	<div class="tspecialgamecombom3mbroadway" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="30404"]'); ?>
                                        </div>
                                      
                                      
                                      	<div class="tm3mbroadway30-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31903"]'); ?>
                                        </div>
                                        <div class="tm3mbroadway60-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31902"]'); ?>
                                        </div>
                                        <div class="tm3mbroadway90-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31901"]'); ?>
                                        </div>
                                      	<div class="tlsm3mbroadway30-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31907"]'); ?>
                                        </div>
                                      	
                                      	<div class="tlaserwm3mbroadway15-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31906"]'); ?>
                                        </div>
                                      	<div class="thypergridm3mbroadway15-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31908"]'); ?>
                                        </div>
                                      	<div class="tskyvbroadway15-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31905"]'); ?>
                                        </div>
                                      	<div class="tvrescapem3mbroadway15-pd" style="display:none;">  
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31900"]'); ?>
                                        </div>
                                      	<div class="tvrtankm3mbroadway15-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31899"]'); ?>
                                        </div>
                                      	<div class="twallcm3mbroadway30-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31920"]'); ?>
                                        </div>
                                      	<div class="twallcm3mbroadway60-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31898"]'); ?>
                                        </div>
                                      	<div class="tallgamecombom3mbroadway-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31909 "]'); ?>
                                        </div>
                                      	<div class="tspecialgamecombom3mbroadway-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31904"]'); ?>
                                        </div>
                                      
                                      
                                      
                                      	<div class="tocus30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="23278"]'); ?>
                                        </div>
                                        <div class="tocus60" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="23277"]'); ?>
                                        </div>
                                        <div class="tocus90" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="23276"]'); ?>
                                        </div>
                                      	<div class="tlsocus30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="27938"]'); ?>
                                        </div>
                                      

                                      	<div class="tfaridabad30" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="21618"]'); ?>
                                        </div>
                                      	<div class="tfaridabad60" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="21421"]'); ?>
                                        </div>
                                        <div class="tfaridabad90" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="21420"]'); ?>
                                        </div>
                                      	<div class="tlsfaridabad30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="27946"]'); ?>
                                        </div>
                                      	<div class="tallgamecombofaridabad" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="30911"]'); ?>
                                        </div>
                                      
                                        <div class="tpune30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="219"]'); ?>
                                        </div>
                                        <div class="tpune60" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="218"]'); ?>
                                        </div>
                                        <div class="tpune90" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="3646"]'); ?>
                                        </div>
                                      	<div class="tibcpune30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="29416"]'); ?>
                                        </div>
                                      

                                        <div class="tbangalore30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="235"]'); ?>
                                        </div>
                                        <div class="tbangalore60" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="234"]'); ?>
                                        </div>
                                        <div class="tbangalore90" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="3658"]'); ?>
                                        </div>      
                                        <div class="tbangalorecarnival60" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="14518"]'); ?>
                                        </div>
                                      	<div class="tlsbangalore30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="28014"]'); ?>
                                        </div>
                                      
                                      	<div class="tskyvbangalore30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="29425"]'); ?>
                                        </div>
                                      	<div class="tskycbangalore30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="29426"]'); ?>
                                        </div>
                                      	<div class="tallgamecombobangalore" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="30898"]'); ?>
                                        </div>
                                      	<div class="tspecialgamecombobangalore" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="30897"]'); ?>
                                        </div>
                                      
                                      
                                        <div class="tbangalore30-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31913"]'); ?>
                                        </div>
                                        <div class="tbangalore60-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31912"]'); ?>
                                        </div>
                                        <div class="tbangalore90-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31911"]'); ?>
                                        </div>      
                                        <div class="tbangalorecarnival60-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31921"]'); ?>
                                        </div>
                                      	<div class="tlsbangalore30-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31917"]'); ?>
                                        </div>
                                      
                                      	<div class="tskyvbangalore30-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31915"]'); ?>
                                        </div>
                                      	<div class="tskycbangalore30-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31916"]'); ?>
                                        </div>
                                      	<div class="tallgamecombobangalore-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31919"]'); ?>
                                        </div>
                                      	<div class="tspecialgamecombobangalore-pd" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="31914"]'); ?>
                                        </div>
                                      
                                      
                                      
                                        <div class="tchennai30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="231"]'); ?>
                                        </div>
                                        <div class="tchennai60" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="230"]'); ?>
                                        </div>
                                        <div class="tchennai90" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="3656"]'); ?>
                                        </div>
                                      	<div class="tlschennai30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="27947"]'); ?>
                                        </div>
                                        
                                        <div class="tamritsar30" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="3660"]'); ?>
                                        </div>
                                        <div class="tamritsar60" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="3659"]'); ?>
                                        </div>
                                        <div class="tamritsar90" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="3670"]'); ?>
                                        </div>
                                      	<div class="tlsamritsar30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="27951"]'); ?>
                                        </div>
                                        
                                        <div class="tchandigarh30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="233"]'); ?>
                                        </div>
                                        <div class="tchandigarh60" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="232"]'); ?>
                                        </div>
                                        <div class="tchandigarh90" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="3657"]'); ?>
                                        </div>
                                      	<div class="tlschandigarh30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="27949"]'); ?>
                                        </div>
                                        
                                        <div class="tdelhi30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="229"]'); ?>
                                        </div>
                                        <div class="tdelhi60" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="228"]'); ?>
                                        </div>
                                        <div class="tdelhi90" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="3655"]'); ?>
                                        </div>
                                        
                                        <div class="tgurugram30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="227"]'); ?>
                                        </div>
                                        <div class="tgurugram60" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="226"]'); ?>
                                        </div>
                                        <div class="tgurugram90" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="3652"]'); ?>
                                        </div>
                                      	<div class="tlsgurugram30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="27958"]'); ?> 
                                        </div>
                                        
                                        <div class="tjalandhar30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="225"]'); ?>
                                        </div>
                                        <div class="tjalandhar60" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="224"]'); ?>
                                        </div>
                                        <div class="tjalandhar90" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="3651"]'); ?>
                                        </div>
                                      	<div class="tlsjalandhar30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="27942"]'); ?>
                                        </div>
                                        
                                        <div class="tlucknow30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="223"]'); ?>
                                        </div>
                                        <div class="tlucknow60" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="222"]'); ?>
                                        </div> 
                                        <div class="tlucknow90" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="3650"]'); ?>
                                        </div> 
                                      	<div class="tlslucknow30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="27939"]'); ?>
                                        </div>
                                        
                                        <div class="tnoida30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="221"]'); ?>
                                        </div>
                                        <div class="tnoida60" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="220"]'); ?>
                                        </div>
                                        <div class="tnoida90" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="3647"]'); ?>
                                        </div>                                     
                                      
                                      	<div class="nw-noida30" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="30777"]'); ?>
                                        </div>
                                      	<div class="nw-noida60" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="16558"]'); ?>
                                        </div>
                                      	<div class="nw-noida90" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="16557"]'); ?>
                                        </div>
                                      
                                        <div class="tlaserwpa-pune30" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="29418"]'); ?>
                                        </div>
                                      	<div class="tskyvpa-pune30" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="29417"]'); ?>
                                        </div>
                                      	<div class="thypergpa-pune30" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="29419"]'); ?>
                                        </div>
                                      
                                      	<div class="pa-pune30" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="22014"]'); ?>
                                        </div>
                                      	<div class="pa-pune60" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="16556"]'); ?>
                                        </div>
                                      	<div class="pa-pune90" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="16555"]'); ?>
                                        </div>
                                           
                                      	<div class="tlspune30" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="27687"]'); ?>
                                        </div>
                                      	<div class="tlspune60" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="27686"]'); ?>
                                        </div>
                                      	
                                      	<div class="tlspa-pune30" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="27689"]'); ?>
                                        </div>
                                      	<div class="tlspa-pune60" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="27688"]'); ?>
                                        </div>
                                      
                                      	<div class="tallgamecombopa-pune" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="30214"]'); ?>
                                        </div>
                                      	<div class="tspecialgamecombopa-pune" style="display:none;">
                                        	<?php echo do_shortcode('[turitop_booking_system_wc_button product_id="30213"]'); ?>
                                        </div>
                                      
                                        <div class="tnoidagobanana30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="22015"]'); ?>
                                        </div>
                                        <div class="tnoidagobanana60" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="3649"]'); ?>
                                        </div>
                                        <div class="tnoidagobanana90" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="3648"]'); ?>
                                        </div>

                                        <div class="karnal30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="21021"]'); ?>
                                        </div>
                                        <div class="karnal60" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="19701"]'); ?>
                                        </div>
                                        <div class="karnal90" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="19700"]'); ?>
                                        </div>
                                      	<div class="tlskarnal30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="27941"]'); ?>
                                        </div>
                                        
                                        <div class="ghaziabad30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="3654"]'); ?>
                                        </div>
                                        <div class="ghaziabad60" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="3653"]'); ?>
                                        </div>
                                        <div class="ghaziabad90" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="12671"]'); ?>
                                        </div>
                                      	<div class="tlsghaziabad30" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="27944"]'); ?>
                                        </div>


                                        <div class="tlucknowbash" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="7083"]'); ?>
                                        </div>
                                        <div class="tahmedabadbash" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="7086"]'); ?>
                                        </div>
                                        <div class="tamritsarbash" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="7085"]'); ?>
                                        </div>
                                        <div class="tchandigarhbash" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="7082"]'); ?>
                                        </div>
                                        <div class="tjalandharbash" style="display:none;">
                                            <?php echo do_shortcode('[turitop_booking_system_wc_button product_id="7084"]'); ?>
                                        </div>                                    
                                </div>
                                  <div class="promotion-text-block">
                                    <?php if($post_slug == "amritsar" || $post_slug == "ghaziabad" || $post_slug == "faridabad") { ?>
                                    	<ul>
                               			 <li style="color:#fedd3f;">3+1 Ticket Offer - Terms & Conditions</li>
                                        <li>Add 4 tickets to your cart; 1 ticket is automatically free.</li>
                                        <li>You only pay for 3 tickets; no promo code needed.</li>
                                        <li>Offer applies to online bookings only and cannot be combined with other promotions.</li>
                                      	</ul>
                                    <?php } elseif($post_slug == "ocus") { ?>
                                      <ul>
                                        <li style="color:#fedd3f;">3+1 Ticket Offer - Terms & Conditions</li>
                                        <li>Add 4 tickets to your cart; 1 ticket is automatically free.</li>
                                        <li>You only pay for 3 tickets; no promo code needed.</li>
                                        <li>Offer applies to online bookings only and cannot be combined with other promotions.</li>
                                      </ul>    
                                    <?php } elseif($post_slug == "karnal") { ?>
                                         <ul>
                                          	<li style="color:#fedd3f;">3+1 Ticket Offer - Terms & Conditions</li>
                                        	<li>Add 4 tickets to your cart; 1 ticket is automatically free.</li>
                                        	<li>You only pay for 3 tickets; no promo code needed.</li>
                                            <li style="color:#fedd3f;">1+1 Ticket Offer. Add 2 Tickets, pay for 1. No Code Required.</li>
                                            <li>Valid Mon-Fri | T&C Apply. Offers cannot be combined.</li> 
                                          </ul>    
                                    <?php } else { ?>
                                      <ul>
                                        <li style="color:#fedd3f;">3+1 Ticket Offer - Terms & Conditions</li>
                                        <li>Add 4 tickets to your cart; 1 ticket is automatically free.</li>
                                        <li>You only pay for 3 tickets; no promo code needed.</li>
                                        <li>Offer applies to online bookings only and cannot be combined with other promotions.</li>
                                      </ul>
                                    <?php } ?>
                                  </div>
                                    <div class="chichi-block-img">
                                         <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/03/chichi-home.png" alt="Image">
                                	</div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

 
<?php if(get_field('park_attractions_section')) :  while(the_repeater_field('park_attractions_section')): ?>
<section class="park-attraction-section" style="display:none; ">
    <h3><?php the_sub_field('heading'); ?></h3> 
    <div class="attraction-lists karnal-attraction-lists" id="attraction-slider">
        <?php while(the_repeater_field('attractions_block_lists')): ?>
    	<div>
    		<div class="attraction-block"> 
    		    <?php $attrImage = get_sub_field('image'); ?>
    			<img <?php awesome_acf_responsive_image($attrImage,'thumb-320','640px'); ?> alt="attraction">
    			<div class="attraction-summary">
    				<h5><?php the_sub_field('heading'); ?></h5>
    				<p><?php the_sub_field('description_text'); ?></p>
    			</div>
    		</div>
    	</div>
        <?php endwhile; ?>
    </div>
</section>
<?php  endwhile;  endif; ?>
  
<?php if($post_slug == "m3m-broadway")  { ?> 
<?php if(get_field('park_attractions_video_section')) :  while(the_repeater_field('park_attractions_video_section')): ?>   
  <section class="park-attraction-section">
    <div class="container">
      <h3><?php the_sub_field('heading'); ?></h3> 
      <div class="attraction-lists pattern-grid-view karnal-attraction-lists attraction-video-lists">
        <?php while(the_repeater_field('attractions_block_lists')): ?>
        <div class="attraction-block video-attr-block"> 
          <video width="100%" height="350" controls="" preload="none" loop="true" autoplay="true" playsinline="true" muted="true" mediatype="video" style="object-fit: cover; object-position: center top; z-index: 1; width: 100%; height: 100%;"> 
            <source src="<?php the_sub_field('video_url'); ?>" type="video/mp4">
          </video>
          <div class="attraction-summary">
            <h5><?php the_sub_field('heading'); ?></h5>
            <p><?php the_sub_field('description_text'); ?></p>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <?php endwhile;  endif; ?>
<?php } ?> 
<?php if($post_slug != "m3m-broadway")  { ?> 
<?php if(get_field('park_attractions_section')) :  while(the_repeater_field('park_attractions_section')):
    $parkHeading = get_sub_field('heading'); if($parkHeading) { 
?>
  <section class="park-attraction-section " >
  	<div class="container">
        <h3><?php the_sub_field('heading'); ?></h3> 
        <div class="attraction-lists pattern-grid-view karnal-attraction-lists">
            <?php while(the_repeater_field('attractions_block_lists')): ?>
              <div class="attraction-block"> 
                <?php $attrImage = get_sub_field('image'); ?>
                <img <?php awesome_acf_responsive_image($attrImage,'thumb-320','640px'); ?> alt="attraction">
                <div class="attraction-summary">
                  <h5><?php the_sub_field('heading'); ?></h5>
                  <p><?php the_sub_field('description_text'); ?></p>
                </div>
              </div>
            <?php endwhile; ?>
         </div>
     </div>
</section>
<?php } endwhile;  endif; } ?> 
  
<?php if(get_field('celebrate_in_style_section')) :  while(the_repeater_field('celebrate_in_style_section')): 
$celHeading = get_sub_field('heading'); if($celHeading) { 
?>
<section class="celebrate-in-style-section" id="book-party-section">
	<div class="container">
		<h3><?php the_sub_field('heading'); ?></h3>
		<div class="celebrate-in-style-lists">
		    <?php $i = 1; while(the_repeater_field('celebrate_in_style_block_lists')): ?>
				<div class="celebrate-style-block">
				    <?php $celImage = get_sub_field('image'); ?>
					<img <?php awesome_acf_responsive_image($celImage,'thumb-250','450px'); ?> alt="Image">
					<div class="celebrate-style-block-details">
						<h4><?php the_sub_field('heading'); ?></h4>
						<a href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a>
					</div>
				</div>
            <?php $i++; endwhile; ?>
		</div>
	</div>
</section>
<?php } endwhile;  endif; ?>
  
<?php if($post_slug != "karnal") { ?>
<?php if(get_field('video_tour_section')) :  while(the_repeater_field('video_tour_section')): ?>
<section class="sky-video-section">
	<div class="mini-container">
		<h3><?php the_sub_field('heading'); ?></h3>
		<div class="sky-video-block">
			<?php echo get_sub_field('video_code'); ?>  
		</div>
      <?php if($post_slug == "chennai") { ?> 
      <div class="chennai-video-tour-lists">
          <div class="chennai-video-tour-block">
            <h4>Newly Launched Soft Play</h4>
              <video width="100%" height="350" controls="" preload="none" loop="true" autoplay="true" playsinline="true" muted="true" mediatype="video" style="object-fit: cover; object-position: center top; z-index: 1; width: 100%; height: 100%;"><source src="https://skyjumpertrampolinepark.com/wp-content/themes/skyjumper-child-theme/video/chennai-video-tour.mp4"></video>
          </div>
          <div class="chennai-video-tour-block">
            <h4>Newly Launched SkyLaser Tag</h4>
            <video width="100%" height="565" controls="" autoplay="" muted="" playsinline="" loop=""><source src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/chennai-video.mp4" type="video/mp4">
            </video>
          </div>
      </div>
      <?php } ?>
	</div>
</section>
<?php  endwhile;  endif; ?>
<?php } ?>  
<?php if(get_field('benefits_of_trampoline_section')) :  while(the_repeater_field('benefits_of_trampoline_section')): ?>
<section class="benefits-of-trampoline-section" style="position:relative; ">
   <video class="ben-bg-video" autoplay playsinline muted loop style="pointer-events: none;">
	  	<source src="https://customer-t3a6866zdugsdncu.cloudflarestream.com/04d706123bf406889e5c46f06b301db8/downloads/default.mp4" type="video/mp4">
	</video> 
	<div class="ben-wrapper-block"> 
    	<h3><?php the_sub_field('heading'); ?></h3>
    	<div class="benefits-trampoline-lists" id="ben-trampoline-slider">
    		<?php while(the_repeater_field('benefits_block_lists')): ?>
    		<div>
    			<div class="benefit-trampoline-block">
    				<img src="<?php the_sub_field('icon'); ?>" alt="Image">
    				<h6><?php the_sub_field('heading'); ?></h6>
    			</div>
    		</div>
    	    <?php endwhile; ?>
    	</div>
	</div>
</section>
<?php endwhile;  endif; ?>
<?php if(get_field('happy_tales_section')) :  while(the_repeater_field('happy_tales_section')): $happytaleHeading =  get_sub_field('heading'); if($happytaleHeading) { ?>
<section class="happy-tales <?php if($post_slug == "m3m-broadway"){ ?>m3m-park-block<?php }  ?>">
	<div class="container">
		<h3><?php the_sub_field('heading'); ?></h3>
		<div class="happy-tales-video-lists" id="happy-tales-slider">
		    <?php while(the_repeater_field('video_lists')): ?>    
			<div>
				<div class="happy-tales-video">
					<?php echo get_sub_field('video_code'); ?>
                  	<?php $videoDescriptionText = get_sub_field('video_description_text_block'); if($videoDescriptionText) { ?>
                      <div class="video-description-block">  
                          <?php echo get_sub_field('video_description_text_block'); ?>
                      </div>
                   <?php } ?>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section> 
  <?php if($post_slug == "faridabad") { ?>
      <style type="text/css">  
          .happy-tales-video-lists .slick-track {
              margin: 0 auto;
          }
       </style>
  <?php }  ?>
  <?php  } endwhile;  endif; ?>
<?php if(get_field('about_us_section')) :  while(the_repeater_field('about_us_section')): 
$gtext = get_sub_field('description_text'); if($gtext) { 
?>
<section class="location-about-section backbgbox" >
	<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/11/aboutbg.webp" class="backbg" alt="Image">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="about-details-block">
					<h3><?php the_sub_field('heading'); ?></h3>
					<?php the_sub_field('description_text'); ?>
					<div class="about-stat-lists">
					    <?php while(the_repeater_field('stat_block_lists')): ?>
    						<div class="about-stat">
    							<span class="value"><?php the_sub_field('value'); ?></span>
    							<span class="label"><?php the_sub_field('label'); ?></span>
    						</div>
					    <?php endwhile; ?>
					</div>
                  	<div class="brand-line"><p>ALL OVER INDIA</p></div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="about-chichi-block">
					<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/03/chichi-home.png" alt="Chi Chi">
				</div>
			</div>
		</div>
	</div>
</section>
<?php } endwhile;  endif; ?>
<?php if(get_field('gallery_section')) :  while(the_repeater_field('gallery_section')): ?>
<?php $galleryImages = get_sub_field('gallery_images'); if($galleryImages) {?>
<section class="check-out-park-section">
	<div class="mini-container">
		<h3><?php the_sub_field('heading'); ?></h3>
		<div class="check-out-park-lists" id="check-out-park-slider">
		    
		    <?php $i = 1; foreach($galleryImages as $gallerImg) {  ?>
		        <?php if($i % 2 == "1") { ?>
		        <div>
				    <div class="check-out-block">
				<?php } ?>
				<?php $imgID =  $gallerImg['id']; ?>
		        <img <?php awesome_acf_responsive_image($imgID,'thumb-400','400px'); ?> alt="<?php echo $gallerImg['title']; ?>">
		        <?php if($i % 2 == "0") { ?>
        		        </div>
        			</div>
    			<?php } ?>
		    <?php $i++; } ?>
		</div>
	</div>
</section>
<?php } endwhile;  endif; ?>

<?php if(get_field('spot_us_section')) :  while(the_repeater_field('spot_us_section')): $mapLocation = get_sub_field('map_code'); if($mapLocation) {  ?>
<section class="spot-us-section" id="gmap-address">
    <h3><?php the_sub_field('heading'); ?></h3>
    <div class="spot-location-map">
    	<?php echo get_sub_field('map_code'); ?>
    </div>
</section>
<?php } endwhile;  endif; ?>

<section class="enquiry book-enquiry-now" id="enquiry"> 
    <div class="container wrapper2">
        <div class="form-holder">
            <div class="text-holder">
                <h2>FOR BIRTHDAY &
                    <br>
                    CUSTOMIZED BOOKING
                </h2>
                <p>Inclusive of food | Fun games | Decorated party room</p>
            </div>
            <div class="form-img-holder">
                <div class="form">
                    <h2>   <?php if($post_slug == "ahmedabad" || $post_slug == "chennai" || $post_slug == "pune" || $post_slug == "bangalore")  { ?>
                        <a href="tel://9582885221">Call us at: <br>9582885221</a>
                    <?php } elseif($post_slug == "noida-go-bananas") {?>
                        <a href="tel://8929498682">Call us at: <br>8929498682</a>
                      <?php } elseif($post_slug == "pune-amanora") {?>
                        <a href="tel://9582885221">Call us at: <br>9582885221</a>
                      <?php } else {  ?>
                        <a href="tel://8882288001">Call us at: <br>8882288001</a>
                    <?php } ?></h2>
                <form action="" method="post" name="homeLeads" id="homeLeads">
                        <input type="text" name="Full Name" id="name" placeholder="NAME" required pattern="[A-Za-z ]+"
                        title="Only letters and spaces are allowed">
                        <input type="tel" name="Phone Number" id="phone" placeholder="PHONE" required pattern="[0-9]{1,10}" minlength="10" maxlength="10">
                        <select name="Enquiry Type" required id="enquiryType" onchange="toggleTextarea()">
                          <option value="">Select enquiry type</option>
                          <option value="Birthday Party">Birthday Party</option>
                          <option value="Corporate Party">Corporate Party</option>
                          <option value="School Trip">School Trip</option>
                          <option value="Kitty Party">Kitty Party</option>
                          <option value="Other">Other</option>
                        </select>
                        <textarea name="Message (If Other)" id="message" placeholder="ADD MESSAGE HERE" style="display: none;"></textarea>
                        <button type="submit" id="submitBtn">Submit</button>
                    </form> 
                      
                </div>
                <div class="img-holder">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/03/chichi-inner.png" alt="Happy Monkey">
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<?php endwhile; ?> 

<script type="text/javascript">
  
  
   function toggleTextarea() {
    var enquiryType = document.getElementById('enquiryType').value;
    var messageTextarea = document.getElementById('message');
    if (enquiryType === 'Other') {
        messageTextarea.style.display = 'block';
        messageTextarea.setAttribute('required', 'required');
    } else {
        messageTextarea.style.display = 'none';
        messageTextarea.removeAttribute('required');
    }
} 

    $(function(){
        //  window.addEventListener('load', function () {
        //         document.getElementById('overlay').style.display = 'none';
        //     });
        $("main.location-page.ahmedabad .booking-demo-section").remove().clone().insertAfter(".location-banner-slider-section");
        $("main.location-page.chandigarh .booking-demo-section").remove().clone().insertAfter(".location-banner-slider-section");
        $("main.location-page.amritsar .booking-demo-section").remove().clone().insertAfter(".location-banner-slider-section");
        $("main.location-page.lucknow .booking-demo-section").remove().clone().insertAfter(".location-banner-slider-section");
        $("main.location-page.jalandhar-2 .booking-demo-section").remove().clone().insertAfter(".location-banner-slider-section");
        $('#selform').bind('change', function () {
            var cVal = $(this).find('option:selected').val();
			if(cVal == "m3mbroadway30"){
                $(".tm3mbroadway30 a").trigger("click");
            }
            if(cVal == "m3mbroadway60"){
                $(".tm3mbroadway60 a").trigger("click");
            }
            if(cVal == "m3mbroadway90"){
                $(".tm3mbroadway90 a").trigger("click");
            } 
          	if(cVal == "lsm3mbroadway30"){
                $(".tlsm3mbroadway30 a").trigger("click");
            } 
          
          	if(cVal == "hypergridm3mbroadway15"){
                $(".thypergridm3mbroadway15 a").trigger("click");
            }
          	if(cVal == "laserwm3mbroadway15"){ 
                $(".tlaserwm3mbroadway15 a").trigger("click");
            }
          	if(cVal == "skyvbroadway15"){
                $(".tskyvbroadway15 a").trigger("click");
            }
          	if(cVal == "vrtankm3mbroadway15"){
                $(".tvrtankm3mbroadway15 a").trigger("click");
            }
            if(cVal == "vrescapem3mbroadway15"){   
                $(".tvrescapem3mbroadway15 a").trigger("click");
            }
          	if(cVal == "wallcm3mbroadway30"){
                $(".twallcm3mbroadway30 a").trigger("click");
            }
          	if(cVal == "wallcm3mbroadway60"){  
                $(".twallcm3mbroadway60 a").trigger("click");
            }
           	if(cVal == "allgamecombom3mbroadway"){
                $(".tallgamecombom3mbroadway a").trigger("click");
            }
           	if(cVal == "specialgamecombom3mbroadway"){
                $(".tspecialgamecombom3mbroadway a").trigger("click");
            }
          
          
          	if(cVal == "m3mbroadway30-pd"){
                $(".tm3mbroadway30-pd a").trigger("click");
            }
            if(cVal == "m3mbroadway60-pd"){
                $(".tm3mbroadway60-pd a").trigger("click");
            }
            if(cVal == "m3mbroadway90-pd"){
                $(".tm3mbroadway90-pd a").trigger("click");
            } 
          	if(cVal == "lsm3mbroadway30-pd"){
                $(".tlsm3mbroadway30-pd a").trigger("click");
            } 
          
          	if(cVal == "hypergridm3mbroadway15-pd"){
                $(".thypergridm3mbroadway15-pd a").trigger("click");
            }
          	if(cVal == "laserwm3mbroadway15-pd"){ 
                $(".tlaserwm3mbroadway15-pd a").trigger("click");
            }
          	if(cVal == "skyvbroadway15-pd"){
                $(".tskyvbroadway15-pd a").trigger("click");
            }
          	if(cVal == "vrtankm3mbroadway15-pd"){
                $(".tvrtankm3mbroadway15-pd a").trigger("click");
            }
            if(cVal == "vrescapem3mbroadway15-pd"){   
                $(".tvrescapem3mbroadway15-pd a").trigger("click");
            }
          	if(cVal == "wallcm3mbroadway30-pd"){
                $(".twallcm3mbroadway30-pd a").trigger("click");
            }
          	if(cVal == "wallcm3mbroadway60-pd"){  
                $(".twallcm3mbroadway60-pd a").trigger("click");
            }
           	if(cVal == "allgamecombom3mbroadway-pd"){
                $(".tallgamecombom3mbroadway-pd a").trigger("click");
            }
           	if(cVal == "specialgamecombom3mbroadway-pd"){
                $(".tspecialgamecombom3mbroadway-pd a").trigger("click");
            }
          
          
          	
          	if(cVal == "ocus30"){
                $(".tocus30 a").trigger("click");
            }
            if(cVal == "ocus60"){
                $(".tocus60 a").trigger("click");
            }
            if(cVal == "ocus90"){
                $(".tocus90 a").trigger("click");
            }
          	if(cVal == "lsocus30"){
                $(".tlsocus30 a").trigger("click");
            }
          
            if(cVal == "faridabad30"){
                $(".tfaridabad30 a").trigger("click");
            }
            if(cVal == "faridabad60"){
                $(".tfaridabad60 a").trigger("click");
            }
            if(cVal == "faridabad90"){
                $(".tfaridabad90 a").trigger("click");
            }
          	if(cVal == "lsfaridabad30"){
                $(".tlsfaridabad30 a").trigger("click");
            }
          	if(cVal == "allgamecombofaridabad"){
                $(".tallgamecombofaridabad a").trigger("click");
            }
          
            if(cVal == "delhi30"){
                $(".tdelhi30 a").trigger("click");
            }
            if(cVal == "delhi60"){
                $(".tdelhi60 a").trigger("click");
            }
            if(cVal == "delhi90"){
                $(".tdelhi90 a").trigger("click");
            }

            if(cVal == "pune30"){
                $(".tpune30 a").trigger("click");
            }
            if(cVal == "pune60"){
                $(".tpune60 a").trigger("click");
            }
            if(cVal == "pune90"){
                $(".tpune90 a").trigger("click");
            }
          	if(cVal == "lspune30"){ 
                $(".tlspune30 a").trigger("click");
            }
            if(cVal == "lspune60"){
                $(".tlspune60 a").trigger("click");
            }
          	if(cVal == "ibcpune30"){
                $(".tibcpune30 a").trigger("click");
            }

            if(cVal == "bangalore30"){
                $(".tbangalore30 a").trigger("click");
            }
            if(cVal == "bangalore60"){
                $(".tbangalore60 a").trigger("click");
            }
            if(cVal == "bangalore90"){
                $(".tbangalore90 a").trigger("click");
            }
            if(cVal == "bangalorecarnival30"){
                $(".tbangalorecarnival30 a").trigger("click");
            }
            if(cVal == "bangalorecarnival60"){
                $(".tbangalorecarnival60 a").trigger("click");
            }
          	if(cVal == "lsbangalore30"){
                $(".tlsbangalore30 a").trigger("click");
            }
          	if(cVal == "skyvbangalore30"){
                $(".tskyvbangalore30 a").trigger("click");
            }
          if(cVal == "skycbangalore30"){
                $(".tskycbangalore30 a").trigger("click");
            }
          if(cVal == "allgamecombobangalore"){
                $(".tallgamecombobangalore a").trigger("click");
            }
           	if(cVal == "specialgamecombobangalore"){
                $(".tspecialgamecombobangalore a").trigger("click");
            }
          
          
          	if(cVal == "bangalore30-pd"){
                $(".tbangalore30-pd a").trigger("click");
            }
            if(cVal == "bangalore60-pd"){
                $(".tbangalore60-pd a").trigger("click");
            }
            if(cVal == "bangalore90-pd"){
                $(".tbangalore90-pd a").trigger("click");
            }
            if(cVal == "bangalorecarnival30-pd"){
                $(".tbangalorecarnival30-pd a").trigger("click");
            }
            if(cVal == "bangalorecarnival60-pd"){
                $(".tbangalorecarnival60-pd a").trigger("click");
            }
          	if(cVal == "lsbangalore30-pd"){
                $(".tlsbangalore30-pd a").trigger("click");
            }
          	if(cVal == "skyvbangalore30-pd"){
                $(".tskyvbangalore30-pd a").trigger("click");
            }
          	if(cVal == "skycbangalore30-pd"){
                $(".tskycbangalore30-pd a").trigger("click");
            }
          	if(cVal == "allgamecombobangalore-pd"){
                $(".tallgamecombobangalore-pd a").trigger("click");
            }
           	if(cVal == "specialgamecombobangalore-pd"){
                $(".tspecialgamecombobangalore-pd a").trigger("click");
            }
          
          
          
            if(cVal == "noida30"){
                $(".tnoida30 a").trigger("click");
            }
            if(cVal == "noida60"){
                $(".tnoida60 a").trigger("click");
            }
            if(cVal == "noida90"){
                $(".tnoida90 a").trigger("click");
            }

            if(cVal == "chennai30"){
                $(".tchennai30 a").trigger("click");
            }
            if(cVal == "chennai60"){
                $(".tchennai60 a").trigger("click");
            }
            if(cVal == "chennai90"){
                $(".tchennai90 a").trigger("click");
            }
          	if(cVal == "lschennai30"){
                $(".tlschennai30 a").trigger("click");
            }

            if(cVal == "gurugram30"){
                $(".tgurugram30 a").trigger("click");
            }
            if(cVal == "gurugram60"){
                $(".tgurugram60 a").trigger("click");
            }
            if(cVal == "gurugram90"){
                $(".tgurugram90 a").trigger("click");
            }
          	if(cVal == "lsgurugram30"){
                $(".tlsgurugram30 a").trigger("click");
            }

            if(cVal == "jalandhar30"){
                $(".tjalandhar30 a").trigger("click");
            }
            if(cVal == "jalandhar60"){
                $(".tjalandhar60 a").trigger("click");
            }
            if(cVal == "jalandhar90"){
                $(".tjalandhar90 a").trigger("click");
            }
          	if(cVal == "lsjalandhar30"){
                $(".tlsjalandhar30 a").trigger("click");
            }

            if(cVal == "lucknow30"){
                $(".tlucknow30 a").trigger("click");
            }
            if(cVal == "lucknow60"){
                $(".tlucknow60 a").trigger("click");
            }
            if(cVal == "lucknow90"){
                $(".tlucknow90 a").trigger("click");
            }
          	if(cVal == "lslucknow30"){
                $(".tlslucknow30 a").trigger("click");
            }

            if(cVal == "tnoida30"){
                $(".tnoida30 a").trigger("click");
            }
            if(cVal == "tnoida60"){
                $(".tnoida60 a").trigger("click");
            } 
            if(cVal == "tnoida90"){
                $(".tnoida90 a").trigger("click");
            }
          
           	if(cVal == "nw-noida30"){
                $(".nw-noida30 a").trigger("click");
            }
          
            if(cVal == "nw-noida60"){
                $(".nw-noida60 a").trigger("click");
            }
            if(cVal == "nw-noida90"){
                $(".nw-noida90 a").trigger("click");
            }

            if(cVal == "pa-pune30"){
                $(".pa-pune30 a").trigger("click");
            }
            if(cVal == "pa-pune60"){
                $(".pa-pune60 a").trigger("click");
            }
            if(cVal == "pa-pune90"){
                $(".pa-pune90 a").trigger("click");
            }
          	if(cVal == "lspa-pune30"){
                $(".tlspa-pune30 a").trigger("click");
            } 
            if(cVal == "lspa-pune60"){
                $(".tlspa-pune60 a").trigger("click");
            }
          
          	 if(cVal == "laserwpa-pune30"){
                $(".tlaserwpa-pune30 a").trigger("click");
            }
           if(cVal == "hypergpa-pune30"){
                $(".thypergpa-pune30 a").trigger("click");
            }
           if(cVal == "skyvpa-pune30"){
                $(".tskyvpa-pune30 a").trigger("click");
            }
          
          if(cVal == "allgamecombopa-pune"){
                $(".tallgamecombopa-pune a").trigger("click");
            }
           if(cVal == "specialgamecombopa-pune"){
                $(".tspecialgamecombopa-pune a").trigger("click");
            }
          
            if(cVal == "chandigarh30"){
                $(".tchandigarh30 a").trigger("click");
            }
            if(cVal == "chandigarh60"){
                $(".tchandigarh60 a").trigger("click");
            }
            if(cVal == "chandigarh90"){
                $(".tchandigarh90 a").trigger("click");
            }
          	if(cVal == "lschandigarh30"){
                $(".tlschandigarh30 a").trigger("click");
            }

            if(cVal == "tnoidagobanana30"){
                $(".tnoidagobanana30 a").trigger("click");
            }
            if(cVal == "tnoidagobanana60"){
                $(".tnoidagobanana60 a").trigger("click");
            }
            if(cVal == "tnoidagobanana90"){
                $(".tnoidagobanana90 a").trigger("click");
            }

            if(cVal == "amritsar30"){
                $(".tamritsar30 a").trigger("click");
            }
            if(cVal == "amritsar60"){
                $(".tamritsar60 a").trigger("click");
            }
            if(cVal == "amritsar90"){
                $(".tamritsar90 a").trigger("click");
            }
          	if(cVal == "lsamritsar30"){
                $(".tlsamritsar30 a").trigger("click");
            }
             
            if(cVal == "ghaziabad30"){
                $(".ghaziabad30 a").trigger("click");
            }
            if(cVal == "ghaziabad60"){
                $(".ghaziabad60 a").trigger("click");
            }
            if(cVal == "ghaziabad90"){
                $(".ghaziabad90 a").trigger("click");
            }
          	if(cVal == "lsghaziabad30"){
                $(".tlsghaziabad30 a").trigger("click");
            }

            if(cVal == "karnal30"){
                $(".karnal30 a").trigger("click");
            } 
            if(cVal == "karnal60"){
                $(".karnal60 a").trigger("click");
            }
            if(cVal == "karnal90"){
                $(".karnal90 a").trigger("click");
            }
          	if(cVal == "lskarnal30"){
                $(".tlskarnal30 a").trigger("click");
            }
  
            if(cVal == "amritsarbash"){
                $(".tamritsarbash a").trigger("click");
            }
            if(cVal == "chandigarhbash"){
                $(".tchandigarhbash a").trigger("click");
            }
            if(cVal == "lucknowbash"){
                $(".tlucknowbash a").trigger("click");
            }
            if(cVal == "ahmedabadbash"){
                $(".tahmedabadbash a").trigger("click");
            }
            if(cVal == "jalandharbash"){
                $(".tjalandharbash a").trigger("click");
            }
        });
        $('.backbg').each(function(){
           var backbgPath = $(this).attr('src');  
           $(this).parent('.backbgbox').css('background-image', 'url(' + backbgPath + ')');
        });
        
         $('.site-gallery').slick({
            infinite: true,
            autoplay: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true, 
            dots: false
        });
        $('#check-out-park-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 8000,
            pauseOnHover: false,
            cssEase: 'linear',
            arrows: true, 
            dots: false,
            responsive: [
                {
                  breakpoint: 600,
                  settings: {
                    infinite: true,
                    slidesToShow: 1,
                    autoplay: false,
                    slidesToScroll: 1,
                    draggable: true,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '25px',
                    speed: 1000,
                  }
                }
            ]
        });

        $('#happy-tales-slider').slick({
            autoplay: false, 
            slidesToShow: 3, 
            slidesToScroll: 1, 
            arrows: false, 
            dots: false,
            responsive: [
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    draggable: true,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '10%',
                  }
                }
            ]
        });
      
      
       if($('#attraction-slider').children().length > 1){
           $('#attraction-slider').slick({
              dots: false,
              arrows: false,
              speed: 5000,
              autoplay: true, // Autoplay for larger screens
              autoplaySpeed: 100,
              cssEase: 'linear',
              slidesToShow: 3,
              slidesToScroll: 1,
              pauseOnHover: false,
              responsive: [
                  { 
                      breakpoint: 600,
                      settings: {
                          infinite: true,
                    
                          dots: false,
                          slidesToShow: 1,
                          slidesToScroll: 1,
                          autoplay: true, 
                          autoplaySpeed: 2000,
                          draggable: true, 
                          speed: 300,
                          cssEase: 'ease', 
                      }
                  }
              ]
          });
         }else if($('#attraction-slider').children().length <= 1){
           var screenWidth = document.documentElement.clientWidth || document.body.clientWidth;
           $('#attraction-slider').slick({
                  dots: false,
                  arrows: false, 
                  speed: 9000,
                  autoplay: true, 
                  autoplaySpeed: 0,
                  cssEase: 'linear',
                  slidesToShow: 3,
                  slidesToScroll: 1,
             	  pauseOnHover: false,
              });
           if (screenWidth < 600) {
              $('#attraction-slider').slick('unslick');
           } else {
             $('#attraction-slider').on('mouseenter', function() {
                  $(this).slick('slickPause');
              });

              $('#attraction-slider').on('mouseleave', function() {
                  $(this).slick('slickPlay');
              });
           }
         }
     
             
       
         $('#ben-trampoline-slider').slick({
            autoplay: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: false, 
            dots: false,
            responsive: [
                {
                  breakpoint: 600,
                  settings: {
                    
                          slidesToShow: 2,
        slidesToScroll: 1,
          autoplay: true,
            autoplaySpeed: 0,
              speed: 4000,
                pauseOnHover: false,
                  cssEase: 'linear'
                  }
                }
            ]
        });
      
      

    
       
      
		if (window.location.href.includes("noida-wave") || window.location.href.includes("gurugram")){
                  $('#location-bg-slider').slick({
                    infinite: true,
                    autoplay: false,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false, 
                    dots: false,
                    fade: true,
                });
        } else {
                  $('#location-bg-slider').slick({
                    infinite: true,
                    autoplay: true,
                    autoplaySpeed: 4500,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true, 
                    dots: false, 
                    speed: 3000,
                    fade: true,
                });
          
        }     
    

        
        var viewportWidth = window.innerWidth;
      if (viewportWidth <= 591) {
        $(".cards-holder").slick({
            infinite:true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          autoplay: true,
          autoplaySpeed: 2000
        });
        $('.cards-holder').slick('slickRemove',0);
      }
    });
</script>


<?php
    get_footer('inner');
?>