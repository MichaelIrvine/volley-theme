<?php
$imgOne = get_sub_field('image_one');
$imgTwo = get_sub_field('image_two');
$preloadImage = $imgOne['sizes']['preloadHalf'];
$imageCaption = get_sub_field('image_caption');
?>

<div class="cs__content-section">
  <div class="grid__wrapper gap20">
    <div>
      <img src="<?php echo esc_url($preloadImage); ?>" data-src="<?php echo esc_url($imgOne['url']); ?>"
        class="lazy hero--full" alt="<?php esc_attr($imgOne['alt']); ?>" />
    </div>
    <div>
      <img src="<?php echo esc_url($preloadImage); ?>" data-src="<?php echo esc_url($imgTwo['url']); ?>"
        class="lazy hero--full" alt="<?php esc_attr($imgTwo['alt']); ?>" />
    </div>
  </div>
  <?php if ($imageCaption) : ?>
  <p>
    <?php echo $imageCaption; ?>
  </p>
  <?php endif; ?>
</div>