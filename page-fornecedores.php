<?php
/*
Template Name: Fornecedores
*/
//the content of page.php and now you can do what you want.
?>


<?php get_header(); ?>


<div id="masthead">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>



<div id="principal">
  <div class="container">

    <ul class="fornecedores">
      <li><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/img/oreo.png" alt=""></a></li>
      <li><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/img/tang-3.png" alt=""></a></li>
      <li><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/img/concha.png" alt=""></a></li>
      <li><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/img/cocacola.png" alt=""></a></li>
      <li><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/img/sbp.png" alt=""></a></li>
      <li><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/img/veja.png" alt=""></a></li>
      <li><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/img/wickbold.png" alt=""></a></li>
      <li><a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/img/vanish.png" alt=""></a></li>
    </ul>

  </div>
</div>





<?php get_footer(); ?>