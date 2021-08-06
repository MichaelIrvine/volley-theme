<?php

$fullWidthImage = get_sub_field('cs_fw_image');
$imageCaption = get_sub_field('cs_fw_img_caption');
$preloadImage = $fullWidthImage['sizes']['preload'];

if (!empty($fullWidthImage)) :
?>
<div class="cs__content-section">
  <img src="<?php echo esc_url($preloadImage); ?>" data-src="<?php echo esc_url($fullWidthImage['url']); ?>"
    class="lazy hero--full" alt="<?php echo esc_url($fullWidthImage['alt']); ?>" />
  <?php
    if ($imageCaption) : ?>
  <p><?php echo $imageCaption; ?></p>
  <?php endif;
    ?>
</div>
<?php endif; ?>