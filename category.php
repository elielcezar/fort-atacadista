<?php get_header(); ?>

<div id="masthead" style="background-image: url(<?php the_field('banner'); ?>);">
  <div class="background-wrapper">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <p class="chamada"><?php the_field('chamada'); ?></p>
    </div>
  </div>
</div>

<div id="recentes">
  <h3>Mais recentes</h3>
  <div class="container">

    <div class="wrapper">

      <div class="posts">
        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'orderby' => 'rand'
          //'offset' => 1        
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="item">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('thumb-noticia'); ?>
              </a>
              <h4>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h4>
              <p><?php the_field('chamada'); ?></p>
            </div>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>
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
</div><!-- principal -->

<div id="publicidade">
  <div class="container">
    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/banner.jpg" alt="">
  </div>
</div>

<div id="compartilhe">
  <div class="container">
    <?php
    global $wp;
    $current_url = home_url(add_query_arg(array(), $wp->request));
    ?>
    <ul>
      <li class="fb"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_url; ?>">Facebook</a></li>
      <li class="twitter"><a href="https://twitter.com/intent/tweet?text=<?php echo $current_url; ?>">Twitter</a></li>
      <li class="wpp"><a href="https://api.whatsapp.com/send?text=<?php echo $current_url; ?>">Whatsapp</a></li>
      <li class="telegram"><a href="https://t.me/share/url?url=<?php echo $current_url; ?>">Telegram</a></li>
      <li class="linkedin"><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $current_url; ?>">Linkedin</a></li>
    </ul>
  </div>
</div>

<div id="recomendados">
  <h3>Recomendados para você</h3>
  <div class="container">

    <div class="wrapper">

      <div class="posts">
        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 4,
          'orderby' => 'rand'
          //'offset' => 1        
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="item">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('thumb-noticia'); ?>
              </a>
              <h4>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h4>
              <p><?php the_field('chamada'); ?></p>
            </div>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>