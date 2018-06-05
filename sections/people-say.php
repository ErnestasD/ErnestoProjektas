<?php
  $peopleQuery = new WP_Query (array(
    'post_type'     => 'people_say',
    'post_per_page' => '-1',
    'orderby'       => 'date',
    'order'         => 'ASC'
  ));
if ($peopleQuery -> have_posts() ):
  $bg_id = get_field( 'people_bg', 9 );
  $bg_url = wp_get_attachment_image_src($bg_id, 'background_iamge')[0];
?>
<section class="people-say" style="background-image: url('<?= $bg_url ?>');">
  <div class="container">
    <div class="subheading">
      <h4>Happy clients</h4>
    </div>
    <div class="heading">
      <h3>WHAT PEOPLE SAY</h3>
    </div>
    <div class="line"></div>
    <div>
      <ul class="comments-container">
        <?php
          while ($peopleQuery->have_posts() ):
                 $peopleQuery->the_post();
        ?>
          <li>
            <div class="round-image">
              <img src="<?php the_post_thumbnail_url( 'small_image' ) ?>" alt="<?php the_field( 'person_name', get_the_ID() ) ?>" class="round">
            </div>
            <div class="opinion">
              <p class="name"><?php the_field( 'person_name', get_the_ID() ) ?></p>
              <p class="position"><?php the_field( 'person_position', get_the_ID() ) ?></p>
              <div class="inside-line"></div>
              <p class="comments"><?php the_field( 'person_opinion', get_the_ID() ) ?></p>
            </div>
          </li>
        <?php endwhile; ?>
      </ul>
    </div>
  </div>
<?php endif; ?>
</section>
