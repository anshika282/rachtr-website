<?php
/**
 * The template for displaying the footer
 * 
 * Contains the closing of the #content div and all content after.  
 *  
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials 
 *
 * @package WordPress  
 * @subpackage Twenty_Twenty_One   
 * @since Twenty Twenty-One 1.0     
 */      
        
?>           
<?php                  
      global $post;                            
      $post_slug = $post->post_name;                        
      $instagram_handles = array(    
          "amritsar" => "https://www.instagram.com/skyjumpertp_amritsar?igsh=MXVzb3F3aGMyejMyZw==",  
          "bangalore" => "https://www.instagram.com/skyjumpertp.bengaluru?igsh=MXJ4a3l0cmNoeHQyYQ==",
          "chennai" => "https://www.instagram.com/skyjumpertp_chennai?igsh=MWlyaXZ3bzlsZTB3Zw==",
          "chandigarh" => "https://www.instagram.com/skyjumpertp_chandigarh?igsh=amw4N2FuY2EwZGR3",
          "delhi" => "https://www.instagram.com/skyjumpertp_rohini?igsh=YjhzcnF0ZDN1d2tw",
          "ghaziabad" => "https://www.instagram.com/skyjumpertp.ghaziabad?igsh=MTgzd3V5Mm9vaGUzaQ==",
          "gurugram" => "https://www.instagram.com/skyjumpertp_gurgaon?igsh=MTkxcXg4aXJudmo3Yg==",
          "jalandhar" => "https://www.instagram.com/skyjumperjalandhar?igsh=dXRwY2R1eWlndTNn",
          "lucknow" => "https://www.instagram.com/skyjumpertp_lucknow?igsh=dTFkYzl6djhzZTlv",
          "noida-go-bananas" => "https://www.instagram.com/skyjumpertp_noida?igsh=Nml4ZHh3YWx2ZjNh",
          "noida-spectrum" => "https://www.instagram.com/skyjumpertp_noida?igsh=Nml4ZHh3YWx2ZjNh",
          "noida-wave" => "https://www.instagram.com/skyjumpertp_noida?igsh=Nml4ZHh3YWx2ZjNh",
          "pune-amanora" => "https://www.instagram.com/skyjumpertp_pune?igsh=YzZqemVxZmhsMWxy",
          "pune-creaticity" => "https://www.instagram.com/skyjumpertp_pune?igsh=YzZqemVxZmhsMWxy"
      );
      $instagram_link = isset($instagram_handles[$post_slug]) ? $instagram_handles[$post_slug] : "https://instagram.com/skyjumperindia";
?>
            <footer class="footer-inner" style="background-color: #4d1c8c !important; ">  
            	<div class="container">
            		<div class="row">
            			<div class="col col-md-5">
            				<div class="footer-abt-info">

                              
                <?php if($post_slug == "ghaziabad") { ?>
                   <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/03/web-logo.png" alt="Web Logo">
                <?php } else { ?>
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2023/11/skylogo.webp" alt="Logo"> 
                <?php } ?>
            					<p>A cutting edge Family Entertainment Center to have unparalleled experience of Amusement park, fitness and sports together.</p>
            					<div class="social-links" >
            						<ul>
            							<li><a href="https://www.facebook.com/SkyjumperTrampolineParkOfficial" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
										<li><a href="<?php echo esc_url($instagram_link); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            							<li><a href="https://www.youtube.com/@SkyJumperTrampolinePark" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
            							<li><a href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2F35589958%2Fadmin%2F" target="_blank">
            							   <i class="fa-brands fa-linkedin-in"></i></a></li>
            						</ul>
            					</div>
            				</div>
            			</div>
            			<div class="col-12 col-md-3">
            				<div class="quick-links-menu">
            					<ul>
            					    <li><a href="<?php echo get_home_url(); ?>/about">About Us</a></li> 
            						<li><a href="<?php echo get_home_url(); ?>/privacy-policy">Privacy policy</a></li>
            						<li><a href="<?php echo get_home_url(); ?>/blog">Blogs</a></li>
            						<li><a href="<?php echo get_home_url(); ?>/contact">Contact Us</a></li>
            					</ul>
            				</div>
            			</div>
            			<!-- <div class="col col-md-3">
            				<div class="newsletter-block">
            					<h5>Newsletter</h5>
            					<p>Subscribe to our newsletter to get our latest update & news</p>
            				</div>
            			</div> -->
            			<div class="col col-md-4">
            				<div class="footer-contact-block">
            					<h5>Contact</h5>
            					<?php global $post; ?>
                              
                              <?php if(is_page_template( 'template-location-laser-page.php')) { ?>
    <?php if(get_field('contact_information', $post->ID)) :  while(the_repeater_field('contact_information', $post->ID)): ?>
    <div class="ft-contact-block">
    	<div class="icon-block">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
    	</div>
    	<div class="ft-contact-details">
            <label>Call us at</label>
            <a href="tel://<?php the_sub_field('contact_number'); ?>">+91 <?php the_sub_field('contact_number'); ?></a>
    	</div>
    </div>
    <div class="ft-contact-block">
    	<div class="icon-block">
    		<i class="fa-solid fa-envelope"></i>
    	</div>
    	<div class="ft-contact-details">
    		<label>Email address</label>  
    		<a href="mailto:<?php the_sub_field('email_address'); ?>"><?php the_sub_field('email_address'); ?></a>
    	</div>
    </div>
    <div class="ft-contact-block">
    	<div class="icon-block">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M384 48c8.8 0 16 7.2 16 16V448c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H384zM96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM240 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H208zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z"/></svg>
    	</div>
    	<div class="ft-contact-details">
    		<label>Visit us</label>
    		<address><?php the_sub_field('address'); ?></address>  
    	</div>
    </div>
    <?php endwhile;  endif; ?>
                              <?php } else { ?>
                              
                              
                              
            					<?php if(get_field('contact_info_section', $post->ID)) :  while(the_repeater_field('contact_info_section', $post->ID)): ?>
            					<div class="ft-contact-block">
            						<div class="icon-block">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
            						<!-- <i class="fa-solid fa-mobile-screen"></i> -->
            						</div>
            						<div class="ft-contact-details">
            							<label>Call us at</label>
            							<?php if($post_slug == "ahmedabad" || $post_slug == "chennai" || $post_slug == "pune" || $post_slug == "bangalore")  { ?>
                                            <a href="tel://9582885221">+91 9582885221</a>
                                        <?php } elseif($post_slug == "noida-go-bananas") {?>
                                            <a href="tel://8929498682">+91 8929498682</a>
                                      	<?php } elseif($post_slug == "pune-amanora") {?>
                                            <a href="tel://9582885221">+91 9582885221</a>
                                        <?php } else {  ?>
                                            <a href="tel://8882288001">+91 8882288001</a>
                                        <?php } ?>
        
            							
            						</div>
            					</div>
            					<div class="ft-contact-block">
            						<div class="icon-block">
            							<i class="fa-solid fa-envelope"></i>
            						</div>
            						<div class="ft-contact-details">
            							<label>Email address</label>
            							<a href="mailto:<?php the_sub_field('email_address'); ?>"><?php the_sub_field('email_address'); ?></a>
            						</div>
            					</div>
            					<div class="ft-contact-block">
            						<div class="icon-block">
            							<!-- <i class="fa-solid fa-envelope"></i> -->
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M384 48c8.8 0 16 7.2 16 16V448c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H384zM96 0C60.7 0 32 28.7 32 64V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H96zM240 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H208zM512 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V80zM496 192c-8.8 0-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm16 144c0-8.8-7.2-16-16-16s-16 7.2-16 16v64c0 8.8 7.2 16 16 16s16-7.2 16-16V336z"/></svg>
            						</div>
            						<div class="ft-contact-details">
            							<label>Visit us</label>
            							<address><?php the_sub_field('address'); ?></address>
            						</div>
            					</div>
                              <?php endwhile;  endif; } ?>
            				</div>
            			</div>
            		</div>
            	</div>
            </footer>
        </div> 
        <div style="display: none; width: 800px" id="hidden-content" class="popcalender">

            <section class="calender">
                <div class="wrappers2">
                    <div class="calender-holder">
                        <div class="buttons-and-calendar">
                            <div class="days-holder">
                                <button>SPECIAL DAY'S</button>
                                <button>NORMAL DAY'S</button>
                                <button>CLOSED DAY'S</button>
                            </div>
                            <div class="calender-card-holder">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
        </div>
