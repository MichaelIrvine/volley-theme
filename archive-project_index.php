<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EQ
 */

get_header();
?>

<main id="primary" class="site-main">

  <div class="index-filter__wrapper">
    <div class="grid__wrapper">
      <div>
        <button id="filterToggle" class="small">Filter <span><svg width="5" height="8" viewBox="0 0 5 8" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M1 1L4 4L1 7" stroke="#888888" />
            </svg></span></button>

      </div>
      <div class="category-filter__wrapper">

        <?php
				$parentArgs = array(
					'orderby' => 'name',
					'order' => 'DSC',
					'parent'   => 0,
					'hide_empty' => 0,
					'include' => '9, 4'
				);

				$parentCats = get_categories($parentArgs);

				?>

        <ul class="categories-filter-list grid__wrapper">
          <?php foreach ($parentCats as $parent) : ?>
          <li class="parent-category-item">
            <span><?php echo $parent->name; ?></span>
            <ul>
              <?php
								$subCategories = get_categories(
									array(
										'child_of' => $parent->cat_ID,
										'order' => 'ASC',
										'hide_empty' => false
									)
								);

								foreach ($subCategories as $subCat) : ?>

              <li class="category-filter-item">
                <a data-category="<?php echo $subCat->term_id; ?>"
                  href="<?php echo get_category_link($subCat->term_id) ?>">
                  <?php echo $subCat->name; ?>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>

  <div class="index-header grid__wrapper">
    <div>
      <h3>Year</h3>
    </div>
    <div>
      <h3>Project</h3>
    </div>
    <div>
      <h3>Client</h3>
    </div>
    <div>
      <h3>Services</h3>
    </div>
    <div>
      <h3>Category</h3>
    </div>
  </div>

  <?php if (have_posts()) : ?>

  <?php

		$args = array(
			'post_type' => 'project_index',
			'posts_per_page' => -1,
			'post_status' => 'publish',
			'order' => 'DSC',
		);

		$the_query = new WP_Query($args); ?>


  <div class="filtered-index__wrapper">

    <?php
			while ($the_query->have_posts()) : $the_query->the_post();

				$postCats = get_the_category();



			?>

    <div class="index-table filtered-index grid__wrapper staggered">
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
			wp_reset_postdata(); ?>

  </div>
  <?php
	endif;
	?>


</main><!-- #main -->

<?php
get_footer();