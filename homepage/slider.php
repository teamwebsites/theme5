<!-- Swiper -->

<div style="width: calc(100% - 65px); padding: 0px !important; margin: auto !important; position: relative;">
    
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

<?php 
// the query

$args = array(
    'posts_per_page'         => '8',
	'post_type' => array( 'post', 'wpcm_match' )
);
$newsscroller = new WP_Query( $args ); ?>
 
<?php if ( $newsscroller->have_posts() ) : ?>

  <div class="swiper-container s1main">
    <div class="swiper-wrapper">
      
<!-- the loop -->      
<?php while ( $newsscroller->have_posts() ) : $newsscroller->the_post(); ?>

<a href="<?php the_permalink(); ?>" class="swiper-slide" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">

<div>
<?php if ( has_post_thumbnail() ) : ?>

<section style="background: url(<?php the_post_thumbnail_url('medium'); ?>);">
</section>  

<?php else: ?>

<section style="background: url(https://teamwebsites.co.uk/images/field.jpg);">
</section> 

<?php endif; ?>
        
<div id="sliderlabel">
<h2><?php the_title(); ?></h2>    
</div>
        
</div>    
    
</a>

<?php endwhile; ?>
<!-- end of the loop -->
        
<?php wp_reset_postdata(); ?>
        
</div>

<!-- Add Pagination -->
<div class="swiper-pagination"></div>
    
</div>

 
<?php else : ?>
<p><?php _e( 'Sorry, no articles matched your criteria.' ); ?></p>
<?php endif; ?>    
    
</div>