<!-- <div class="sticky-bar-block"> 
    <ul>
        <li><a href="https://wa.link/nhj7es" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
       
    </ul>
</div> -->

 <?php if($post_slug == "ahmedabad" || $post_slug == "chennai" || $post_slug == "pune" || $post_slug == "bangalore")  { ?>
<span class="call-btn"><a href="tel://9582885221" target="_blank"><i class="fas fa-phone-alt"></i></a></span>
        <?php } elseif($post_slug == "noida-go-bananas") {?>
           <span class="call-btn"><a href="tel://8929498682" target="_blank"><i class="fas fa-phone-alt"></i></a></span>
      	<?php } elseif($post_slug == "pune-amanora") {?>
            <span class="call-btn"><a href="tel://9582885221" target="_blank"><i class="fas fa-phone-alt"></i></a></span>
        <?php } else {  ?>
            <span class="call-btn"><a href="tel://8882288001" target="_blank"><i class="fas fa-phone-alt"></i></a></span>
        <?php } ?>
 <div class="whatsapp-chat-bubble">
        <div class="whatsapp-chat-bubble-header">
            <div class="whatsapp-chat-profile">
                <div class="profile-image">
                    <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2024/02/websitelogo.webp" alt="SJ">
                </div>
                <div class="profile-details">
                    <p>SkyJumper Trampoline Park</p>
                    <span>online</span>
                </div>
            </div>
            <div class="close-box">
                <button>x</button>
            </div>
        </div>
        <div class="whatsapp-chat-bubble-body">
            <div class="whatsapp-chat-bubble-message">
                <p class="from-them">Hey! How can I help you today?</p>
            </div>
        </div>
        <div class="whatsapp-chat-bubble-footer">
            <div>
                <button>Start Chat</button>
            </div>
            <div>
                <p>⚡ by Quantastic Marketing</p>
            </div>
        </div>
    </div>
 <div class="web-what-link"><a target="_blank" href="https://wa.link/nhj7es"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/whatsapp-ic.png" alt="Whatsapp"></a></div>

<!-- wp-content/uploads/2024/07/popup-offer-1.webp -->  
<?php
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
  $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $path = parse_url($fullUrl, PHP_URL_PATH);
  $pathSegments = explode('/', trim($path, '/'));
