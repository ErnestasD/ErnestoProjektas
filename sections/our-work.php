<?php
 $ourworkQuery = new WP_Query( array(
   'post_type'      => 'our_work',
   'post_per_page'  => '-1',
   'orderby'        => 'date',
   'order'          => 'ASC'
 ));
if ( $ourworkQuery -> have_posts() ) :
?>
<section class="our-work">
  <div class="container">
    <div class="subheading">
      <h4><?php the_field( '7s_subheading', 9 ) ?></h5>
    </div>
    <div class="heading">
      <h3><?php the_field( '7s_heading', 9 ) ?></h4>
    </div>
    <div class="line"></div>
    <div class="about-text">
      <p><?php the_field( '7s_paragraph', 9 ) ?></p>
    </div>
  </div>
  <div>
    <ul class="grid">
      <li class="grid-sizer"></li>
      <?php
        while ($ourworkQuery->have_posts() ):
               $ourworkQuery->the_post();
      ?>
        <li class="grid-item">
          <div class="relative">
            <?php if ( !$ourworkQuery->current_post==2):?>
              <img src="<?php the_post_thumbnail_url( 'small_image' ) ?>" alt="<?php the_field( 'hover_text_title', get_the_ID() ) ?>">
            <?php else: ?>
              <img src="<?php the_post_thumbnail_url( 'double_image' ) ?>" alt="<?php the_field( 'hover_text_title', get_the_ID() ) ?>">
            <?php endif; ?>
            <div class="image-hover">
              <p><?php the_field( 'hover_icon', get_the_ID() ) ?></p>
              <p><?php the_field( 'hover_text_title', get_the_ID() ) ?></p>
              <p><?php the_field( 'hover_text', get_the_ID() ) ?></p>
            </div>
          </div>
        </li>
      <?php endwhile; ?>
    </ul>
  </div>
<?php endif; ?>
</section>
