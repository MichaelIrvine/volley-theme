<?php

$images = get_sub_field('carousel_images');

if ($images) : ?>
<div class="cs__content-section cs__carousel__wrapper">
  <ul id="case-study-carousel" class="cs__carousel">
    <?php foreach ($images as $image) : ?>
    <li>
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    </li>
    <?php endforeach; ?>
  </ul>
</div>
<?php endif; ?>