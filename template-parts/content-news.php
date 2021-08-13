<?php

/**
 * Template part for displaying posts
 *
 * 
 *
 * @package Volley
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <section id="news-featured-image">
    <?php eq_post_thumbnail(); ?>
  </section>

  <section id="postBody">
    <header class="entry-header">
      <?php
			if (is_singular()) :
				the_title('<h1 class="entry-title">', '</h1>');
			else :
				the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
			endif; ?>

    </header>


    <div class="entry-content">
      <?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'eq'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				)
			);

			?>
    </div>
  </section>
</article>