<footer>
  <div class="footer-1" id="padarias">
    <div class="container">
      <div class="wrapper">
        <h2>Parceiros Food Service</h2>
        <h3>Patrocinadores master</h3>
        <ul class="patrocinadores">
          <?php
          $loop = new WP_Query(array(
            'post_type' => 'fornecedores',
            'meta_key'      => 'tipo',
            'meta_value'    => 'fixo',
            'posts_per_page' => -1,
            'orderby' => 'rand'
          ));
          if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post(); ?>

            <?php $has_content = get_field('possui_conteudo'); ?>

            <?php
            $has_content = get_field('possui_conteudo');
                if ($has_content) { ?>
            <li><a href="<?php the_permalink(); ?>"><img src="<?php the_field('logo'); ?>" alt=""></a></li>
            <?php } else { ?>
            <li><a href="<?php the_field('link_vitrine'); ?>"><img src="<?php the_field('logo'); ?>" alt=""></a></li>
            <?php } ?>

              

          <?php endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </ul>
      </div>
    </div>
  </div>


  <div class="footer-3">
    <div class="container">
      <div class="row">
        <div class="col-1">
          <a href="<?php echo site_url(); ?>" class="logo">Fort Atacadista</a>
          <p class="projeto">O projeto Amigo Todo Dia Seu Negócio + Fort é uma iniciativa do Fort Atacadista.</p>
          <p class="powered">Powered by: MegaMidia Group Copyrights 2023. Todos dos direitos reservados.</p>
        </div>
        <div class="col-2">
          <div class="row">
          <ul class="menu">
              <li><a href="<?php echo site_url(); ?>" class="blog">Blog</a></li>
              <?php
                  $loop = new WP_Query(array(
                    'post_type' => 'page',          
                    'posts_per_page' => -1,
                    'post__in' => array( 662, 666, 660),
                    'orderby' => 'rand'
                  ));
                  if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                      <li>                        
                          <a href="<?php the_permalink(); ?>" class="categoria"><?php the_title(); ?></a>                         
                      </li>
                  <?php endwhile;
                  endif;
                  wp_reset_postdata();
                  ?>              
            </ul>

            <ul class="menu">              
              <?php
                  $loop = new WP_Query(array(
                    'post_type' => 'page',          
                    'posts_per_page' => -1,
                    'post__in' => array(626, 668, 664),
                    'orderby' => 'rand'
                  ));
                  if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                      <li>                        
                          <a href="<?php the_permalink(); ?>" class="categoria"><?php the_title(); ?></a>                         
                      </li>
                  <?php endwhile;
                  endif;
                  wp_reset_postdata();
                  ?>
              <li><a href="<?php echo site_url(); ?>">Parceiros</a></li>
              <li><a href="<?php echo site_url(); ?>" class="cadastrese">Cadastre-se Gratuitamente</a></li>
            </ul>

            <div class="redes-sociais">
              <h4>Redes sociais</h4>
              <ul>
                <li><a href="https://www.instagram.com/fortatacadista/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/fortatacadista" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                <!--li><a href="#" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li-->
                <li><a href="https://www.youtube.com/@fortatacadista3728" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
              </ul>
            </div>

            <div class="loog-fort-mini">
              <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-fort-mini.png" alt="">
            </div>

          </div>
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- footer-3 -->


  </div><!-- col-1 -->

  <div class="col-2">

    <div class="row">
      <div class="col-1 social">

      </div>
      <div class="col-2">

      </div>
    </div><!-- row -->

  </div><!-- col-1 -->

  </div>
  </div>
  </div>


</footer>

<!--script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.6.0.min.js"></script-->

<?php wp_footer(); ?>

</body>

</html>