if (isset($pathSegments[1]) && ctype_alpha($pathSegments[1])) { } else { 
?>
 <!-- <?php //if($post_slug != "faridabad" && $post_slug != "chennai" && $post_slug != "karnal"  && $post_slug != "pune-amanora" && $post_slug != "m3m-broadway" && $post_slug != "bangalore")  { ?> -->
 <?php if($post_slug != "noida-go-bananas")  { ?>
 <a data-fancybox data-src="#memberp" href="javascript:;"  style="display:none;" id="fbbox" class="btn green-btn"></a>
 <div style="display: none;" id="memberp" class="popupblock">
	<div class="team-member-info popupblock">  
	    <div class="image-block">
	        <a href="#book-panel" id="popboxview"> <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/02/valentine-banner-mobile.jpeg" alt="Promotion Image"></a> 
	    </div> 
	</div> 
</div> 
<!-- https://skyjumpertrampolinepark.com/wp-content/uploads/2024/07/popup-offer-1.webp -->
<?php } ?>
<?php /* if($post_slug == "karnal")  { ?>
 <a data-fancybox data-src="#memberp" href="javascript:;"  style="display:none;" id="fbbox" class="btn green-btn"></a>
 <div style="display: none;" id="memberp" class="popupblock">
	<div class="team-member-info popupblock">   
	    <div class="image-block">
	        <a href="#book-panel" id="popboxview"> <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/WhatsApp-Image-2025-01-16-at-13.11.55.jpeg" alt="Promotion Image"></a> 
	    </div>
	</div>
</div> 
<?php } ?>
<?php if($post_slug == "chennai")  { ?>
 <a data-fancybox data-src="#memberp" href="javascript:;"  style="display:none;" id="fbbox" class="btn green-btn"></a>
 <div style="display: none;" id="memberp" class="popupblock">
	<div class="team-member-info popupblock"> 
	    <div class="image-block">
	        <a href="#book-panel" id="popboxview"> <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/chennai-popup.jpeg" alt="Promotion Image"></a> 
	    </div>
	</div>
</div> 
<?php } ?>
<?php if($post_slug == "pune-amanora")  { ?>
 <a data-fancybox data-src="#memberp" href="javascript:;"  style="display:none;" id="fbbox" class="btn green-btn"></a>
 <div style="display: none;" id="memberp" class="popupblock">
	<div class="team-member-info popupblock">   
	    <div class="image-block">
	        <a href="#book-panel" id="popboxview"> <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/ALL-GAME-COMBO-Amanora-scaled.jpg" alt="Promotion Image"></a> 
	    </div>
	</div>
</div> 
<?php } ?>
<?php if($post_slug == "m3m-broadway")  { ?>
 <a data-fancybox data-src="#memberp" href="javascript:;"  style="display:none;" id="fbbox" class="btn green-btn"></a>
 <div style="display: none;" id="memberp" class="popupblock">
	<div class="team-member-info popupblock">   
	    <div class="image-block">
	        <a href="#book-panel" id="popboxview"> <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/ALL-GAME-COMBO-m3m-scaled.jpg" alt="Promotion Image"></a> 
	    </div>
	</div>
</div> 
<?php } ?>
<?php if($post_slug == "bangalore")  { ?>
 <a data-fancybox data-src="#memberp" href="javascript:;"  style="display:none;" id="fbbox" class="btn green-btn"></a>
 <div style="display: none;" id="memberp" class="popupblock">
	<div class="team-member-info popupblock">   
	    <div class="image-block">
	        <a href="#book-panel" id="popboxview"> <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/ALL-GAME-COMBO-banglore-scaled.jpg" alt="Promotion Image"></a> 
	    </div>
	</div>
</div> 
<?php } ?>
<?php if($post_slug == "faridabad")  { ?>
 <a data-fancybox data-src="#memberp" href="javascript:;"  style="display:none;" id="fbbox" class="btn green-btn"></a>
 <div style="display: none;" id="memberp" class="popupblock">
	<div class="team-member-info popupblock">   
	    <div class="image-block">
	        <a href="#book-panel" id="popboxview"> <img src="https://skyjumpertrampolinepark.com/wp-content/uploads/2025/01/All-game-combo-weekend-Faridabad-scaled.jpg" alt="Promotion Image"></a> 
	    </div>
	</div>
</div> 
<?php } */ ?>
<?php } ?> 



<?php wp_footer(); ?> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> 
<script>
  (function () {
    const localStorageKey = 'whatsappPopupSeen';
    const chatButtonLink = 'https://wa.link/nhj7es'; // Link for the button to redirect

    // Check if the user has already seen and closed the popup
    const hasSeenPopup = localStorage.getItem(localStorageKey) === 'true';

    // Function to fade in the popup
    function fadeIn(element) {
      element.style.display = 'block';
      element.style.opacity = 0;
      let opacity = 0;
      const interval = setInterval(() => {
        if (opacity >= 1) {
          clearInterval(interval);
        } else {
          opacity += 0.1;
          element.style.opacity = opacity;
        }
      }, 50);
    }

    // Function to fade out the popup
    function fadeOut(element) {
      let opacity = 1;
      const interval = setInterval(() => {
        if (opacity <= 0) {
          clearInterval(interval);
          element.style.display = 'none';
        } else {
          opacity -= 0.1;
          element.style.opacity = opacity;
        }
      }, 50);
    }

    // Initialize the popup functionality
    function initWhatsAppPopup() {
      const popup = document.querySelector('.whatsapp-chat-bubble');
      const closeButton = document.querySelector('.whatsapp-chat-bubble-header .close-box button');
      const chatButton = document.querySelector('.whatsapp-chat-bubble-footer div button');

      if (!popup || !closeButton || !chatButton) return;

      // Show popup after 10-15 seconds if conditions are met
      if (!hasSeenPopup) {
        setTimeout(() => {
          fadeIn(popup);
        }, 10000); // 10 seconds
      }

      // Close button functionality
      closeButton.addEventListener('click', () => {
        fadeOut(popup);
        localStorage.setItem(localStorageKey, 'true');
      });

      // Button click to redirect
      chatButton.addEventListener('click', () => {
        window.location.href = chatButtonLink;
      });
    }

    // Run the initialization function
    document.addEventListener('DOMContentLoaded', initWhatsAppPopup);
  })();
