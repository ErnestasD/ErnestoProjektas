<?php
  $aboutQuery = new WP_Query( array(
    'post_type'     => 'superteam',
    'post_per_page' => '-1',
    'orderby'       => 'date',
    'order'         => 'ASC'
  ) );
  if ( $aboutQuery->have_posts() ):
?>
<section class="story-about" id="about">
  <div class="container">
    <ul>
      <li class="subheading">
        <h4><?php the_field( '2s_subheading', 9 ) ?></h4>
      </li>
      <li class="heading">
        <h3><?php the_field( '2s_heading', 9 ) ?></h3>
      </li>
    </ul>
  <div class="line"></div>
  <div class="about-text">
    <p><?php the_field( '2s_paragraph', 9 ) ?></p>
  </div>
  <div class="team-images">
    <ul class="flex-container">
      <?php
        while ($aboutQuery->have_posts() ) :
          $aboutQuery->the_post();
      ?>
        <li>
          <div class="blue-background">
            <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_field( 'about_text', get_the_ID() ) ?>">
            <div class="effect">
              <div class="user-icon">
                <p><?php the_field( 'about_icon', get_the_ID() ) ?></p>
              </div>
              <div>
                <p><?php the_field( 'about_text', get_the_ID() ) ?></p>
              </div>
            </div>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
<?php endif; ?>
</section>
