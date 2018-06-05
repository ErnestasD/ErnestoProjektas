<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MoGo</title>
  <?php wp_head(); ?>
</head>
<body>
  <div class="ersre"></div>
  <header>
    <div class="container flex-container">
      <div class="logo"><a href="#home"><?php the_field( 'logo_text', 9 ) ?></a></div>
      <button class="drp-menu">Menu</button>
      <nav class="dropdown">
          <?php
          $menu = wp_nav_menu( array(
            'menu'                => 'header-menu',
            'container'           => false,
            'menu_class'          => 'navigation flex-container',
            'echo'                => false
          ) );
          $menu = strip_tags($menu, '<li><a>');
          $final_menu = '<ul class="navigation flex-container dropdown-content">';
          $final_menu .= $menu;
          $final_menu .= '<li><a href="#"><i class="fas fa-shopping-cart"></i></a></li><li><a href="#"><i class="fas fa-search"></i></a></li></ul>';
          echo $final_menu;
          ?>
      </nav>
    </div>
  </header>
