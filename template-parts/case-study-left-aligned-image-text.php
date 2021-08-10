<?php

$image = get_sub_field('left_aligned_image');
$preloadImage = $image['sizes']['preload'];
$text = get_sub_field('left_aligned_text');

?>

<div class="cs__content-section cs__image-text-cols left-aligned">
  <div class="grid__wrapper">
    <div class="image-col">
      <img width="<?php echo $image['width'] ?>" src="<?php echo esc_url($preloadImage); ?>"
        data-src="<?php echo esc_url($image['url']); ?>" class="lazy" alt="<?php esc_attr($image['alt']); ?>" />
    </div>
    <div class="text-col">
      <div>
        <?php echo $text; ?>
      </div>
    </div>
  </div>
</div>