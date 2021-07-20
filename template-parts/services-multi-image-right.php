<?php
$multiTitle = get_sub_field('layout_title');
$multiContent = get_sub_field('layout_content');
$multiContent2 = get_sub_field('secondary_layout_content');
$multiImages = get_sub_field('layout_gallery');

?>
<section class="flex__wrapper right-aligned">

  <div>
    <div>
      <h2> <?php echo $multiTitle; ?></h2>
    </div>
    <div class="grid__wrapper">
      <div>
        <?php
        if ($multiContent) :
          echo $multiContent;
        endif;
        ?>
      </div>
      <div>
        <?php
        if ($multiContent2) :
          echo $multiContent2;
        endif;
        ?>
      </div>
    </div>
  </div>

  <div>
    <?php
    if (!empty($multiImage)) : ?>
    <img src="<?php echo esc_url($preloadImage); ?>" data-src="<?php echo esc_url($multiImage['url']); ?>" class="lazy"
      alt="<?php echo esc_attr($multiImage['alt']); ?>" />
    <?php endif; ?>

    <?php
    if ($multiImages) : ?>
    <div>
      <?php foreach ($multiImages as $image) : ?>

      <img style="min-height: <?php echo $image['height']; ?>px" height="<?php echo $image['height']; ?>px"
        src="<?php echo esc_url($image['sizes']['preload']); ?>" data-src="<?php echo esc_url($image['url']); ?>"
        class="lazy" alt="<?php echo esc_attr($image['alt']); ?>" />

      <?php endforeach; ?>
    </div>
    <?php endif; ?>

  </div>
</section>