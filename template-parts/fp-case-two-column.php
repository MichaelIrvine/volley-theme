<?php

$csTitle = get_sub_field('case_study_title');
$csSubTitle = get_sub_field('case_study_sub_title');
$csDetails = get_sub_field('case_study_details');
$csImage1 = get_sub_field('case_study_image_1');
$csImage2 = get_sub_field('case_study_image_2');
$preloadImage = $csImage1['sizes']['preload'];


?>


<div class="cs-two-col staggered">
  <div class="grid__wrapper accordion__button cursor-hover">
    <div class="accordion__case-study-title"><?php echo $csTitle ?></div>
    <div><?php echo $csSubTitle ?></div>
    <div><?php echo $csDetails ?></div>
  </div>
  <div class="grid__wrapper accordion__content">
    <div>
      <?php
      if (!empty($csImage1)) : ?>
      <img height="<?php echo $csImage1['height']; ?>px" src="<?php echo esc_url($csImage1['url']); ?>"
        alt="<?php echo esc_attr($csImage1['alt']); ?>" />
      <?php endif; ?>
    </div>
    <div>
      <?php
      if (!empty($csImage2)) : ?>
      <img height="<?php echo $csImage2['height']; ?>px" src="<?php echo esc_url($csImage2['url']); ?>"
        alt="<?php echo esc_attr($csImage2['alt']); ?>" />
      <?php endif; ?>
    </div>
  </div>
</div>