<?php
  $ourteamQuery = new WP_Query( array(
    'post_type'     => 'our_team',
    'post_per_page' => '-1',
    'orderby'       => 'date',
    'order'         => 'ASC'
  ) );
  if ( $ourteamQuery->have_posts() ):
?>
<section class="our-team">
  <div class="container">
    <div class="section-heading">
      <div class="subheading">
        <h4><?php the_field( '6s_subheading', 9 ) ?></h4>
      </div>
      <div class="heading">
        <h3><?php the_field( '6s_heading', 9 ) ?></h3>
      </div>
      <div class="line"></div>
      <div class="about-text">
        <p><?php the_field( '6s_paragraph', 9 ) ?></p>
      </div>
    </div>
    <ul class="flex-container">
      <?php
        while ($ourteamQuery->have_posts() ) :
          $ourteamQuery->the_post();
      ?>
        <li class="our-team-images">
          <div class="blue-background">
            <figure>
              <img src="<?php the_post_thumbnail_url('small_image') ?>" alt="<?php the_field( 'ourteam_name', get_the_ID() ) ?>">
              <div>
                <nav>
                  <ul class="hover-nav">
                    <div class="icon-border">
                      <li><a href="<?php the_field( 'facebook_link', get_the_ID() ) ?>"><i class="fab fa-facebook"></i></a></li>
                      <li><a href="<?php the_field( 'twitter_link', get_the_ID() ) ?>"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="<?php the_field( 'pinterest_link', get_the_ID() ) ?>"><i class="fab fa-pinterest-p"></i></a></li>
                      <li><a href="<?php the_field( 'instagram_link', get_the_ID() ) ?>"><i class="fab fa-instagram"></i></a></li>
                    </div>
                  </ul>
                </nav>
              </div>
            </figure>
          </div>
          <h4><?php the_field( 'ourteam_name', get_the_ID() ) ?></h4>
          <h5><?php the_field( 'ourteam_position', get_the_ID() ) ?></h5>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
  <?php endif; ?>
</section>
