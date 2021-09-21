<?php

$csTitle = get_sub_field('case_study_title');
$csSubTitle = get_sub_field('case_study_sub_title');
$csDetails = get_sub_field('case_study_details');
$csImage1 = get_sub_field('case_study_image_1');
$csImage2 = get_sub_field('case_study_image_2');
$csLink = get_sub_field('case_study_link');
$preloadImage = $csImage1['sizes']['preload'];


?>


<div class="cs-two-col staggered accordion__wrapper">
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
      if (!empty($csImage1)) : ?>
      <a href="<?php echo $csLink; ?>">
        <img height="<?php echo $csImage1['height']; ?>px" src="<?php echo esc_url($csImage1['url']); ?>"
          alt="<?php echo esc_attr($csImage1['alt']); ?>" />
        <?php endif; ?>
      </a>
    </div>
    <div>
      <?php
      if (!empty($csImage2)) : ?>
      <a href="<?php echo $csLink; ?>">
        <img height="<?php echo $csImage2['height']; ?>px" src="<?php echo esc_url($csImage2['url']); ?>"
          alt="<?php echo esc_attr($csImage2['alt']); ?>" />
        <?php endif; ?>
      </a>
    </div>
  </div>

</div>