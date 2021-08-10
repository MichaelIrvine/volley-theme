<?php
$singleColText = get_sub_field('case_study_single_column_text');
?>

<div class="cs__content-section">
  <?php if (get_sub_field('text_alignment') == 'Left') : ?>
  <div class="grid__wrapper gap20 cs__single-column">
    <div class="content__wrapper">
      <?php echo $singleColText; ?>
    </div>
    <div>
      <!-- Spacer -->
    </div>
  </div>
  <?php endif; ?>

  <?php if (get_sub_field('text_alignment') == 'Right') : ?>
  <div class="grid__wrapper gap20 cs__single-column">
    <div>
      <!-- Spacer -->
    </div>
    <div class="content__wrapper">
      <?php echo $singleColText; ?>
    </div>
  </div>
  <?php endif; ?>
</div>