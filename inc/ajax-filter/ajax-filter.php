<?php
add_action('wp_ajax_nopriv_filter', 'filter_ajax');
add_action('wp_ajax_filter', 'filter_ajax');

function filter_ajax()
{
  $category = $_POST['category'];

  $args = array(
    'post_type' => 'project_index',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'order' => 'DSC',
  );

  if (isset($category)) {
    $args['category__in'] = array($category);
  }

  $the_query = new WP_Query($args);

  while ($the_query->have_posts()) : $the_query->the_post();

    $postCats = get_the_category();



?>

<div class="index-table filtered-index grid__wrapper">
  <div>
    <!-- Year Loop -->
    <?php
        $year = array();

        foreach ($postCats as $postCat) :

          if ($postCat->category_parent == 15) :

            $year[] = "<span class='small-text'>" . $postCat->cat_name . "</span>";

        ?>

    <?php endif;

        endforeach; ?>

    <?php echo implode(", ", $year); ?>
  </div>
  <div>
    <span class="small-text"><?php echo the_title(); ?></span>
  </div>
  <div>
    <?php
        $indexClients = get_field('project_index_client');
        if ($indexClients) {
          foreach ($indexClients as $indexClient) {
            $clientName = $indexClient['client_name']; ?>
    <span class="small-text">
      <?php echo $clientName; ?>
    </span>
    <br />
    <?php
          }
        }
        ?>
  </div>
  <div>
    <!-- ** -->
    <!-- Services Loop -->
    <!-- ** -->
    <?php

        $services = array();

        foreach ($postCats as $postCat) :

          if ($postCat->category_parent == 4) :

            $services[] = "<span class='small-text'>" . $postCat->cat_name . "</span>";

        ?>

    <?php endif;

        endforeach; ?>

    <?php echo implode(", ", $services); ?>
  </div>
  <div>
    <!-- ** -->
    <!-- Category Loop -->
    <!-- ** -->
    <?php

        $categories = array();

        foreach ($postCats as $postCat) :

          if ($postCat->category_parent == 9) :

            $categories[] = "<span class='small-text'>" . $postCat->cat_name . "</span>";

        ?>

    <?php endif;

        endforeach; ?>

    <?php echo implode(", ", $categories); ?>
  </div>
</div>


<?php
  endwhile;
  wp_reset_postdata();

  die();
}