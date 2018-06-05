<?php
  $servicesQuery = new WP_Query (array(
    'post_type'     => 'services',
    'post_per_page' => '-1',
    'orderby'       => 'date',
    'order'         => 'ASC'
  ));

if ( $servicesQuery->have_posts() ) :
?>
<section class="services" id="work">
  <div class="container">
    <div class="subheading">
      <h4><?php the_field( '3s_subheading', 9 ) ?></h4>
    </div>
    <div class="heading">
      <h3><?php the_field( '3s_heading', 9 ) ?></h3>
    </div>
    <div class="line"></div>
    <ul>
      <?php
        while ($servicesQuery->have_posts() ) :
          $servicesQuery->the_post();
      ?>
        <li>
          <div>
            <div class="icon"><?php the_field( 'service_icon', get_the_ID() ) ?></div>
            <div>
              <h6><?php the_field( 'service_name', get_the_ID() ) ?></h6>
              <p><?php the_field( 'service_description', get_the_ID() ) ?></p>
            </div>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
</section>
<?php endif; ?>
