<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>

  <body>
    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="<?php home_url(); ?>"><h2><?php bloginfo( 'name' ); ?><em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
          <?php 
                    wp_nav_menu( [
                      'theme_location'  => 'top',
                      'container'       => 'null',
                      'menu_class'      => 'navbar-nav ml-auto',
                      'echo'            => true,
                      'fallback_cb'     => 'wp_page_menu',
                      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    ] );
                    
          ?>

          </div>
        </div>
      </nav>
    </header>