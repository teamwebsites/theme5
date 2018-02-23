<div class="poweredby">
<div class="container">
    
<div class="pbfloat left">
<a href="https://www.teamwebsites.co.uk/" target="_blank" title="Football Club Website powered by Team Websites - teamwebsites.co.uk">
<img src="https://www.teamwebsites.co.uk/wp-content/uploads/2017/08/blue-logo.png" height="33">    
</a>
<div class="twcredit headercredit">
<div>Powered by Team Websites</div>
<div class="login-logout">
<div class="clubwebsite_login">
<?php
if ( is_user_logged_in() ) { ?>  <a href="<?php echo wp_logout_url( get_permalink() ); ?>">Logout</a> <?php } else { ?> <a href="<?php echo wp_login_url( get_permalink() ); ?>">Login</a> <?php } ?>
</div>

<div class="teamwebsites-social_links">
<a class="twsociallink" href="https://www.facebook.com/teamwebsites/" target="_blank"> <div class="twheader-si" id="fbhi"><i class="fa fa-facebook" aria-hidden="true"></i> </div> </a>
<a class="twsociallink" href="https://www.twitter.com/myteamwebsite/" target="_blank"> <div class="twheader-si" id="twhi"><i class="fa fa-twitter" aria-hidden="true"></i> </div> </a>
</div>
</div>
</div>
</div>

<div class="pbfloat right">
<div class="twcredit headercredit">In association with <span>Grassroots Football</span></div>    
<img src="https://www.teamwebsites.co.uk/wp-content/uploads/2018/02/grassrootsfootball.png" height="43">    
</div>  
</div>  
</div>

<?php custom_breadcrumbs(); ?>


<div id="headerquicklinks">
<div class="container">
<ul>
<?php if ( get_theme_mod( 'club_nickname' ) ) : ?> <li><a href="">Online Shop</a></li> <?php endif; ?>
<?php if ( get_theme_mod( 'fb_pg_url' ) ) : ?> <li> <a href="<?php echo esc_url( get_theme_mod( 'fb_pg_url' ) ); ?>" title="Like us on Facebook" target="_blank"> Facebook </a> </li> <?php endif; ?>
 <?php if ( get_theme_mod( 'twitter_user_name' ) ) : ?> <li> <a href="https://twitter.com/<?php echo get_theme_mod( 'twitter_user_name' ); ?>" title="Follow us on Twitter" target="_blank"> Twitter </a> </li> <?php endif; ?>
<?php if ( get_theme_mod( 'instagram_user_name' ) ) : ?> <li> <a href="https://www.instagram.com/<?php echo get_theme_mod( 'instagram_user_name' ); ?>" target="_blank"> Instagram </a> </li> <?php endif; ?>
<li>

<script>jQuery(document).ready(function($) {
 $(".search-field").focus(function(){
   $(this).parent().removeClass("round");
   $(this).parent().addClass("bluebg");
  }).blur(function(){
       $(this).parent().removeClass("bluebg");
   $(this).parent().addClass("round");
  })
});
</script>

<form role="search" method="get" class="srch" action="<?php echo site_url('/'); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    
    <input type="submit" class="search-submit"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
    </label>    
</form>    
<span style="display: none;">Search <i class="fa fa-search"></i></span></li>
</ul>       
</div> 
</div>

<header class="banner header" role="banner">

<div class="container outerheadercontainer" style="width: 100%;">

<div id="adjustslightly" style="overflow: hidden;">

<div id="bannerright"></div>      
    
<div class="container" style="padding: 13px 0px;">

<div class="header-left">
    
<a class="headerlogo" href="<?php echo site_url(); ?>" rel="bookmark" title="<?php bloginfo('name'); ?> - Official Club Website">    

<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
if ( has_custom_logo() ) {
echo '<img id="logo" src="'. esc_url( $logo[0] ) .'">';
} else {
echo '';
} ?>

</a>

<div class="headerblock">
<h1> <a id="bloginfosec" rel="bookmark" href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?> - Official Club Website"> <span><?php bloginfo('name'); ?></span> </a> <?php get_template_part( 'siteverification' ); ?></h1>
<h2><a id="bloginfosec" rel="bookmark" href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?> - Official Club Website"> <?php echo get_theme_mod( 'club_nickname' ); ?> </a> </h2>
</div>
</a>

</div>

<div class="header-right">

<a href="https://www.facebook.com/teamwebsites/" class="social-icon" id="facebook"></a>
<a href="https://www.twitter.com/myteamwebsite/" class="social-icon" id="twitter"></a>
<img src="https://teamwebsites.co.uk/images/fa%20charter%20standard%20club.gif" id="affiliationheaderpic" height="45" alt="Nothing to see here!">

</div>

</div>        
    
</div>



<nav id="site-navigation" class="newmenu nav-primary fullwidthnav main-navigation" role="navigation">

<div class="container">

<nav id="site-navigation" class="main-navigation mobilemenu-1" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">

<div class="dropdown3 mobile-menu">

<button onclick="myFunction('Demo1')" class="w3-btn w3-block w3-black w3-left-align">Menu <i class="fa fa-bars" aria-hidden="true"></i></button>

<div id="Demo1" class="w3-container w3-hide">

<?php
wp_nav_menu( array(
'theme_location' => 'primary',
'menu_class'     => 'primary-menu',
) );
?>

</div>

</div>

</nav><!-- .main-navigation -->            


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction3() {
    document.getElementById("myDropdown3").classList.toggle("with4");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn3')) {
    var dropdowns = document.getElementsByClassName("dropdown-content3");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('with4')) {
        openDropdown.classList.remove('with4');
      }
    }
  }
}
</script>

<div id="desktop-menu">
<?php
if (has_nav_menu('primary')) :
wp_nav_menu(['theme_location' => 'primary', 'menu_class' => 'nav']);
endif;
?>  
</div>

</div>

</nav>    
    
</div>

</header>




<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction3() {
    document.getElementById("myDropdown3").classList.toggle("with4");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn3')) {
    var dropdowns = document.getElementsByClassName("dropdown-content3");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('with4')) {
        openDropdown.classList.remove('with4');
      }
    }
  }
}
</script>
