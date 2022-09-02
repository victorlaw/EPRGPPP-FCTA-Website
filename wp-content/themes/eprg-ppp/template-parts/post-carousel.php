<?php
/**
 * Post Carousel
 * 
 * @package EPRG-PPP
 */

?>

<!--Carousel Wrapper-->

<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide">
      <img src="<?php echo get_template_directory_uri();?>/img/img1.webp" alt="" class="img-fluid">
      <div class="caption">
        <h1 class="caption-header"><?php the_title();?></h1>
        <p class="caption-text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, minima. Consectetur molestiae quos maxime ullam tempore porro recusandae odio enim aliquid? Sed ea sequi deserunt?
        </p>

        <a href="#" class="link-text">Continue Reading...</a>
      </div>

    </div>
   
  
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>


</div>
  <!--/.Carousel Wrapper-->