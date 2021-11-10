<?php

$csTitle = get_sub_field('case_study_title');
$csSubTitle = get_sub_field('case_study_sub_title');
$csDetails = get_sub_field('case_study_details');
$csImage = get_sub_field('case_study_image');
$csLink = get_sub_field('case_study_link');
$preloadImage = $csImage['sizes']['preload'];
?>


<div class="cs-one-col staggered accordion__wrapper content__wrapper max-w--large">
  <div class="accordion__button cursor-hover">
    <div class="lg-screen__wrapper flex__wrapper">
      <div class="flex__wrapper">
        <div class="accordion__case-study-title"><?php echo $csTitle ?></div>
        <div><?php echo $csSubTitle ?></div>
      </div>
      <div>
        <div><?php echo $csDetails ?></div>
      </div>
    </div>

    <div class="mobile__wrapper">
      <div class="flex__wrapper">
        <div><?php echo $csSubTitle ?></div>
        <div><?php echo $csDetails ?></div>
      </div>
      <div>
        <div class="accordion__case-study-title"><?php echo $csTitle ?></div>
      </div>
    </div>

  </div>
  <div class="grid__wrapper accordion__content">
    <div>
      <?php
      if (!empty($csImage)) : ?>
      <a href="<?php echo $csLink; ?>">
        <img height="<?php echo $csImage['height']; ?>px" width="<?php echo $csImage['width']; ?>px"
          src="<?php echo esc_url($csImage['url']); ?>" alt="<?php echo esc_attr($csImage['alt']); ?>" />
        <?php endif; ?>
      </a>
    </div>
  </div>
</div>
<div class="hr"></div>