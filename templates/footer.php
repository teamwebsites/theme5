<?php get_template_part( 'mobilefooter' ); ?>

<style>
			
			.custom-login { box-sizing: border-box; max-width: 450px; overflow: hidden; margin: 50px auto; padding: 20px; color: #333; }
			.custom-login h3, .custom-login p { margin: 0; padding: 5px; }
			.custom-login form { padding: 10px 0 0 0; }
			
			ul.tabs_login { position: relative; z-index: 2; width: 100%; overflow: hidden; margin: 0; padding: 0; list-style: none; }
			ul.tabs_login li { float: left; margin: 0 5px 0 0; padding: 0; background-color: #fff; }
			ul.tabs_login li a { display: block; padding: 10px 20px; color: #777; background-color: #ccc; text-decoration: none; text-shadow: 1px 1px 1px rgba(255,255,255,0.5); }
			ul.tabs_login li a:hover { color: #555; background-color: #efefef; }
			ul.tabs_login li.active_login a { font-weight: bold; color: #333; background-color: #fff; }
			
			.tab_container_login { background-color: #fff; }
			.tab_content_login { padding: 20px; box-shadow: 0 1px 5px 0 rgba(0,0,0,0.7); }
			
			.username, .password, .login_fields { box-sizing: border-box; width: 100%; overflow: hidden; padding: 5px; }
			.username label, .password label { display: inline-block; width: 85px; margin: 0; padding: 0; }
			.username input, .password input { 
				box-sizing: border-box; display: inline-block; width: 270px; margin: 0; padding: 5px; color: #777; 
				border: 1px solid #ccc; font-size: 14px; font-family: Overpass, sans-serif; 
				}
			.username input:active, .password input:active, .username input:focus, .password input:focus { color: #333; border-color: #777; }
			.username-reset label { display: none; }
			.username-reset input { width: 90%; }
			
			.rememberme { padding: 5px 0; font-size: 80%; }
			.user-submit { 
				box-sizing: border-box; display: block; margin: 10px 0 0 0; padding: 15px 30px; cursor: pointer;
				border: 0; color: #fff; font-size: 16px; background-color: #21759b; 
				}
			.user-submit:hover { background-color: rgba(33,117,155,0.8); }
			
			.user-logged-in { box-sizing: border-box; width: 100%; overflow: hidden; padding: 25px; background-color: #fff; box-shadow: 0 1px 5px 0 rgba(0,0,0,0.7); }
			.user-icon { box-sizing: border-box; float: left; width: 125px; padding: 15px 0 0 5px; }
			.user-icon img { width: 100px; height: 100px; box-shadow: 0 1px 5px 0 rgba(0,0,0,0.7); }
			.user-info { box-sizing: border-box; float: left; width: 230px; }
			.user-info p { margin: 20px 0 10px 0; }
			.user-info p:last-child { margin: 0; }
			.user-info a { color: #21759b; text-decoration: none; }
			.user-info a:hover { color: rgba(33,117,155,0.8); text-decoration: underline; }
			
			@media only screen and (max-width: 960px) {
				.custom-login { padding: 0; }	
			}
		</style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script>
			jQuery(document).ready(function($) {
				$(".tab_content_login").hide();
				$("ul.tabs_login li:first").addClass("active_login").show();
				$(".tab_content_login:first").show();
				$("ul.tabs_login li").click(function() {
					$("ul.tabs_login li").removeClass("active_login");
					$(this).addClass("active_login");
					$(".tab_content_login").hide();
					var activeTab = $(this).find("a").attr("href");
					$(activeTab).show();
					return false;
				});
			});
		</script>

 <!-- Swiper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.min.js"></script>      
      
<script>
    var swiper3 = new Swiper('.s2', {
    slidesPerView: 'auto',
      slidesPerGroup: 1,
      slidesOffsetBefore: 0,
      initialSlide: 0,
      spaceBetween: 0,
      autoplay: true,
      loop: true,
      loopFillGroupWithBlank: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    
    var swiper = new Swiper('.s1main', {
      slidesPerView: 'auto',
      slidesPerGroup: 4,
      slidesOffsetBefore: 0,
      initialSlide: 0,
      breakpoints: {
    // when window width is <= 320px
    320: {
      slidesPerView: 'auto',
      slidesPerGroup: 1
    },
    // when window width is <= 480px
    470: {
      slidesPerView: 'auto',
      slidesPerGroup: 1
    },
    // when window width is <= 640px
    640: {
      slidesPerView: 2,
      loopedSlides: 4,
      shortSwipes: false,
      slidesPerGroup: 2
    }
  },
      spaceBetween: 0,
      autoplay: true,
      loop: true,
      loopFillGroupWithBlank: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>


<div id="mobilemenu-dropdowns">



<script type='text/javascript' src='https://templatesnew.teamwebsites.co.uk/wp-content/themes/theme1/js/custom.js'></script>    

    

</div>



<div>

<div class="wrap container footer-sponsors-affiliations">



<div class="content row">
    
    
<?php get_template_part('adverts/low', 'adverts'); ?>    


<div class="footerspons">

      

       <p>Club Sponsors</p>

      

      

      

            <?php if ( get_theme_mod( 'animals_clubsponsor' ) ) : ?>   <a href="<?php echo esc_url( get_theme_mod( 'primaryclubsponsor_url' ) ); ?>"> 

			  

			  <div class="defospons"> <img src="<?php echo esc_url( get_theme_mod( 'animals_clubsponsor' ) ); ?>" alt="Club Sponsor - <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">  </div> </a>  <?php else : ?>  <span>Advertise Here</span>   <?php endif; ?>

      

			    

		 <?php if ( get_theme_mod( 'animals_secondaryclubsponsor' ) ) : ?>	  <a href="<?php echo esc_url( get_theme_mod( 'secondaryclubsponsor_url' ) ); ?>">   

			  

			  <div class="defospons"> <img src="<?php echo esc_url( get_theme_mod( 'animals_secondaryclubsponsor' ) ); ?>" alt="Club Sponsor - <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">  </div> </a>  <?php else : ?>  <span>Advertise Here</span>   <?php endif; ?>

			  

      

       

      

      

             <?php if ( get_theme_mod( 'animals_tertiaryclubsponsor' ) ) : ?>   <a href="<?php echo esc_url( get_theme_mod( 'tertiaryclubsponsor_url' ) ); ?>"> 

			  

			  <div class="defospons"> <img src="<?php echo esc_url( get_theme_mod( 'animals_tertiaryclubsponsor' ) ); ?>" alt="Club Sponsor - <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">  </div> </a>  <?php else : ?>  <span>Advertise Here</span>   <?php endif; ?>

      

			    

			  <?php if ( get_theme_mod( 'animals_additionalclubsponsor' ) ) : ?> <a href="<?php echo esc_url( get_theme_mod( 'additionalclubsponsor_url' ) ); ?>">   

			  

			  <div class="defospons"> <img src="<?php echo esc_url( get_theme_mod( 'animals_additionalclubsponsor' ) ); ?>" alt="Club Sponsor - <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">  </div> </a>  <?php else : ?>  <span>Advertise Here</span>   <?php endif; ?>

			  

      

      

      

            </div>

            

            

            

<div class="footer-affiliations">

    

    <?php $subtheme = get_theme_mod('affiliationsfa', 'affiliationfa'); ?>

    



    <div <?php body_class($subtheme); ?>>

    

    <p>Affiliations</p>

    

    

    <img class="defospons" id="thefa" title="Supporting the FA's Respect Campaign" src="https://teamwebsites.co.uk/images/respect%20fa.gif">

    

    <img class="defospons" id="thefa" alt="FA's Respect Campaign - FA Affiliated Club" title="FA Affiliated Club" src="https://teamwebsites.co.uk/images/respect.gif">

    

    <img class="defospons" id="amateurfa" alt="FA's Respect Campaign - FA Affiliated Club" title="Amateur Football Alliance" src="https://teamwebsites.co.uk/images/amateur%20fa.gif">

    

    <img class="defospons" id="armyfa" alt="Army FA Affiliated Club" title="Army FA" src="https://teamwebsites.co.uk/images/army%20fa.png">

    

    <img class="defospons" id="bedsfa" alt="Army FA Affiliated Club" title="Bedfordshire FA" src="https://teamwebsites.co.uk/images/bedfordshire%20fa.gif">

    

    <img class="defospons" id="berksbucksfa" alt="Berks & Bucks FA Affiliated Club" title="Berks & Bucks FA" src="https://teamwebsites.co.uk/images/berks%20and%20bucks%20fa.gif">

    

    <img class="defospons" id="birmfa" alt="Birmingham FA Affiliated Club" title="Birmingham FA" src="https://teamwebsites.co.uk/images/birmingham%20fa.gif">

    

    <img class="defospons" id="cambrfa" alt="Cambridgeshire FA Affiliated Club" title="Cambridgeshire FA" src="https://teamwebsites.co.uk/images/cambridgeshire%20fa.jpg">

    

    <img class="defospons" id="cheshfa" alt="Cheshire FA Affiliated Club" title="Cheshire FA" src="https://teamwebsites.co.uk/images/cheshire%20fa.png">

    

    <img class="defospons" id="cornwallfa" alt="Cornwall FA Affiliated Club" title="Cornwall FA" src="https://teamwebsites.co.uk/images/cornwall%20fa.gif">

    

    <img class="defospons" id="cumberlfa" alt="Cumberland FA Affiliated Club" title="Cumberland FA" src="https://teamwebsites.co.uk/images/cumberland%20fa.jpg">

    

    <img class="defospons" id="derbyshirefa" alt="Derbyshire FA Affiliated Club" title="Derbyshire FA" src="https://teamwebsites.co.uk/images/derbyshire%20fa.gif">

    

    <img class="defospons" id="devonfa" alt="Devon FA Affiliated Club" title="Devon FA" src="https://teamwebsites.co.uk/images/devon%20fa.jpg">

    

    <img class="defospons" id="dorsetfa" title="Dorset FA" src="https://teamwebsites.co.uk/images/dorset%20fa.gif">

    

    <img class="defospons" id="durhamfa" alt="Durham FA Affiliated Club" title="Durham FA" src="https://teamwebsites.co.uk/images/durham%20fa.gif">

    

    <img class="defospons" id="eastridsfa" alt="East Riding FA Affiliated Club" title="East Riding FA" src="https://teamwebsites.co.uk/images/east%20riding%20fa.gif">

    

    <img class="defospons" id="enschoolsfa" alt="English Schools FA Affiliated Club" title="English Schools FA" src="https://teamwebsites.co.uk/images/esfa.png">

    

    <img class="defospons" id="essexfa" alt="Essex FA Affiliated Club" title="Essex FA" src="https://teamwebsites.co.uk/images/essex%20fa.gif">

    

    <img class="defospons" id="gloucesfa" title="Gloucestershire FA" src="https://teamwebsites.co.uk/images/gloucestershirefa.gif">

    

    <img class="defospons" id="guernseyfa" alt="Guernsey FA Affiliated Club" title="Guernsey FA" src="https://teamwebsites.co.uk/images/guernsey%20fa.png">

    

    <img class="defospons" id="hampshirefa" alt="Hampshire FA Affiliated Club" title="Hampshire FA" src="https://teamwebsites.co.uk/images/hampshire%20fa.gif">

    

    <img class="defospons" id="herefordshirefa" alt="Herefordshire FA Affiliated Club" title="Herefordshire FA" src="https://teamwebsites.co.uk/images/herefordshire%20fa.jpg">

    

    

    

    <img class="defospons" id="hertsfa" alt="Hertfordshire FA Affiliated Club" title="Hertfordshire FA" src="https://teamwebsites.co.uk/images/hertfordshire%20fa.gif">

    

    <img class="defospons" id="huntingdownfa" alt="Huntingdownshire FA Affiliated Club" title="Huntingdownshire FA" src="https://teamwebsites.co.uk/images/huntingdownshire%20fa.jpg">

    

    <img class="defospons" id="isleofmanfa" alt="Isle of Man FA Affiliated Club" title="Isle of Man FA" src="https://teamwebsites.co.uk/images/isle%20of%20man%20fa.png">

    

    <img class="defospons" id="jerseyfa" alt="Jersey FA Affiliated Club" title="Jersey FA" src="https://teamwebsites.co.uk/images/jersey%20fa.png">

    

    <img class="defospons" id="kentfa" alt="Kent FA Affiliated Club" title="Kent FA" src="https://teamwebsites.co.uk/images/kent%20fa.jpg">

    

    <img class="defospons" id="lancashirefa" alt="Lancashire FA Affiliated Club" title="Lancashire FA" src="https://teamwebsites.co.uk/images/lancashire%20fa.jpg">

    

    <img class="defospons" id="leicestershirefa" alt="Leicestershire & Rutland FA Affiliated Club" title="Leicestershire & Rutland FA" src="https://teamwebsites.co.uk/images/leicestershire%20fa.gif">

    

    <img class="defospons" id="lincolnfa" alt="Lincolnshire FA Affiliated Club" title="Lincolnshire FA" src="https://teamwebsites.co.uk/images/lincolnshire%20fa.gif">

    

    <img class="defospons" id="liverpolfa" alt="Liverpool FA Affiliated Club" title="Liverpool FA" src="https://teamwebsites.co.uk/images/liverpool%20fa.gif">

    

    <img class="defospons" id="londonfa" alt="London FA Affiliated Club" title="London FA" src="https://teamwebsites.co.uk/images/london%20fa.jpg">

    

    <img class="defospons" id="manchesterfa" alt="Manchester FA Affiliated Club" title="Manchester FA" src="https://teamwebsites.co.uk/images/manchester%20fa.gif">

    

    <img class="defospons" id="middlesexfa" alt="Middlesex FA Affiliated Club" title="Middlesex FA" src="https://teamwebsites.co.uk/images/middlesex%20fa.gif">

    

    <img class="defospons" id="norfolkfa" alt="Norfolk FA Affiliated Club" title="Norfolk FA" src="https://teamwebsites.co.uk/images/norfolk%20fa.gif">

    

    <img class="defospons" id="northamptonshirefa" alt="Northamptonshire FA Affiliated Club" title="Northamptonshire FA" src="https://teamwebsites.co.uk/images/nottinghamshire%20fa.gif">

    

    <img class="defospons" id="northridingfa" alt="North Riding FA Affiliated Club" title="North Riding FA" src="https://teamwebsites.co.uk/images/north%20riding%20fa.gif">

    

    <img class="defospons" id="northumberlandfa" alt="Northumberland FA Affiliated Club" title="Northumberland FA" src="https://teamwebsites.co.uk/images/northumberland%20fa.gif">

    

    <img class="defospons" id="nottinghamshirefa" alt="Nottinghamshire FA Affiliated Club" title="Nottinghamshire FA" src="https://teamwebsites.co.uk/images/nottinghamshire%20fa.gif">

    

    <img class="defospons" id="oxfordfa" alt="Oxfordshire FA Affiliated Club" title="Oxfordshire FA" src="https://teamwebsites.co.uk/images/oxford%20fa.gif">

    

    <img class="defospons" id="raffa" alt="RAF FA Affiliated Club" title="RAF FA" src="https://teamwebsites.co.uk/images/raf%20fa.png">

    

    <img class="defospons" id="sheffieldfa" alt="Sheffield & Hallamshire FA Affiliated Club" title="Sheffield & Hallamshire FA" src="https://teamwebsites.co.uk/images/sheffield%20fa.gif">

    

    <img class="defospons" id="shropshirefa" alt="Shropshire FA Affiliated Club" title="Shropshire FA" src="https://teamwebsites.co.uk/images/shropshire%20fa.gif">

    

    

    <img class="defospons" id="somersetfa" alt="Somerset FA Affiliated Club" title="Somerset FA" src="https://teamwebsites.co.uk/images/somerset%20fa.png">

    

    <img class="defospons" id="stafffa" alt="Staffordshire FA Affiliated Club" title="Staffordshire FA" src="https://teamwebsites.co.uk/images/staffordshire%20fa.gif">

    

    <img class="defospons" id="suffolkfa" alt="Suffolk FA Affiliated Club" title="Suffolk FA" src="https://teamwebsites.co.uk/images/suffolk%20fa.gif">

    

    <img class="defospons" id="surreyfa" alt="Surrey FA Affiliated Club" title="Surrey FA" src="https://teamwebsites.co.uk/images/surrey%20fa.gif">

    

    <img class="defospons" id="sussexfa" alt="Sussex FA Affiliated Club" title="Sussex FA" src="https://teamwebsites.co.uk/images/sussex%20fa.gif">

    

    <img class="defospons" id="westmorlandfa" alt="Westmorland FA Affiliated Club" title="Westmorland FA" src="https://teamwebsites.co.uk/images/westmorland%20fa.png">

    

    <img class="defospons" id="westridingfa" alt="West Riding FA Affiliated Club" title="West Riding FA" src="https://teamwebsites.co.uk/images/west%20riding%20fa.gif">

    

    <img class="defospons" id="wiltsfa" alt="Wiltshire FA Affiliated Club" title="Wiltshire FA" src="https://teamwebsites.co.uk/images/wiltshire%20fa.gif">

    

    <img class="defospons" id="worcestershirefa" alt="Worcestershire FA Affiliated Club" title="Worcestershire FA" src="https://teamwebsites.co.uk/images/worcestershire%20fa.png">

    

    

    <?php $facharter = get_theme_mod('facharterstatus', 'none'); ?>

    

    <div <?php body_class($facharter); ?> style="width: auto; display: inline-block !important;">

    

    <img class="defospons" id="charterstandclub" alt="FA Charter Standard Club" title="FA Charter Standard Club" src="https://teamwebsites.co.uk/images/fa%20charter%20standard%20club.gif">

    

     <img class="defospons" id="charterstandadultclub" alt="FA Charter Standard Adult Club" title="FA Charter Standard Adult Club" src="https://teamwebsites.co.uk/images/fa%20charter%20standard%20adult%20club.png">

    

    <img class="defospons" id="charterdevclub" alt="FA Charter Standard Development Club" title="FA Charter Standard Development Club" src="https://teamwebsites.co.uk/images/fa%20charter%20standard%20community%20club.gif">

    

    <img class="defospons" id="chartercommunityclub" alt="FA Charter Standard Community Club" title="FA Charter Standard Community Club" src="https://teamwebsites.co.uk/images/fa%20charter%20standard%20community%20club.gif">

    

    </div>

  

  <img class="defospons" title="Charter Standard Club" alt="Charter Standard Club" src="https://teamwebsites.co.uk/charterStandardClubsOver.gif" id="charterstandard">

  

  <img class="defospons" title="Charter Standard Development Club" alt="Charter Standard Development Club" src="https://teamwebsites.co.uk/Charter%20Standard%20Development%20Club.jpg" id="charterdevclub">

  

  <img class="defospons" title="Charter Standard Community Club" alt="Charter Standard Community Club" src="https://teamwebsites.co.uk/communityclubfileOver%20(1).gif" id="chartercommunityclub">

 

    </div>

    

    

    

</div>

    

</div>                

    

</div>

</div>

    

<footer class="content-info">

<div class="container">

      

      

<div id="footer-m-margins">

    

<ul id="navthesite">



<div>

    

<h2>Site Map</h2>    

<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="">Home</a></li>
<li><a href="<?php echo site_url( '/' ); ?>latest-news">News</a></li>
<li><a href="<?php echo site_url( '/' ); ?>club">Club Information</a></li>
<li><a href="<?php echo site_url( '/' ); ?>club/contact">Contact</a></li>    
<?php
if ( is_user_logged_in() ) { ?>
<li><a href="<?php echo wp_logout_url( get_permalink() ); ?>">Log Out</a></li>
<?php } else { ?>
<li><a href="<?php echo site_url( '/' ); ?>login">Webmaster Login</a></li>
<?php } ?>    

</div>



</ul>          

          

          

<ul id="navthesite">

              

<div>



<h2>Get Social</h2>          



<?php if ( get_theme_mod( 'fb_pg_url' ) ) : ?>



<li><a href="<?php echo esc_url( get_theme_mod( 'fb_pg_url' ) ); ?>">Facebook</a></li>



<?php else : ?>



<?php endif; ?>



<?php if ( get_theme_mod( 'twitter_user_name' ) ) : ?>



<li><a href="https://twitter.com/<?php echo get_theme_mod( 'twitter_user_name' ); ?>">Twitter</a></li>



<?php else : ?>



<?php endif; ?>



<?php if ( get_theme_mod( 'instagram_user_name' ) ) : ?>



<li><a href="https://instagram.com/<?php echo get_theme_mod( 'instagram_user_name' ); ?>">Instagram</a></li>



<?php else : ?>



<?php endif; ?>

    

</div>



</ul> 





<ul class="getintouch">          



<div>

    

<h2>Get in touch</h2>          



<li class="club-location">



<p>



<span class="clubname-footer"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php bloginfo( 'name' ); ?><br/></span>

<?php if ( get_theme_mod( 'groundname' ) ) : ?><?php echo get_theme_mod( 'groundname' ); ?>  <br/><?php endif; ?>

<?php if ( get_theme_mod( 'groundroadname' ) ) : ?><?php echo get_theme_mod( 'groundroadname' ); ?> <?php else: ?> Road Name <?php endif; ?><br/>

<?php if ( get_theme_mod( 'primarytownlocation' ) ) : ?><?php echo get_theme_mod( 'primarytownlocation' ); ?> <?php else: ?> Town <?php endif; ?><br/>

<?php if ( get_theme_mod( 'primarypostcodeloc' ) ) : ?><?php echo get_theme_mod( 'primarypostcodeloc' ); ?> <?php else: ?> Postcode <?php endif; ?>

    

</p>   

    

<?php if ( get_theme_mod( 'clubtelephonenumber' ) ) : ?><p><?php echo get_theme_mod( 'clubtelephonenumber' ); ?></p> <?php endif; ?>



<p><a href="mailto:<?php bloginfo( 'admin_email' ); ?>"><?php bloginfo( 'admin_email' ); ?></a></p>    

    

</li>

    

</div>



</ul> 

    

</div>       

    

</div>    

    

</footer>    

    

    

    

    

  <div class="bottom-footer">

      

    <div class="container">

      

  

      

      

      <div id="footer-m-margins">

          

          

        <div class="footer-left">

      

      <p>© Copyright <?php bloginfo('name'); ?> <?php the_time('Y') ?>. Football Club Website provided by <a href="https://www.teamwebsites.co.uk/" target="_blank">Team Websites</a> &#8226; <a title="Privacy Policy for <?php bloginfo('name'); ?>'s website" href="https://www.teamwebsites.co.uk/privacy-policy/" target="_blank"> Privacy Policy</a></p>

      

      </div>

      

      

      <a href="https://www.teamwebsites.co.uk/" target="_blank">

          

    <div class="footer-right" style="background: #eee;">

      

      <div class="footer-credit">

          

        <img alt="Team Websites - Club Website powered by teamwebsites.co.uk" title="Proud website partner of <?php bloginfo('name'); ?>" src="https://templatesnew.teamwebsites.co.uk/wp-content/uploads/2017/08/09.png">  

          

      </div>

      

      </div>        

          

      </a>

          

      </div>

      

  </div>  

      

  </div>




<script src="https://www.gstatic.com/firebasejs/4.6.2/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCoOo_FC8eNBC1rHZXxuHjj8TTECg1tUo0",
    authDomain: "team-websites.firebaseapp.com",
    databaseURL: "https://team-websites.firebaseio.com",
    projectId: "team-websites",
    storageBucket: "team-websites.appspot.com",
    messagingSenderId: "629618733465"
  };
  firebase.initializeApp(config);
</script>