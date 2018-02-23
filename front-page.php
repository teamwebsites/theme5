
<style> .swiper-container {
      width: 100%;
      height: 100%;
    }
    #sliderlabel h2 {font-size: 14.5px; line-height: 165%;} #sliderlabel {padding: 3px 14.5px;}
    .swiper-pagination {position: relative !important; display: block !important; clear: both; float: none; margin: 8px 0px;}
    .swiper-slide {
        flex-wrap: wrap;
      text-align: left;
      font-size: 18px;
      margin-left: 0px !important;
      margin-right: 10px !important;
      /* Center slide text vertically */
      -webkit-box-pack: center;
      -ms-flex-pack: center;
    }
    
    .swiper-button-next {right: -29px;} .swiper-button-prev {left: -29px;} .swiper-button-next, .swiper-button-prev {background-size: 100%; background-position: center; width: 15px !important;}
    </style>






<br/>




<style>


/* external css: flickity.css */

/* external css: flickity.css */

* { box-sizing: border-box; }

body { font-family: sans-serif; }


.flickity-page-dots .dot {height: 5px !important; width: 25% !important; border-radius: 0px !important; margin: 0px !important;}
.flickity-page-dots {bottom: 0px !important; display: block; clear: both; position: relative; line-height: 0px !important; margin: 0px !important; padding: 0px !important;}

/* cell number */
.carousel-cell:before {
  display: block;
  text-align: center;
  line-height: 200px;
  font-size: 80px;
  color: white;
}

.carousel {
  background: #FAFAFA;
  width: 50% !important; /* fixed gallery width */
}

.flickity-enabled.is-draggable .flickity-viewport {margin: auto !important; width: calc(90% - 100px) !important;}

.carousel-cell {
  width: 25% !important;
  height: 200px;
  margin-right: 10px !important;
  background: #8C8;
  border-radius: 5px;
  counter-increment: carousel-cell;
}

</style>


<?php
if ( is_user_logged_in() ) {
  get_template_part('easieradminlinks');
} else {
    
}
?> 

<?php get_template_part( 'bottom', 'homepage' ); ?>