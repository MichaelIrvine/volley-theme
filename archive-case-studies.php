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
  <div class="grid__wrapper">
    <div>
      <h2>Case Studies</h2>
    </div>
    <?php
    $args = array(
      'post_type' => 'case-studies',
      'posts_per_page' => -1,
      'post_status' => 'publish',
      'order' => 'DSC',
    );


    $the_query = new WP_Query($args); ?>

    <div class="grid__wrapper">

      <?php while ($the_query->have_posts()) : $the_query->the_post();

        $csSecondImage = get_field('case_study_archive_image');

      ?>

      <div class="case-study-item__wrapper staggered">

        <?php if (!empty($csSecondImage)) : ?>
        <div class="image__wrapper" style="height:<?php echo $csSecondImage['height']; ?>px">
          <a href="<?php echo the_permalink(); ?>">
            <img src="<?php echo esc_url($csSecondImage['url']); ?>" alt="<?php echo the_title(); ?>">
            <img src="<?php echo get_the_post_thumbnail_url('', 'full'); ?>" alt="">
          </a>
        </div>

        <?php else : ?>

        <div>
          <a href="<?php echo the_permalink(); ?>">
            <img src="<?php echo get_the_post_thumbnail_url('', 'full'); ?>" alt="">
          </a>
        </div>

        <?php endif; ?>

        <div class="flex__wrapper">
          <h2><?php echo the_field('case_study_archive_page_title'); ?></h2>
          <p><?php echo the_title(); ?></p>
        </div>
      </div>

      <?php endwhile;
      wp_reset_postdata(); ?>

    </div>
  </div>

</main>

<?php
get_footer();