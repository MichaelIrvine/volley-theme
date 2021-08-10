<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EQ
 */

?>

<footer id="volley-footer" class="site-footer">
  <div class="f-col">
    <?php
    if (is_active_sidebar('header-branding')) :
      dynamic_sidebar('footer-branding');
    endif; ?>

    <div class="content__wrapper">
      <div class="inner__wrapper">

        <?php
        if (is_active_sidebar('footer-copyright')) : ?>
        <span>
          <?php dynamic_sidebar('footer-copyright'); ?>
        </span>
        <?php else : ?>

        <p>
          &copy;<?php echo date("Y"); ?> Volley
        </p>

        <?php endif; ?>
        <a href="/">Credit</a>
      </div>
      <?php
      if (is_active_sidebar('footer-menu')) : ?>
      <div>
        <?php dynamic_sidebar('footer-menu'); ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
  <!-- logo slider -->
  <?php
  if (have_rows('footer_slider', 'option')) : ?>
  <div class="f-col">
    <div id="footer-slider">
      <?php
        while (have_rows('footer_slider', 'option')) : the_row(); ?>

      <?php
          // Case: Column layout.
          if (get_row_layout() == 'column_layout') :
            $colImage = get_sub_field('image_col_layout');
            $colText = get_sub_field('content_col_layout');
            // Column Layout Image and Text
          ?>

      <div class="col-layout__wrapper">
        <div>
          <a href="/partners">
            <img src="<?php echo esc_url($colImage['url']); ?>" alt="<?php echo esc_attr($colImage['alt']); ?>">
          </a>
        </div>
        <div>
          <?php echo $colText; ?>
        </div>
      </div>
      <?php
          // Case: Row layout.
          elseif (get_row_layout() == 'row_layout') :
            $rowImage = get_sub_field('image_row_layout');
            $rowText = get_sub_field('content_row_layout');
            // Row Layout Image and Text
          ?>

      <div class="row-layout__wrapper">
        <div>
          <a href="/partners">
            <img src="<?php echo esc_url($rowImage['url']); ?>" alt="<?php echo esc_attr($rowImage['alt']); ?>">
          </a>
        </div>
        <div>
          <?php echo $rowText; ?>
        </div>
      </div>
    </div>
  </div>
  <?php
          endif;
        endwhile;
      endif;
?>
  <!-- back to top -->
  <div class="f-col">
    <button id="backToTop">
      Back to Top
    </button>
  </div>

</footer>
</div>

<!-- Jquery for Slick -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- GSAP CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
<!-- Slick Slider CDN -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<?php wp_footer(); ?>

</body>

</html>