</script>
<script>
(function($) { 
  
    var currentUrl = window.location.pathname;  
    var targetGoBananaSlug = '/noida-go-bananas/';  
    var targetPuneAmanoraSlug = '/pune-amanora/';
    var targetPuneSlug = '/pune/'; 
    var targetAmritsarSlug = '/amritsar/';
    var targetBangaloreSlug = '/bangalore/';
    var targetChennaiSlug = '/chennai/';
    var targetChandigarhSlug = '/chandigarh/';
    var targetDelhiSlug = '/delhi/';
  	var targetFaridabadSlug = '/faridabad/';
  	var targetGhaziabadSlug = '/ghaziabad/';
  	var targetGurugramILDSlug = '/gurugram/';
  	var targetGurugramM3MSlug = '/m3m-broadway/';
    var targetOcusSlug  = '/ocus/';
  	var targetJalandharSlug  = '/jalandhar-2/';
    var targetJalandharNewSlug  = '/jalandhar/';
  	var targetKarnalSlug  = '/karnal/';
    var targetLucknowSlug  = '/lucknow/';
  	var targetNoidaWaveSlug  = '/noida-wave/';
    var targetNoidaSlug  = '/noida/';  
   
    if (currentUrl === targetGoBananaSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/noida-go-bananas/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/noida-go-bananas/school-parties/");
      	$(".kparty-menu").remove();
        $(".cparty-menu").remove();
        $(".laser-tag-menu").remove();
    } 
    if (currentUrl === targetPuneAmanoraSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/pune-amanora/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/pune-amanora/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/pune-amanora/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/pune-amanora/corporate-parties/");
        $(".laser-tag-menu a").attr("href", "https://skyjumpertrampolinepark.com/laser-tag/pune-amanora/");
        $(".laser-tag-menu ul").remove(); 
    } 
    if (currentUrl === targetPuneSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/pune/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/pune/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/pune/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/pune/corporate-parties/");
        $(".laser-tag-menu a").attr("href", "https://skyjumpertrampolinepark.com/laser-tag/pune/");
        $(".laser-tag-menu ul").remove(); 
    }
  	 if (currentUrl === targetAmritsarSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/amritsar/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/amritsar/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/amritsar/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/amritsar/corporate-parties/");
        $(".laser-tag-menu a").attr("href", "https://skyjumpertrampolinepark.com/laser-tag/amritsar/");
        $(".laser-tag-menu ul").remove(); 
    }
    if (currentUrl === targetBangaloreSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/bangalore/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/bangalore/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/bangalore/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/bangalore/corporate-parties/");
        $(".laser-tag-menu a").attr("href", "https://skyjumpertrampolinepark.com/laser-tag/bangalore/");
        $(".laser-tag-menu ul").remove();  
    }
    if (currentUrl === targetChennaiSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/chennai/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/chennai/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/chennai/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/chennai/corporate-parties/");
        $(".laser-tag-menu a").attr("href", "https://skyjumpertrampolinepark.com/laser-tag/chennai/");
        $(".laser-tag-menu ul").remove(); 
    }
  	if (currentUrl === targetChandigarhSlug ) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/chandigarh/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/chandigarh/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/chandigarh/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/chandigarh/corporate-parties/");
        $(".laser-tag-menu a").attr("href", "https://skyjumpertrampolinepark.com/laser-tag/chandigarh/");
        $(".laser-tag-menu ul").remove(); 
    }
  	if (currentUrl === targetDelhiSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/delhi/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/delhi/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/delhi/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/delhi/corporate-parties/");
        $(".laser-tag-menu").remove();
        $(".laser-tag-menu ul").remove(); 
    }
  	if (currentUrl === targetFaridabadSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/faridabad/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/faridabad/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/faridabad/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/faridabad/corporate-parties/");
        $(".laser-tag-menu a").attr("href", "https://skyjumpertrampolinepark.com/laser-tag/faridabad/");
        $(".laser-tag-menu ul").remove(); 
    }
  	if (currentUrl === targetGhaziabadSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/ghaziabad/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/ghaziabad/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/ghaziabad/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/ghaziabad/corporate-parties/");
        $(".laser-tag-menu a").attr("href", "https://skyjumpertrampolinepark.com/laser-tag/ghaziabad/");
        $(".laser-tag-menu ul").remove(); 
    }
  	if (currentUrl === targetGurugramILDSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/gurugram/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/gurugram/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/gurugram/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/gurugram/corporate-parties/");
        $(".laser-tag-menu a").attr("href", "https://skyjumpertrampolinepark.com/laser-tag/gurugram/");
        $(".laser-tag-menu ul").remove(); 
    }
  	if (currentUrl === targetGurugramM3MSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/m3m-broadway/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/m3m-broadway/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/m3m-broadway/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/m3m-broadway/corporate-parties/");
        $(".laser-tag-menu a").attr("href", "https://skyjumpertrampolinepark.com/laser-tag/m3m-broadway/");
        $(".laser-tag-menu ul").remove(); 
    }
   if (currentUrl === targetOcusSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/ocus/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/ocus/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/ocus/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/ocus/corporate-parties/");
        $(".laser-tag-menu a").attr("href", "https://skyjumpertrampolinepark.com/laser-tag/ocus/");
        $(".laser-tag-menu ul").remove(); 
    }
  	if (currentUrl === targetJalandharSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/jalandhar/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/jalandhar/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/jalandhar/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/jalandhar/corporate-parties/");
        $(".laser-tag-menu a").attr("href", "https://skyjumpertrampolinepark.com/laser-tag/jalandhar/");
        $(".laser-tag-menu ul").remove(); 
    }
 	if (currentUrl === targetJalandharNewSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/jalandhar/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/jalandhar/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/jalandhar/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/jalandhar/corporate-parties/");
        $(".laser-tag-menu a").attr("href", "https://skyjumpertrampolinepark.com/laser-tag/jalandhar/");
        $(".laser-tag-menu ul").remove(); 
    }
  	if (currentUrl === targetKarnalSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/karnal/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/karnal/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/karnal/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/karnal/corporate-parties/");
        $(".laser-tag-menu a").attr("href", "https://skyjumpertrampolinepark.com/laser-tag/karnal/");
        $(".laser-tag-menu ul").remove(); 
    }
  	if (currentUrl === targetLucknowSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/lucknow/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/lucknow/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/lucknow/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/lucknow/corporate-parties/");
        $(".laser-tag-menu a").attr("href", "https://skyjumpertrampolinepark.com/laser-tag/lucknow/");
        $(".laser-tag-menu ul").remove(); 
    }
  	if (currentUrl === targetNoidaSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/noida/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/noida/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/noida/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/noida/corporate-parties/");
        $(".laser-tag-menu").remove(); 
        $(".laser-tag-menu ul").remove(); 
    }
  	if (currentUrl === targetNoidaWaveSlug) {
      	$(".bparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/noida-wave/birthday-parties/");
        $(".sparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/noida-wave/school-parties/");
      	$(".kparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/noida-wave/kitty-parties/");
        $(".cparty-menu a").attr("href", "https://skyjumpertrampolinepark.com/event/noida-wave/corporate-parties/");
        $(".laser-tag-menu").remove(); 
        $(".laser-tag-menu ul").remove(); 
    }  
    
  
  
 $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 60) {
        $('.header-notification-text').addClass("fixed");
    } else {
        $('.header-notification-text').removeClass("fixed");
    }
});
  
  
  $('#skj-loc-lists').owlCarousel({
    loop: true,
    margin: 15,
    autoWidth: true,
    nav: false,
    dots: false,
    autoplay: true,    
    autoplayTimeout: 3000, 
    responsive: { 
      0: {
        items: 3
      },
      768: {
        items: 6
      },
      1200: {
        items: 8
      }
    }
  }); 
  


  
  $(function() { 

     function openFancybox() {
        setTimeout(function () {
            $('#fbbox').trigger('click');
        }, 4000);
    };
    var visited = $.cookie('visited');
    if (visited == 'yes') {
      openFancybox();
    } else {
        openFancybox();
    }
    $.cookie('visited', 'yes', {
        expires: 365
    });
    $("#fbbox").fancybox();
    
    
   $("#popboxview").on("click", function(){
       $.fancybox.close(true);
   });
    
    
    function highlightDates(datesArray) {
    // Loop through each date in the array
    datesArray.forEach(function (date) {
        // Find the <a> tag with the corresponding data-date attribute
        var $targetDate = $('a[data-date="' + date + '"]');

        // Check if the <a> tag is found
        if ($targetDate.length > 0) {
            // Change the background color to red
            $targetDate.css('background', 'red');
        }
    });
}
  

function fetchMonthName() {
    setInterval(function () {

        var specialDaysTuri = {
            January: [1, 14],
            February: [14],
            March: [14],
            April: [7, 18],
            May: [1],
            June: [17],
            July: [17], 
            August: [15,16, 19, 26],
            September: [7, 16],
            October: [29, 30, 31],
            November: [1,2,14,15],
            December: [25,26,27,28,29,30,31],
        };

        // Get the text content of the span with class 'ui-datepicker-month'
        var monthName = $('.ui-datepicker-month').text();

        // Get the location from the div
        var titleText = $('.turitop_booking_system_woocommerce_wrap_product_title').text().trim();

        // Find the index of the word "Trampoline"
        //var trampolineIndex = titleText.indexOf('Trampoline');
    
      	var keywords = ['Trampoline', 'Laser', 'Sky', 'All', 'Special', 'HyperGrid','VR','Wall'];
        var trampolineIndex = -1;

          for (var i = 0; i < keywords.length; i++) {
              var index = titleText.indexOf(keywords[i]);
              if (index > 0) {
                  trampolineIndex = index;
                  break; // Stop at the first match
              }
          }
    
        // Extract the location before "Trampoline"
        var location = trampolineIndex > 0 ? titleText.slice(0, trampolineIndex).trim() : "";
        // Extract the location before "Trampoline"
        //var location = titleText.slice(0, trampolineIndex).trim();

        // Switch case based on location
        switch (location.toLowerCase()) {
            case 'chennai':
              specialDaysTuri.January = [14];
              break;
            case 'bangalore':
              specialDaysTuri.January = [14];
              break;
            case 'jalandhar':
              specialDaysTuri.February = [3,12,14,26];
              specialDaysTuri.March = [14,31];
              specialDaysTuri.April = [6,10,13,14,18];
              specialDaysTuri.May = [];
              specialDaysTuri.June = [7,11];
              specialDaysTuri.July = [];
              specialDaysTuri.August = [15,16];
              specialDaysTuri.September = [];
              specialDaysTuri.October = [2,,7,20];
              specialDaysTuri.November = [5];
              specialDaysTuri.December = [25,27];
              break;
             case 'delhi':
              specialDaysTuri.January = [13,14];
              break;
            case 'karnal':
              specialDaysTuri.January = [13,14];
              break;
            case 'amritsar':
              specialDaysTuri.February = [3,12,14,26];
              specialDaysTuri.March = [14,31];
              specialDaysTuri.April = [6,10,13,14,18];
              specialDaysTuri.May = [];
              specialDaysTuri.June = [7,11];
              specialDaysTuri.July = [];
              specialDaysTuri.August = [15,16];
              specialDaysTuri.September = [];
              specialDaysTuri.October = [2,,7,20];
              specialDaysTuri.November = [5];
              specialDaysTuri.December = [25,27];
              break;
            case 'chandigarh':
              specialDaysTuri.February = [3,12,14,26];
              specialDaysTuri.March = [14,31];
              specialDaysTuri.April = [6,10,13,14,18];
              specialDaysTuri.May = [];
              specialDaysTuri.June = [7,11];
              specialDaysTuri.July = [];
              specialDaysTuri.August = [15,16];
              specialDaysTuri.September = [];
              specialDaysTuri.October = [2,,7,20];
              specialDaysTuri.November = [5];
              specialDaysTuri.December = [25,27];
              break;
            case 'pune':
              specialDaysTuri.January = [14];
              break;
            case 'noida':
              specialDaysTuri.January = [13,14];
              break;
            case 'lucknow':
              specialDaysTuri.January = [13,14];
              break;
            case 'noida go bananas':
              specialDaysTuri.January = [13,14];
              break;
            case 'noida':
              specialDaysTuri.January = [13,14];
              break;
            case 'ghaziabad':
              specialDaysTuri.January = [13,14];
              break;
            case 'faridabad':
              specialDaysTuri.January = [13,14];
              break;
            case 'ocus':
              specialDaysTuri.January = [13,14];
              break;
            case 'gurugram':
              specialDaysTuri.January = [13,14];
              break;
            default:
                break;
        }
      
      // addFridaysToSpecialDays(specialDaysTuri);

        // Fetch the array of special days for the current month
        var specialDaysTuriArray = specialDaysTuri[monthName];

        // Check if there are special days for the current month
        if (specialDaysTuriArray) {
            // Call the highlightDates function with the special days array
            highlightDates(specialDaysTuriArray);
        }
    }, 1000); // 1000 milliseconds = 1 second
}

// Example usage:
fetchMonthName();

    
  function addFridaysToSpecialDays(specialDaysTuri) {
    // Loop through each month
    for (var month in specialDaysTuri) {
        // Get the number of days in the current month
        var daysInMonth = new Date(new Date().getFullYear(), new Date(month + ' 1').getMonth() + 1, 0).getDate();

        // Loop through each day in the month
        for (var day = 1; day <= daysInMonth; day++) {
            var currentDate = new Date(new Date().getFullYear(), new Date(month + ' ' + day).getMonth(), day);
            // Check if the current day is a Friday (day 5 in JavaScript, where Sunday is 0)
            if (currentDate.getDay() === 5) {
                // If it's a Friday, add it to the special days array for the current month
                if (!specialDaysTuri[month].includes(day)) {
                    specialDaysTuri[month].push(day);
                }
            }
        }
    }
}    
    
    
    
    
    
    
  function roundPrice(price) {
    // If the decimal part is greater than or equal to 0.8, round towards the front
    if (price % 1 >= 0.8) {
      return Math.ceil(price);
    }
    // If the decimal part is less than or equal to 0.2, round towards the back
    else if (price % 1 <= 0.2) {
      return Math.floor(price);
    }
    // Otherwise, use standard rounding
    else {
      return Math.round(price);
    }
  }
      function updatePrice() {
    // Get the value from the hidden input
      var priceValue = $('input[name="turitop_booking_system_ticket_price"]').val();

      // Get the selected value from the <select> inside the specified table
      var selectedQuantity = $('.turitop_booking_system_tickets_table select').val();


        
        
// Get the value of the quantity selector for socks, or assign zero if the element is not found
var selectedQtySocks = $('.turitop_booking_system_tickets_table tr:eq(1) .turitop_booking_system_ticket_availability select').length ? 
    $('.turitop_booking_system_tickets_table tr:eq(1) .turitop_booking_system_ticket_availability select').val() : 
    0;

// Get the value of the price input for socks, or assign zero if the element is not found
var priceValueSocks = $('.turitop_booking_system_tickets_table tr:eq(1) .turitop_booking_system_ticket_price input[name="turitop_booking_system_ticket_price"]').length ? 
    $('.turitop_booking_system_tickets_table tr:eq(1) .turitop_booking_system_ticket_price input[name="turitop_booking_system_ticket_price"]').val() : 
    0;
        
        
        
 var selectedQtyCombo = $('.turitop_booking_system_tickets_table tr:eq(2) .turitop_booking_system_ticket_availability select').length ? 
    $('.turitop_booking_system_tickets_table tr:eq(2) .turitop_booking_system_ticket_availability select').val() : 
    0;

// Get the value of the price input for socks, or assign zero if the element is not found
var priceValueCombo = $('.turitop_booking_system_tickets_table tr:eq(2) .turitop_booking_system_ticket_price input[name="turitop_booking_system_ticket_price"]').length ? 
    $('.turitop_booking_system_tickets_table tr:eq(2) .turitop_booking_system_ticket_price input[name="turitop_booking_system_ticket_price"]').val() : 
    0;

        
        var totalPrice = (priceValue * selectedQuantity) + (selectedQtySocks * priceValueSocks) + (selectedQtyCombo * priceValueCombo);

        // Construct the HTML with the new total price
      var newHtml = `<span class="woocommerce-Price-currencySymbol">₹</span>${totalPrice}`;

        // Set the HTML content of the span with the new price value
        $('.turitop_booking_system_woocommerce_totals_price .woocommerce-Price-amount bdi').html(newHtml);
      }


    // Execute the function every 1 second
    setInterval(updatePrice, 1000);

    // Initial execution
    updatePrice();

$('#openFancybox').on('click', function () {
    // Open Fancybox
    $.fancybox.open({
        src: '#hidden-content',
        type: 'inline',
        beforeShow: function () {
            // Set an initial height to avoid flicker
            $('.calender-card-holder').css('height', '100px'); // Adjust the initial height as needed
        },
        afterShow: function () {
            // Check if Slick Carousel is already initialized
            if (!$('.calender-card-holder').hasClass('slick-initialized')) {
                // If not initialized, initialize Slick Carousel
                $(".calender-card-holder").slick({
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    autoplay: false,
                    autoplaySpeed: 2000,
                    prevArrow: '<a class="slick-prev">&lt;</a>',
                    nextArrow: '<a class="slick-next">&gt;</a>',
                });


            }
                            // Adjust the height to fit the content after Slick Carousel is initialized
                $('.calender-card-holder').css('height', 'auto');
        }
    });
});
 

        
        
        // Function to generate a calendar for a given month and year
function generateCalendar(year, month, specialDays) {
    const daysInMonth = new Date(year, month + 1, 0).getDate();
    const firstDayOfWeek = new Date(year, month, 1).getDay();
  
    const $cardHolder = $('<div>').addClass('card-holder').appendTo('.calender-card-holder');
    const $calenderCard = $('<div>').addClass('calender-card').appendTo($cardHolder);
    const $caption = $('<caption>').text(`${monthNames[month]} ${year}`).appendTo($calenderCard);
    const $table = $('<table>').appendTo($calenderCard);
    const $tbody = $('<tbody>').appendTo($table);
    
    
  
    // Create header row with day names
    const $headerRow = $('<tr>').appendTo($tbody);
    const dayNames = ['SUN', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'SAT'];
    dayNames.forEach(day => {
      $('<th>').text(day).appendTo($headerRow);
    });
  
    // Determine the number of weeks needed for the month
    const weeksInMonth = Math.ceil((firstDayOfWeek + daysInMonth) / 7);
  
        // Create the calendar days
        let dayCount = 1;
for (let i = 0; i < weeksInMonth; i++) {
    const $row = $('<tr>').appendTo($tbody);
    for (let j = 0; j < 7; j++) {
        const $td = $('<td>').appendTo($row);

        if (i === 0 && j < firstDayOfWeek) {
            // Empty cells before the first day of the month
            $td.text('');
        } else if (dayCount <= daysInMonth) {
            // Fill in the days of the month
            $td.text(dayCount);

            // Check if the day is a special day and add the class
            const currentDay = new Date(year, month, dayCount).getDay();
          	var location_temp = window.location.href.split('/').filter(part => part.trim() !== '').pop(); // Get the last part of the URL after '/'

          	//if(location_temp == 'pune' || location_temp == 'bangalore' || location_temp == 'chennai' || location_temp == 'noida'){
              //$td.addClass('special-day');
			//}
            if (specialDays[monthNames[month]] && (specialDays[monthNames[month]].includes(dayCount) || currentDay === 0 || currentDay === 6 )) {
                $td.addClass('special-day');
            }

            dayCount++;
        } else {
            // Fill in the remaining cells with empty content
            $td.text('');
        }
    }
}

  }
  // Define month names
  const monthNames = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December", 
  ];
   
  // Define special days
  const specialDays = {
    January: [1, 14],
    February: [14],
    March: [14],
    April: [7, 18],
    May: [1],
    June: [17],
    July: [17], 
    August: [15,16, 19, 26],
    September: [7, 16],
    October: [29, 30, 31],
    November: [1,2,14,15],
    December: [25,26,27,28,29,30,31],
  };
  
  function getLocationSpecificDates(url) {
      const location = url.split('/').filter(part => part.trim() !== '').pop(); // Get the last part of the URL after '/'
      
      // Check if the location is mentioned
          if (location) {
            switch (location.toLowerCase()) {
              case 'chennai':
                                specialDays.January = [1, 14]; 
                                break;
               case 'bangalore':
                                specialDays.January = [1, 14]; 
                                break;
                                
               case 'jalandhar-2':
                				specialDays.February = [3,12,14,26];
                                specialDays.March = [14,31];
                                specialDays.April = [6,10,13,14,18];
                                specialDays.May = [];
                                specialDays.June = [7,11];
                                specialDays.July = [];
                                specialDays.August = [15,16];
                                specialDays.September = [];
                                specialDays.October = [2,,7,20];
                                specialDays.November = [5];
                                specialDays.December = [25,27];
                                break;    
               case 'amritsar':
                                specialDays.February = [3,12,14,26];
                                specialDays.March = [14,31];
                                specialDays.April = [6,10,13,14,18];
                                specialDays.May = [];
                                specialDays.June = [7,11];
                                specialDays.July = [];
                                specialDays.August = [15,16];
                                specialDays.September = [];
                                specialDays.October = [2,,7,20];
                                specialDays.November = [5];
                                specialDays.December = [25,27]; 
                                break;
               case 'chandigarh':
                                specialDays.February = [3,12,14,26];
                                specialDays.March = [14,31];
                                specialDays.April = [6,10,13,14,18];
                                specialDays.May = [];
                                specialDays.June = [7,11];
                                specialDays.July = [];
                                specialDays.August = [15,16];
                                specialDays.September = [];
                                specialDays.October = [2,,7,20];
                                specialDays.November = [5];
                                specialDays.December = [25,27]; 
                                break;
              case 'pune':
                                specialDays.January = [1, 14]; 
                                break;
              case 'noida':
                                specialDays.January = [1,13,14]; 
                                break;
              case 'lucknow':
                                specialDays.January = [1,13,14]; 
                                break;
              case 'noida-go-bananas': 
                				specialDays.January = [1,13,14]; 
                                break;
              case 'ghaziabad':
                				specialDays.January = [1,13,14]; 
                                break;
              case 'gurugram':
                				specialDays.January = [1,13,14]; 
                                break;
              case 'ocus':
                				specialDays.January = [1,13,14]; 
                                break;
              case 'faridabad':
                				specialDays.January = [1,13,14]; 
                                break;
              case 'karnal':
                				specialDays.January = [1,13,14]; 
                                break;
              case 'delhi':
                				specialDays.January = [1,13,14]; 
                                break;
              default:
                                console.log('Location not recognized or no specific dates set for this location.');
                                break;
            }
          } else {
            console.log('No location specified in the URL.');
          }
    }
  getLocationSpecificDates(window.location.href);
  
  // Set start and end dates
  const startDate = new Date(2025,01);    
  const endDate = new Date(2025, 12);
  
  // Generate calendars for each month
  for (
    let currentDate = new Date(startDate);
    currentDate <= endDate;
    currentDate.setMonth(currentDate.getMonth() + 1)
  ) {
    generateCalendar(
      currentDate.getFullYear(),
      currentDate.getMonth(),
      specialDays
    );
  }  
  if ($(window).width() < 767) {
    $('.site-menu ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.sub-menu').toggle();
      $('.sub-menu').not($(this).siblings()).hide();
		$(this).children('i').toggleClass('rotate');
		$('.site-menu ul li a i').not($(this).children('i')).removeClass('rotate');
      e.stopPropagation();
    });
    $('html').click(function() {
      $('.sub-menu').hide();
      $('.site-menu ul li a i').removeClass('rotate');

    });
    $('#nav-toggle').click(function() {
      $('.site-menu ul').slideToggle();
    });
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
      }
  
  
  const homeLeadsURL ="https://script.google.com/macros/s/AKfycbwsgRKGqkYusZ4kFkykRYSA4IZn4vIRtoq958ZlgkaR26boTjUv4M3YB8PH8LJNJfzT/exec";
    
    function submitForm(form, successMessage, googeScriptURL) {
    // const pageLocation = locationExtractor();
    // const srcURL = window.location.href;
    // Add current date and time to the form data
    var formData = new FormData(form);
    var currentDate = new Date();
    // formData.append("Location", pageLocation);
    formData.append("Date", currentDate.toLocaleString());
    
    showLoader();
    $("#submitBtn").prop("disabled", true);
    
    fetch(googeScriptURL, { method: "POST" , body: formData })
      .then((response) => response.json())
      .then((data) => {
        hideLoader();
        $("#submitBtn").prop("disabled", false);

        if (data.result == "success") {
          Swal.fire({
              icon: 'success',
              title: 'Success!',
              text: successMessage,
          });
          form.reset();
          resetBorderColors(form);
        } else {
          Swal.fire({
              icon: 'error',
              title: 'Error!',
              text: 'Oops, something went wrong. Please try again later.',
          });
        }
        console.log(data);
      })
      .catch((error) => {
        hideLoader();
        $("#submitBtn").prop("disabled", false);

    
        Swal.fire({
          icon: 'error',
          title: 'Error!',
          text: 'Oops, something went wrong. Please try again later.',
      });
    
        console.error("Error!", error.message);
      });
    }
    
     function resetBorderColors(form) {
      const inputs = form.querySelectorAll("input, select");
      inputs.forEach((input) => {
        input.style.borderColor = "#ccc";
        input.style.outlineColor = "#ccc";
      });
    }
    
    function setupFormValidation(form, scriptURL, successMessage) {
    // Function to check if an input is valid
    function isValidInput(input) {
      return input.checkValidity();
    }
    var inputs = form.querySelectorAll("input[required], select[required]");
    // Function to check all inputs and enable/disable submit button
    function validateForm() {
      let isValidForm = true;
    
      inputs.forEach((input) => {
        if (!isValidInput(input)) {
          isValidForm = false;
          input.style.borderColor = "#bd3135";
          input.style.outlineColor = "#bd3135";
        } else {
          input.style.borderColor = "#2ec97e";
          input.style.outlineColor = "#2ec97e";
        }
      });
    }
    
    inputs.forEach((input) => {
      input.addEventListener("input", () => {
        validateForm();
      });
    });
    
    // Submit form function
    form.addEventListener("submit", (e) => {
      e.preventDefault();
    
      const isValid = Array.from(inputs).every(isValidInput);
      if (isValid) {
        submitForm(form, successMessage, scriptURL);
      } else {
          Swal.fire({
              icon: 'error',
              title: 'Error!',
              text: 'Please fill the form correctly in the highlighted sections.',
          });
      }
    });
    }
    
    // Example usage for form1
    var form5 = document.getElementById("homeLeads");
    if (form5) {
      setupFormValidation(
        form5,
        homeLeadsURL,
        "Thank you! Your enquiry has been sent successfully."
      );
    }
    
    
