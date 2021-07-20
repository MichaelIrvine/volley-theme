<?php

$csTitle = get_sub_field('case_study_title');
$csSubTitle = get_sub_field('case_study_sub_title');
$csDetails = get_sub_field('case_study_details');
$csImage = get_sub_field('case_study_image');
$preloadImage = $csImage['sizes']['preload'];


// var_dump($csImage);/
?>


<div class="cs-one-col">
  <div class="grid__wrapper accordion__button">
    <div><?php echo $csTitle ?></div>
    <div><?php echo $csSubTitle ?></div>
    <div><?php echo $csDetails ?></div>
  </div>
  <div class="grid__wrapper accordion__content">
    <div>
      <?php
      if (!empty($csImage)) : ?>
      <img style="min-height: <?php echo $csImage['height']; ?>px" height="<?php echo $csImage['height']; ?>px"
        width="<?php echo $csImage['width']; ?>px" src="<?php echo esc_url($csImage['url']); ?>"
        alt="<?php echo esc_attr($csImage['alt']); ?>" />
      <?php endif; ?>
    </div>
  </div>
</div>