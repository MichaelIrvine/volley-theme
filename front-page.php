<?php

/**
 * Template Name: Front Page
 *
 *
 * 
 *
 * @package Volley
 */

get_header();
?>

<main id="primary" class="site-main">
  <section id="fpHeading">
    <div class="content__wrapper staggered">
      <?php
      $fpHeading = get_field('front_page_heading');
      if ($fpHeading) :
        echo $fpHeading;
      endif; ?>
    </div>
  </section>
  <section id="fpCaseStudies">
    <?php
    if (have_rows('front_page_case_studies')) :
      while (have_rows('front_page_case_studies')) : the_row();

        if (get_row_layout() == 'case_study_single_image') :

          get_template_part('template-parts/fp', 'case-one-column');

        elseif (get_row_layout() == 'case_study_two_images') :

          get_template_part('template-parts/fp', 'case-two-column');

        endif;

      endwhile;
    endif;
    ?>

  </section>
  <section id="latestProject">
    <div class="grid__wrapper">
      <div>
        <h2>Latest Projects</h2>
      </div>
      <div><a href="<?php echo home_url('case-studies');  ?>">See More</a></div>
    </div>

    <div class="content__wrapper">
      <?php
      $featured_projects = get_field('front_page_latest_projects');
      if ($featured_projects) : ?>
      <ul class="grid__wrapper">
        <?php foreach ($featured_projects as $post) :

            setup_postdata($post); ?>
        <li>
          <a href="<?php the_permalink(); ?>">
            <div class="aspect-ratio__wrapper __5x8">
              <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'full') ?>" alt="<?php the_title(); ?>">
            </div>
            <span class="small-text"><?php the_title(); ?></span>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>
      <?php

        wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </section>

  <section id="companyInfo" class="has-hidden-images">
    <div class="grid__wrapper">
      <div></div>
      <div class="content__wrapper">
        <div><?php echo the_field('front_page_contact'); ?></div>
        <div class="hidden-image-carousel__wrapper wysiwyg__reset">
          <?php echo the_field('first_heading'); ?>
          <?php

          $images = get_field('hidden_images_gallery_1');

          if ($images) : ?>
          <div class="hidden-images__carousel">
            <ul id="hidden-images-1-carousel" class="carousel">
              <?php foreach ($images as $image) : ?>
              <li>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="content__wrapper">
      <div class="hidden-image-carousel__wrapper wysiwyg__reset">
        <?php echo the_field('second_heading'); ?>
        <?php

        $images = get_field('hidden_images_gallery_2');

        if ($images) : ?>
        <div class="hidden-images__carousel">
          <ul id="hidden-images-2-carousel" class="carousel">
            <?php foreach ($images as $image) : ?>
            <li>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section id="latestNews">

    <div class="grid__wrapper">
      <?php
      $featured_news = get_field('front_page_news');
      if ($featured_news) : ?>

      <!-- grid spacer -->
      <div></div>
      <div>
        <p>News</p>
        <ul>
          <?php foreach ($featured_news as $post) :

              setup_postdata($post);

              $post_date = get_the_date("m.d.y", $featured_post->ID);
            ?>

          <li>
            <p class="post-date"><?php echo esc_html($post_date); ?></p>
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>

          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php

        wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </section>


</main>

<?php
get_footer();