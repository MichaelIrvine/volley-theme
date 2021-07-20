<?php

/**
 * Template Name: Our Services
 *
 *
 * 
 *
 * @package Volley
 */

get_header();
?>

<main id="primary" class="site-main">
  <?php
  if (have_rows('services_page_columns')) :
    while (have_rows('services_page_columns')) : the_row();

      $rowCounter = get_row_index();

      if (get_row_layout() == 'single_image_layout') :

        if ($rowCounter % 2 != 0) :

          get_template_part('template-parts/services', 'single-image-left');

        else :

          get_template_part('template-parts/services', 'single-image-right');

        endif;

      elseif (get_row_layout() == 'multi_image_layout') :

        if ($rowCounter % 2 == 0) :

          get_template_part('template-parts/services', 'multi-image-right');

        else :

          get_template_part('template-parts/services', 'multi-image-left');

        endif;

      endif;

    endwhile;
  endif;
  ?>
</main>

<?php
get_footer();