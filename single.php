<?php get_header(); ?>

<div id="masthead">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<div id="principal">

  <div class="container">
    <div class="conteudo">
      <?php
      $url_video = get_field('url_video');
      if (is_singular('conteudo') && $url_video) {
      ?>
      <div class="video">
        <?php echo get_field('url_video'); ?>
      </div>
      <?php } ?>
      <?php the_content(); ?>
    </div>
  </div>

</div>


<?php get_footer(); ?>