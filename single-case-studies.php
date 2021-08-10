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
        <div class="staggered">
          <h1><?php echo the_field('case_study_archive_page_title'); ?></h1>
        </div>
        <div class="staggered">
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
        <div>
          <p class="image-caption"><?php echo $csIntro['image_caption']; ?></p>
        </div>

        <div class="cs-cats__wrapper">
          <?php
              $parentArgs = array(
                'orderby' => 'name',
                'order' => 'DSC',
                'parent'   => 0,
                'hide_empty' => 0,
                'exclude' => array(1)
              );

              $parentCats = wp_get_post_terms($post->ID, 'category', $parentArgs);

              ?>

          <ul>
            <?php foreach ($parentCats as $parent) : ?>
            <li class="parent-cat">
              <?php echo $parent->name; ?>
              <ul>
                <?php
                      $subCatArgs =
                        array(
                          'child_of' => $parent->term_id,
                          'order' => 'ASC',
                          'hide_empty' => false
                        );

                      $subCategories = wp_get_post_terms($post->ID, 'category', $subCatArgs);

                      foreach ($subCategories as $subCat) : ?>

                <li>
                  <?php echo $subCat->name; ?>
                  </a>
                </li>
                <?php endforeach; ?>
              </ul>
            </li>
            <?php endforeach; ?>
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

            elseif (get_row_layout() == 'case_study_carousel') :

              get_template_part('template-parts/case', 'study-carousel');

            elseif (get_row_layout() == 'right_aligned_text') :

              get_template_part('template-parts/case', 'study-right-text');

            elseif (get_row_layout() == 'left_aligned_text') :

              get_template_part('template-parts/case', 'study-left-text');

            elseif (get_row_layout() == 'single_column_text') :

              get_template_part('template-parts/case', 'study-single-text-col');

            elseif (get_row_layout() == 'left_aligned_image_and_text') :

              get_template_part('template-parts/case', 'study-left-aligned-image-text');

            elseif (get_row_layout() == 'image_and_text_right') :

              get_template_part('template-parts/case', 'study-right-aligned-image-text');

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