<main>
  <section class="intro" id="home" style=" background: linear-gradient( rgba(244, 139, 130, 0.9), rgba(252, 226, 138, 0.9) ),  url( '<?php the_field( 'header_background_image', 9 ) ?>' ) " >
    <div class="container">
      <div class="site-subheading">
        <h2><?php the_field( 'subheading', 9 ) ?></h2>
      </div>
      <div class="site-heading">
        <h1><?php the_field( 'heading', 9 ) ?></h1>
        <div class="border"><div></div></div>
      </div>
      <div class="button">
        <button><a class="learn-more" href="#about"><?php the_field( 'button', 9 ) ?></a></button>
      </div>
      <div class="site-navigation-container">
        <ul  class="bottom-nav">
          <li>
            <div class="line"></div>
            <a href=""><h6><span>01</span><?php the_field( 'bot_nav_field1', 9  ) ?></h6></a>
          </li>
          <li>
            <div class="line"></div>
            <a href=""><h6><span>02</span><?php the_field( 'bot_nav_field2', 9  ) ?></h6></a>
          </li>
          <li>
            <div class="line"></div>
            <a href=""><h6><span>03</span><?php the_field( 'bot_nav_field3', 9  ) ?></h6></a>
          </li>
          <li>
            <div class="line"></div>
            <a href=""><h6><span>04</span><?php the_field( 'bot_nav_field4', 9  ) ?></h6></a>
          </li>
        </ul>
      </div>
    </div>
  </section>
