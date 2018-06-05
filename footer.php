<?php
  $footerblogQuery = new WP_Query ( array(
    'post_type'     => 'footer_blog',
    'post_per_page' => '-1',
    'orderby'       => 'date',
    'order'         => 'ASC'
  ));
  $instaQuery = new WP_Query ( array(
    'post_type'     => 'insta_image',
    'post_per_page' => '-1',
    'orderby'       => 'date',
    'order'         => 'ASC'
  ));
if ($footerblogQuery->have_posts() ):
?>
<footer id="contact">
  <div class="container flex-container">
    <div class="subscribe">
      <h6>MoGo</h6>
      <p class="mogo_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
      <p class="followers_counter"><span>15k</span> followers</p>
      <p class="follow_us"><span>Follow Us:</span><i class="fab fa-facebook-f"></i> <i class="fab fa-twitter"></i> <i class="fab fa-instagram"></i> <i class="fab fa-pinterest-p"></i> <i class="fab fa-google-plus-square"></i> <i class="fab fa-youtube"></i> </p>
      <?php echo do_shortcode('[contact-form-7 id="184" title="Contact form 1"]') ?>
    </div>
    <div class="blogs">
      <h6 class="container-heading">BLOGS</h6>
      <ul>
        <?php
          while ($footerblogQuery->have_posts() ):
                 $footerblogQuery->the_post();
        ?>
          <li class="flex-container">
            <div class="images">
              <img src="<?php the_post_thumbnail_url( 'footer_blog_image' ) ?>">
            </div>
            <div class="texts">
              <h6> <?php the_field( 'footer_blog_name', get_the_ID() ) ?> </h6>
              <p> <?php the_field( 'footer_blog_date', get_the_ID() ) ?> </p>
            </div>
          </li>
        <?php endwhile; endif; ?>
      </ul>
    </div>
    <div class="instagram">
      <h6 class="container-heading">INSTAGRAM</h6>
      <ul id="instafeed" class="gallery"></ul>
      <p class="more_photos"> <a href="https://www.instagram.com/ernisdub/">View more photos </a></p>
    </div>
  </div>
  <div class="copyright-container"><div class="copyright"><p> Ⓒ 2016 MoGo free PSD template by <span>Laaqiq</span></p></div></div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
