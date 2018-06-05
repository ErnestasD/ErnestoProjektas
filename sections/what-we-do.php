<section class="what-we-do" id="service">
  <div class="container">
    <div class="subheading">
      <h4><?php the_field( '5s_subheading', 9 ) ?></h4>
    </div>
    <div class="heading">
      <h3><?php the_field( '5s_heading', 9 ) ?></h3>
    </div>
    <div class="line"></div>
    <div class="about-text">
      <p><?php the_field( '5s_paragraph', 9 ) ?></p>
    </div>
    <div class="flex-container">
      <div>
          <div><img src="<?php the_field( 'what_we_do_image', 9 ) ?>"></div>
      </div>
      <div class="text-slider">
        <h6>
          <div class="dropdown-button">
            <span><i class="far fa-image icon"></i> PHOTOGRAPHY </span>
            <span class="arrow-down"><i class="fas fa-angle-down"></i></span>
          </div>
          <p class="hidden-text open"><?php the_field( 'dropdown_text1', 9 ) ?></p>
        </h6>
        <h6>
          <div class="dropdown-button">
            <span><i class="fas fa-sliders-h icon"></i> CREATIVITY </span>
            <span class="arrow-down"><i class="fas fa-angle-down"></i></span>
          </div>
          <p class="hidden-text"><?php the_field( 'dropdown_text2', 9 ) ?></p>
        </h6>
        <h6>
          <div class="dropdown-button">
            <span><i class="fas fa-bullseye icon"></i> WEB DESIGN </span>
            <span class="arrow-down"><i class="fas fa-angle-down"></i></span>
          </div>
          <p class="hidden-text"><?php the_field( 'dropdown_text3', 9 ) ?></p>
        </h6>
      </div>
    </div>
  </div>
</section>
