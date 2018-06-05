<?php
  $blogQuery = new WP_Query (array(
    'post_type'       => 'blog',
    'posts_per_page'  => '-1',
    'orderby'         => 'date',
    'order'           => 'ASC'
  ));
if ($blogQuery->have_posts() ):
?>
<section class="blog" id="blog">
  <div class="container">
    <div class="subheading">
      <h4>Our stories</h4>
    </div>
    <div class="heading">
      <h3>LATEST BLOG</h3>
    </div>
    <div class="line"></div>
    <div class="blog-container">
      <ul>
        <?php
          while( $blogQuery->have_posts() ):
                 $blogQuery->the_post();
        ?>
          <li>
            <div class="blog-image">
              <img src="<?php the_post_thumbnail_url( 'blog_image' ) ?>" alt="<?php the_field( 'blog_name', get_the_ID() ) ?>">
              <div class="date">
                <span class="day"><?php the_field( 'day_of_post', get_the_ID() ) ?></span><span class="month"><?php the_field( 'month_of_post', get_the_ID() ) ?></span>
              </div>
            </div>
            <h6> <?php the_field( 'blog_name', get_the_ID() ) ?> </h6>
            <p class="description"> <?php the_field( 'blog_description', get_the_ID() ) ?> </p>
            <p class="views_comments">
              <i class="fas fa-eye"></i>
              <span class="views"> 542 </span>
              <i class="fas fa-comment"></i>
              <span class="comments"> 17 </span>
            </p>
          </li>
        <?php endwhile; ?>
      </ul>
    </div>
  </div>
</section>
<?php endif; ?>
