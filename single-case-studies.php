<?php

/**
 * The template for each Case Study
 *
 *
 * @package Volley
 */

get_header();
?>

<main id="primary" class="site-main">

  <?php
  while (have_posts()) :
    the_post(); ?>

  <?php

    $heroImage = get_field('case_study_hero_image');
    $preloadImage = $heroImage['sizes']['preload'];

    if (!empty($heroImage)) :
    ?>
  <section id="case-study-hero">
    <img src="<?php echo esc_url($preloadImage); ?>" data-src="<?php echo esc_url($heroImage['url']); ?>"
      class="lazy hero--full" alt="" />

    <div class="grid__wrapper">
      <!-- Spacer -->
      <div></div>
      <!--  -->
      <div class="grid__wrapper">
        <div>
          <h1><?php echo the_field('case_study_archive_page_title'); ?></h1>
        </div>
        <div>
          <p>Example Case:</p>
          <p><?php echo the_title(); ?></p>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <?php
    $csIntro = get_field('cs_intro_group');

    if ($csIntro) : ?>
  <section id="case-study-intro" class="grid__wrapper">
    <div>
      <?php if (!empty($csIntro['intro_image'])) :
            echo wp_get_attachment_image($csIntro['intro_image'], 'full');
          endif; ?>
    </div>
    <div class="flex__wrapper column">
      <div>
        <?php echo $csIntro['intro_copy']; ?>
      </div>
      <div class="grid__wrapper">
        <div class="image-caption">
          <p><?php echo $csIntro['image_caption']; ?></p>
        </div>

        <div class="cs-cats__wrapper">
          <ul>
            <li>Parent
              <ul>
                <li>Sub Cat</li>
              </ul>
            </li>
          </ul>
          <ul>
            <li>Parent
              <ul>
                <li>Sub Cat</li>
              </ul>
            </li>
          </ul>
          <ul>
            <li>Parent
              <ul>
                <li>Sub Cat</li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section>
  <section id="case-study-content">
    <?php
        if (have_rows('case_study_content')) :
          while (have_rows('case_study_content')) : the_row();

            if (get_row_layout() == 'full_width_image') :

              get_template_part('template-parts/case', 'study-full-image');

            elseif (get_row_layout() == 'two_column_images') :

              get_template_part('template-parts/case', 'study-two-col-image');

            elseif (get_row_layout() == 'right_aligned_text') :

              get_template_part('template-parts/case', 'study-right-text');

            elseif (get_row_layout() == 'left_aligned_text') :

              get_template_part('template-parts/case', 'study-left-text');

            endif;

          endwhile;
        endif;
        ?>
  </section>

  <?php
    endif;
  endwhile;
  ?>

</main>

<?php
get_footer();