<?php
  $factsQuery = new WP_Query( array(
    'post_type'     => 'facts',
    'post_per_page' => '-1',
    'orderby'       => 'date',
    'order'         => 'ASC'
  ));
if ( $factsQuery-> have_posts() ):
?>
<section class="facts">
  <div class="container">
    <ul class="facts-container flex-container">
      <?php
        while ($factsQuery->have_posts() ) :
          $factsQuery->the_post();
      ?>
        <li>
          <div><h4><?php the_field( 'fact_counter', get_the_ID() ) ?></h4></div>
          <div><h5><?php the_field( 'fact_description', get_the_ID() ) ?></h5></div>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
</section>
<?php endif; ?>
