<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

    <!-- Bootstrap CSS -->
    <link
      href="/css/bootstrap.min.css"
      rel="stylesheet"
      
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
      rel="stylesheet"
    />

    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
    ></script>

  <?php wp_head(); ?>
  </head>
  <body>
  
<!--navbar-->

<nav class="navbar navbar-light bg-light fixed-top">
      <div class="container-fluid">

        <div class="logo2">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo3.png" alt="">
        </div>

        <div class="meni">
         
         <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
         
        </div>

        <div class="navAbout">
          <span><a href="about.html">About</a></span>
          <span><a href=""> <i class="fas fa-envelope"></i> </a></span>
        </div>

        <div class="collapse container" id="navbarToggleExternalContent">
          <div class="bg-light shadow-3 p-4 d-flex">
            <button class="btn  btn-block border-bottom m-0">Muskarci</button>
            <button class="btn  btn-block border-bottom m-0">Zene</button>
            <button class="btn  btn-block border-bottom m-0">Deca</button>
          </div>
        </div>

      </div>
    </nav>
