<?php
$heading = get_sub_field('pi_left_two_heading');
$leftTwoColText = get_sub_field('pi_left_two_col');
?>

<div class="cs__content-section cs__two-column left-aligned grid__wrapper">
  <div>
    <h3 class="two-col-heading"><?php echo $heading; ?></h3>
    <div class="two-col__wrapper">
      <?php echo $leftTwoColText; ?>
    </div>
  </div>
  <div></div>
</div>