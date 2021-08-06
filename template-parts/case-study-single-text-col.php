<?php
$imgOne = get_sub_field('image_one');
$imgTwo = get_sub_field('image_two');
$preloadImage = $imgOne['sizes']['preloadHalf'];
$imageCaption = get_sub_field('image_caption');
?>

<div class="cs__content-section">
  <!-- if left align -->
  <div class="grid__wrapper gap20">
    <div>
      <!-- Text here -->
    </div>
    <div>
      <!-- Spacer -->
    </div>
  </div>
  <!-- if right align -->
  <div class="grid__wrapper gap20">
    <div>
      <!-- Spacer -->
    </div>
    <div>
      <!-- Text here -->
    </div>
  </div>
</div>