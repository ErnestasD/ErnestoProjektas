<?php
  $partnersQuery = new WP_Query( array(
    'post_type'       => 'partners',
    'posts_per_page'  => '-1',
    'orderby'         => 'date',
    'order'           => 'ASC'
  ));
if ($partnersQuery->have_posts() ) :
?>
<section class="partners">
  <div class="container">
  <ul class="logo-container flex-container">
    <?php
      while ($partnersQuery->have_posts() ) :
        $partnersQuery -> the_post();
    ?>
      <li>
        <figure>
          <a href="<?php the_field( 'partners_link', get_the_ID() ) ?>">
            <img src="<?php the_post_thumbnail_url() ?>" alt="partner logo">
          </a>
        </figure>
      </li>
    <?php endwhile; ?>
  </div>
<?php endif; ?>
</section>
