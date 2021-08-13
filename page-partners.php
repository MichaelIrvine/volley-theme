<?php

/**
 * Template Name: Partners
 *
 *
 * 
 *
 * @package Volley
 */

get_header();
?>

<main id="primary" class="site-main">
  <div class="jump-link--partner" id="ari"></div>
  <div class="jump-link--partner" id="third-turn"></div>
  <section id="partnerPageHero">
    <?php
    $partnerOne = get_field('partner_one_group');
    $partnerTwo = get_field('partner_two_group');

    // Partner Images & lazy images
    $imageOne = $partnerOne['partner_image'];
    $preloadImageOne = $imageOne['sizes']['preloadFull'];
    $imageTwo = $partnerTwo['partner_image'];
    $preloadImageTwo = $imageTwo['sizes']['preloadFull'];

    // Partner Branding
    $partnerBrandOne = $partnerOne['partner_branding'];
    $partnerBrandTwo = $partnerTwo['partner_branding'];

    // Partner Details
    $partnerDetailsOne = $partnerOne['partner_details'];
    $partnerDetailsTwo = $partnerTwo['partner_details'];


    if (!empty($imageOne)) : ?>
    <div class="partner-one__image">
      <img style="min-height: <?php echo $imageOne['height']; ?>px" height="<?php echo $imageOne['height']; ?>px"
        src="<?php echo esc_url($preloadImageOne); ?>" data-src="<?php echo esc_url($imageOne['url']); ?>" class="lazy"
        alt="<?php echo esc_attr($imageOne['alt']); ?>" />
    </div>
    <?php endif; ?>

    <?php if (!empty($imageTwo)) : ?>
    <div class="partner-two__image">
      <img style="min-height: <?php echo $imageTwo['height']; ?>px" height="<?php echo $imageTwo['height']; ?>px"
        src="<?php echo esc_url($preloadImageTwo); ?>" data-src="<?php echo esc_url($imageTwo['url']); ?>" class="lazy"
        alt="<?php echo esc_attr($imageTwo['alt']); ?>" />
    </div>
    <?php endif; ?>
  </section>

  <section id="partnerInfo">
    <div class="grid__wrapper">
      <!-- Partner One Branding & Details -->
      <?php if (!empty($partnerDetailsOne)) : ?>
      <div class="flex__wrapper column partner-details__wrapper partner-one__info__wrapper cursor-hover">
        <?php if (!empty($partnerBrandOne)) : ?>
        <div class="partner-branding">
          <img src="<?php echo esc_url($partnerBrandOne['url']); ?>"
            alt="<?php echo esc_attr($partnerBrandOne['alt']); ?>" />
        </div>
        <?php endif; ?>
        <div class="partner-details link-with-arrow">
          <?php echo $partnerDetailsOne; ?>

          <img width="<?php echo $imageOne['width']; ?>" height="<?php echo $imageOne['height']; ?>"
            src="<?php echo esc_url($preloadImageOne); ?>" data-src="<?php echo esc_url($imageOne['url']); ?>"
            class="lazy partner-image--mobile" alt="<?php echo esc_attr($imageOne['alt']); ?>" />
        </div>
      </div>
      <?php endif ?>
      <!-- Partner Two Branding & Details -->
      <?php if (!empty($partnerDetailsTwo)) : ?>
      <div class="flex__wrapper column partner-details__wrapper partner-two__info__wrapper cursor-hover">
        <?php if (!empty($partnerBrandTwo)) : ?>
        <div class="partner-branding">
          <img src="<?php echo esc_url($partnerBrandTwo['url']); ?>"
            alt="<?php echo esc_attr($partnerBrandTwo['alt']); ?>" />
        </div>
        <?php endif; ?>
        <div class="partner-details link-with-arrow">
          <?php echo $partnerDetailsTwo; ?>

          <img width="<?php echo $imageTwo['width']; ?>" height="<?php echo $imageTwo['height']; ?>"
            src="<?php echo esc_url($preloadImageTwo); ?>" data-src="<?php echo esc_url($imageTwo['url']); ?>"
            class="lazy partner-image--mobile" alt="<?php echo esc_attr($imageTwo['alt']); ?>" />
        </div>
      </div>
      <?php endif ?>

    </div>

  </section>






</main>

<?php
get_footer();