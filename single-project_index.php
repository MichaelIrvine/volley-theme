<?php

/**
 * The template for each Project Index
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

    $heroImage = get_field('project_index_hero_image');
    $preloadImage = $heroImage['sizes']['preload'];
    $darkText = get_field('dark_text_color');

    if (!empty($heroImage)) :
    ?>
  <div class="content__wrapper max-w--large">
    <div id="single-hero">
      <img src="<?php echo esc_url($preloadImage); ?>" data-src="<?php echo esc_url($heroImage['url']); ?>"
        class="lazy hero--full" alt="<?php echo $heroImage['alt']; ?>" />

      <div class="grid__wrapper">
        <!-- Spacer -->
        <div></div>
        <!--  -->
        <div class="grid__wrapper single__heading__wrapper <?php if ($darkText) : ?>dark-text<?php endif; ?>">
          <div class="staggered">
            <h1><?php echo the_title(); ?></h1>
          </div>
          <div class="staggered">
            <p>Client:</p>
            <?php
                $indexClients = get_field('project_index_client');
                if ($indexClients) {
                  foreach ($indexClients as $indexClient) {
                    $clientName = $indexClient['client_name']; ?>
            <p><?php echo $clientName; ?></p>
            <?php
                  }
                }
                ?>
          </div>
        </div>

      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php
    $piIntro = get_field('pi_intro_group');

    if ($piIntro) : ?>

  <div class="content__wrapper max-w--large">
    <div id="single-intro" class="grid__wrapper">
      <div>
        <?php if (!empty($piIntro['intro_image'])) :
              echo wp_get_attachment_image($piIntro['intro_image'], 'full');
            endif; ?>
      </div>
      <div class="flex__wrapper column">
        <div>
          <?php echo $piIntro['intro_copy']; ?>
        </div>
        <div class="grid__wrapper">
          <div>
            <p class="image-caption"><?php echo $piIntro['image_caption']; ?></p>
          </div>
          <div class="single-cats__wrapper">
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
    </div>
  </div>


  <div class="hr"></div>

  <div class="content__wrapper max-w--large">

    <div id="single-content">
      <?php
          if (have_rows('project_index_content')) :
            while (have_rows('project_index_content')) : the_row();

              if (get_row_layout() == 'full_width_image') :

                get_template_part('template-parts/project', 'index-full-image');

              elseif (get_row_layout() == 'two_column_images') :

                get_template_part('template-parts/project', 'index-two-col-image');

              elseif (get_row_layout() == 'project_index_carousel') :

                get_template_part('template-parts/project', 'index-carousel');

              elseif (get_row_layout() == 'right_aligned_text') :

                get_template_part('template-parts/project', 'index-right-text');

              elseif (get_row_layout() == 'left_aligned_text') :

                get_template_part('template-parts/project', 'index-left-text');

              elseif (get_row_layout() == 'single_column_text') :

                get_template_part('template-parts/project', 'index-single-text-col');

              elseif (get_row_layout() == 'left_aligned_image_and_text') :

                get_template_part('template-parts/project', 'index-left-aligned-image-text');

              elseif (get_row_layout() == 'left_aligned_image_and_text_qWidth') :

                get_template_part('template-parts/project', 'index-left-aligned-image-text-quarter');

              elseif (get_row_layout() == 'image_and_text_right') :

                get_template_part('template-parts/project', 'index-right-aligned-image-text');

              elseif (get_row_layout() == 'image_and_text_right_qWidth') :

                get_template_part('template-parts/project', 'index-right-aligned-image-text-quarter');

              endif;

            endwhile;
          endif;
          ?>
    </div>

  </div>

  <?php
    endif;
  endwhile;
  ?>

</main>

<?php
get_footer();