const dateInput = document.getElementById('Laser date');

if (dateInput) {
  const picker1 = new Litepicker({
    element: dateInput
  });
} else {
  console.log('Error: The element with ID "Laser date" was not found.');
}

const dateInput2 = document.getElementById('Birthday date');

if (dateInput2) {
  const picker2 = new Litepicker({
    element: dateInput2
  });
} else {
  console.log('Error: The element with ID "Birthday date" was not found.');
}

     
    
    var laserLeadsURL = "https://script.google.com/macros/s/AKfycbxtw0ZifaNRIYj8MOataG8pOfc6ZhnMrWKr-63Dn3iyYrKjdT3ScilPQc_w1n7Fp4N6/exec";
    var form8 = document.getElementById("laserTagForm");
    if (form8) {
      setupFormValidation(
        form8,
        laserLeadsURL,
        "Thank you! Your enquiry has been sent successfully."
      );
    }
    
    
    var birthdayLeadsURL = "https://script.google.com/macros/s/AKfycbzf8DVsCpfst0UzHHqFhiZOE1rK-EVUek-xSHOi4I4sBvBTxStD_kLxJt9NUXVB_ZEI/exec";
    var form9 = document.getElementById("birthdayLPForm");
    if (form9) {
      setupFormValidation(
        form9,
        birthdayLeadsURL,
        "Thank you! Your enquiry has been sent successfully."
      );
    }
    
    
function showLoader() {
  const overlay = document.querySelector("#overlay");
  if (overlay) {
    overlay.style.display = "flex";
  }
}

function hideLoader() {
  const overlay = document.querySelector("#overlay");
  if (overlay) {
    overlay.style.display = "none";
  }
}
      
      
      
  });
})(jQuery);
</script>
</body>
</html>
