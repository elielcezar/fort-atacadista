<div id="sidebar">
      <div id="recentes" class="box">
        <h3>Mais lidas</h3>
        <div class="posts">
          <?php
          $loop = new WP_Query(array(
            'post_type' => 'post',
            'category_name' => 'noticia',
            'posts_per_page' => 3,
            'orderby' => 'rand'
            //'offset' => 1        
          ));
          if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>
              <div class="item">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('thumb-noticia-3'); ?>
                </a>
                <h4>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h4>
              </div>
          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>
      </div>
      <div id="cadastrese" class="box">
        <h3>Assine nossa newsletter</h3>
        <p>Fique por dentro de tudo o que acontece no <strong>Food Service</strong></p>
        <a href="https://fortfoodservice.mediabrand.com.br/wp-login.php?action=register">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/banner-cadastrese2.png" alt="">
        </a>
        <a href="https://fortfoodservice.mediabrand.com.br/wp-login.php?action=register" class="btn">Cadastre-se<br/>gratuitamente</a>
      </div>
    </div>