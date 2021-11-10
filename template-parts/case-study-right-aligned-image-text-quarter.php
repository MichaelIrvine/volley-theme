<?php

$imageRight = get_sub_field('image_right_aligned');
$preloadImage = $imageRight['sizes']['preload'];
$text = get_sub_field('text_right_aligned');


?>

<div class="cs__content-section cs__image-text-cols right-aligned">
  <div class="grid__wrapper">
    <div class="text-col">
      <?php echo $text; ?>
    </div>
    <div class="image-col quarter-width">
      <img width="<?php echo $imageRight['width']; ?>" src="<?php echo esc_url($imageRight['url']); ?>"
        alt="<?php esc_attr($imageRight['alt']); ?>" />
    </div>

  </div>
</div>