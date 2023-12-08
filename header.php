<!doctype html>
<html>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Rubik:wght@500;700;800&display=swap" rel="stylesheet">

  <link href="<?php echo get_stylesheet_directory_uri(); ?>/fontawesome/css/all.css" rel="stylesheet">

  <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" /-->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <a class="menuBtn header">
    <span class="lines"></span>
  </a>

  <div class="menu-mobile">
    <nav class="mainMenu">
      <a class="menuBtn mobile">
        <span class="lines"></span>
      </a>
      <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" alt="">
      <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
    </nav>
  </div>

  <header>
    <div class="container">
      <div class="content">
        <div class="row">
          <div class="col-1">
            <h1><a href="<?php echo site_url(); ?>">Fort Atacadista</a></h1>
          </div>
          <div class="col-2">            
            <div class="row">
              <?php get_search_form(); ?>
              <ul class="social">
                <li><a href="https://www.instagram.com/fortatacadista/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/fortatacadista" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
              </ul>
            </div>
            <div class="row menu">
              <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>              
              <div class="login">
                <ul>
                  <li>
                    <a href="https://fortfoodservice.mediabrand.com.br/wp-login.php?action=register" class="cadastrese">Cadastre-se Gratuitamente</a>
                  </li>
                  <li>
                    <a href="https://fortfoodservice.mediabrand.com.br/wp-login.php" class="entrar">Entrar</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </header>