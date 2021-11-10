<?php

/**
 * 
 * Case Studies Archive Template
 *
 * @package Volley
 */

get_header();
?>

<main id="primary" class="site-main">
  <div class="content__wrapper max-w--large">
    <div class="grid__wrapper">
      <div>
        <h2 class="staggered">Case Studies</h2>
      </div>
      <?php
      $args = array(
        'post_type' => 'case-studies',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'order' => 'ASC',
      );


      $the_query = new WP_Query($args); ?>

      <div class="grid__wrapper">

        <?php while ($the_query->have_posts()) : $the_query->the_post();

          $postThumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
          // get width from postThumbnail array
          $thumbWidth = $postThumbnail[1];
          // get height from postThumbnail array
          $thumbHeight = $postThumbnail[2];
          $csSecondImage = get_field('case_study_archive_image');
        ?>

        <?php

          if ($thumbWidth < $thumbHeight) : ?>

        <div class="case-study-item__wrapper">

          <?php if (!empty($csSecondImage)) : ?>
          <div class="image__wrapper aspect-portrait staggered">
            <a href="<?php echo the_permalink(); ?>">
              <img src="<?php echo esc_url($csSecondImage['url']); ?>" alt="<?php echo the_title(); ?>">
              <img src="<?php echo get_the_post_thumbnail_url('', 'full'); ?>" alt="">
            </a>
          </div>

          <?php else : ?>

          <div class="image__wrapper aspect-portrait staggered">
            <a href="<?php echo the_permalink(); ?>">
              <img src="<?php echo get_the_post_thumbnail_url('', 'full'); ?>" alt="">
            </a>
          </div>

          <?php endif; ?>

          <div class="flex__wrapper staggered">
            <h2><?php echo the_field('case_study_archive_page_title'); ?></h2>
            <p><?php echo the_title(); ?></p>
          </div>
        </div>

        <?php

          else : ?>

        <div class="case-study-item__wrapper">

          <?php if (!empty($csSecondImage)) : ?>
          <div class="image__wrapper aspect-landscape staggered">
            <a href="<?php echo the_permalink(); ?>">
              <img src="<?php echo esc_url($csSecondImage['url']); ?>" alt="<?php echo the_title(); ?>">
              <img src="<?php echo get_the_post_thumbnail_url('', 'full'); ?>" alt="">
            </a>
          </div>

          <?php else : ?>

          <div class="image__wrapper aspect-landscape staggered">
            <a href="<?php echo the_permalink(); ?>">
              <img src="<?php echo get_the_post_thumbnail_url('', 'full'); ?>" alt="">
            </a>
          </div>

          <?php endif; ?>

          <div class="flex__wrapper staggered">
            <h2><?php echo the_field('case_study_archive_page_title'); ?></h2>
            <p><?php echo the_title(); ?></p>
          </div>
        </div>


        <? endif; ?>

        <?php endwhile;
        wp_reset_postdata(); ?>

      </div>
    </div>
  </div>
</main>

<?php
get_footer();