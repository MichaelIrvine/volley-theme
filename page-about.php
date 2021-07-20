<?php

/**
 * Template Name: About Us
 *
 *
 * 
 *
 * @package Volley
 */

get_header();
?>

<main id="primary" class="site-main">
  <section id="aboutHero">
    <div class="content__wrapper">
      <?php
      $aboutHero = get_field('about_page_hero');
      $preloadImage = $aboutHero['sizes']['preload'];

      if (!empty($aboutHero)) : ?>
      <img style="max-height: <?php echo $aboutHero['height']; ?>px; min-height: <?php echo $aboutHero['height']; ?>px"
        height="<?php echo $aboutHero['height']; ?>px" src="<?php echo esc_url($preloadImage); ?>"
        data-src="<?php echo esc_url($aboutHero['url']); ?>" class="lazy"
        alt="<?php echo esc_attr($aboutHero['alt']); ?>" />
      <?php endif; ?>
    </div>
  </section>

  <?php
  $contact = get_field('contact_info');
  if ($contact) :
  ?>
  <section id=aboutContactDetails>

    <div class="grid__wrapper">
      <div class="grid__wrapper">
        <div>
          <!-- spacer -->
        </div>
        <div>
          <h2><?php echo $contact['contact_section_title']; ?> </h2>
        </div>
      </div>
      <div>
        <!-- spacer -->
      </div>
    </div>
    <div class="grid__wrapper">
      <div class="grid__wrapper">
        <div><?php echo $contact['contact_info']; ?></div>
        <div><?php echo $contact['contact_info_copy']; ?></div>
      </div>
      <div><?php echo  $contact['contact_form']; ?></div>
    </div>
  </section>
  <?php endif; ?>
</main>
<section id="aboutTeam">
  <div class="grid__wrapper">
    <div>
      <h3>People</h3>
    </div>
    <div>
      <!-- team repeater -->
    </div>
  </div>
</section>
<section id="aboutClientList">
  <div class="grid__wrapper">
    <div>
      <h3>People</h3>
    </div>
    <div>
      <!-- team repeater -->
    </div>
  </div>
</section>

<?php
get_footer();