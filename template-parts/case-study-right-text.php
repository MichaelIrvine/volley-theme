<?php
$heading = get_sub_field('cs_right_two_heading');
$rightTwoColText = get_sub_field('cs_right_two_col');
?>

<div class="cs__content-section cs__two-column right-aligned grid__wrapper">
  <div></div>
  <div>
    <h3 class="two-col-heading"><?php echo $heading; ?></h3>
    <div class="two-col__wrapper">
      <?php echo $rightTwoColText; ?>
    </div>
  </div>
</div>