<?php

/**
 * Template Name: About Us
 *
 *
 * 
 *
 * @package Volley
 */

get_header();
?>

<main id="primary" class="site-main">
  <section id="aboutHero">
    <div class="content__wrapper">
      <?php
      $aboutHero = get_field('about_page_hero');
      $preloadImage = $aboutHero['sizes']['preload'];

      if (!empty($aboutHero)) : ?>
      <img style="max-height: <?php echo $aboutHero['height']; ?>px; min-height: <?php echo $aboutHero['height']; ?>px"
        height="<?php echo $aboutHero['height']; ?>px" src="<?php echo esc_url($preloadImage); ?>"
        data-src="<?php echo esc_url($aboutHero['url']); ?>" class="lazy"
        alt="<?php echo esc_attr($aboutHero['alt']); ?>" />
      <?php endif; ?>
    </div>
  </section>

  <?php
  $contact = get_field('contact_info');
  if ($contact) :
  ?>
  <section id=aboutContactDetails>

    <div class="grid__wrapper">
      <div class="grid__wrapper">
        <div>
          <!-- spacer -->
        </div>
        <div>
          <h2><?php echo $contact['contact_section_title']; ?> </h2>
        </div>
      </div>
      <div>
        <!-- spacer -->
      </div>
    </div>

    <div class="grid__wrapper">
      <div class="grid__wrapper">
        <div class="link-with-arrow"><?php echo $contact['contact_info']; ?></div>
        <div><?php echo $contact['contact_info_copy']; ?></div>
      </div>
      <div class="form__wrapper">
        <h3>Contact Form</h3>
        <?php echo  $contact['contact_form']; ?>
      </div>
    </div>

  </section>
  <?php endif; ?>

  <section id="aboutTeam">
    <div class="grid__wrapper">
      <div>
        <h3>People</h3>
      </div>
      <div class="team-members__wrapper">
        <?php if (have_rows('team_members')) : ?>
        <ul>
          <?php while (have_rows('team_members')) : the_row();
              // get row index for data-id
              // to tell which bio to open
              $i = get_row_index();
              $name = get_sub_field('team_member_name');
              $role = get_sub_field('team_member_role');
              $bio = get_sub_field('team_member_profile');
              $teamImage = get_sub_field('team_member_image');
            ?>
          <li class="flex__wrapper">
            <div class="grid__wrapper">
              <div>
                <h2><?php echo $name; ?></h2>
                <p><?php echo $role; ?></p>
              </div>
              <div>
                <div class="bio-controls cursor-hover">
                  <button data-button-id="bio-<?php echo $i ?>" class="small bio-btn">
                    <span>Read bio</span>
                    <span>Close</span>
                  </button>
                  <div class="button-arrow__wrapper">
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M12.5 3C12.5 2.72386 12.2761 2.5 12 2.5L7.5 2.5C7.22386 2.5 7 2.72386 7 3C7 3.27614 7.22386 3.5 7.5 3.5L11.5 3.5L11.5 7.5C11.5 7.77614 11.7239 8 12 8C12.2761 8 12.5 7.77614 12.5 7.5L12.5 3ZM3.35355 12.3536L12.3536 3.35355L11.6464 2.64645L2.64645 11.6464L3.35355 12.3536Z"
                        fill="#505050" />
                    </svg>
                  </div>
                </div>

              </div>
            </div>

            <div data-bio-id="bio-<?php echo $i ?>" class="grid__wrapper team-bio">
              <div>
                <p><?php echo $bio; ?></p>
              </div>
              <div>
                <?php if (!empty($teamImage)) : ?>
                <img height="<?php echo $teamImage['height']; ?>px" src="<?php echo esc_url($teamImage['url']); ?>"
                  alt="<?php echo esc_attr($teamImage['alt']); ?>" />
                <?php endif; ?>
              </div>

            </div>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section id="clientList">
    <div class="grid__wrapper">
      <div>
        <h3><?php echo the_field('client_list_title'); ?></h3>
      </div>
      <div class="flex__wrapper">
        <div>
          <?php echo the_field('client_list_text'); ?>
        </div>
        <div class="client-list__wrapper">
          <?php if (have_rows('client_list')) : ?>
          <ul class="has-hidden-images">
            <?php while (have_rows('client_list')) : the_row();
                $clientName = get_sub_field('client_name');
                $clientImage = get_sub_field('client_image');
              ?>
            <li class="hidden-image__wrapper">
              <a><?php echo $clientName; ?></a>
              <?php if (!empty($clientImage)) : ?>
              <img height="<?php echo $clientImage['height']; ?>px" src="<?php echo esc_url($clientImage['url']); ?>" />
              <?php endif; ?>
            </li>
            <?php endwhile; ?>
          </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php
get_footer();