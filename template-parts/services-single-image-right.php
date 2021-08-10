<?php
$singleTitle = get_sub_field('layout_title');
$singleContent = get_sub_field('layout_content');
$singleContent2 = get_sub_field('secondary_layout_content');
$singleImage = get_sub_field('layout_image');
$preloadImage = $singleImage['sizes']['preloadHalf'];
?>
<section class="flex__wrapper right-aligned">

  <div>
    <!-- title row -->
    <div>
      <h2> <?php echo $singleTitle; ?></h2>
    </div>
    <div class="grid__wrapper">
      <div>
        <?php
        if ($singleContent) :
          echo $singleContent;
        endif;
        ?>
      </div>
      <div>
        <?php
        if ($singleContent2) :
          echo $singleContent2;
        endif;
        ?>
      </div>
    </div>
  </div>

  <div>
    <?php
    if (!empty($singleImage)) : ?>
    <img height="<?php echo $singleImage['height']; ?>px" src="<?php echo esc_url($preloadImage); ?>"
      data-src="<?php echo esc_url($singleImage['url']); ?>" class="lazy"
      alt="<?php echo esc_attr($singleImage['alt']); ?>" />
    <?php endif; ?>
  </div>
</section>