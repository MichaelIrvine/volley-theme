<?php

/**
 * Template Name: How We Work
 *
 *
 * 
 *
 * @package Volley
 */

get_header();
?>

<main id="primary" class="site-main">
  <?php if (have_rows('how_we_work_content')) : $i = 0; ?>

  <div class="content__wrapper">

    <?php while (have_rows('how_we_work_content')) : the_row();
        $i++; ?>
    <div class="grid__wrapper row-<?php echo $i; ?> staggered-scroll">

      <div>
        <?php the_sub_field('how_we_work_text'); ?>
      </div>
      <div>
        <?php
            $hwwImage = get_sub_field('how_we_work_image');
            if (!empty($hwwImage)) : ?>
        <img style="min-height: <?php echo $hwwImage['height']; ?>" height="<?php echo $hwwImage['height']; ?>"
          width="<?php echo $hwwImage['width']; ?>" src="<?php echo esc_url($hwwImage['url']); ?>"
          alt="<?php echo esc_attr($hwwImage['alt']); ?>" />
        <?php endif; ?>
      </div>

    </div>
    <?php endwhile; ?>
  </div>
  <?php endif; ?>
</main>

<?php
get_footer();