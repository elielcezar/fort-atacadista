<?php
/*
Template Name: Homepage Custom
*/
//the content of page.php and now you can do what you want.
?>

<?php get_header(); ?>

<section class="banners top desktop carrossel">
  <?php
  $images = acf_photo_gallery('banners_desktop', $post->ID);

  if (count($images)) :
    foreach ($images as $image) :
      $full_image_url = $image['full_image_url'];
      $url = $image['url'];
  ?>
      <div class="item">
        <a href="<?php echo $url; ?>"><img src="<?php echo $full_image_url; ?>" alt=""></a>
      </div>
  <?php endforeach;
  endif; ?>
</section>

<section class="banners top mobile carrossel">
  <?php
  $images = acf_photo_gallery('banners_mobile', $post->ID);
  if (count($images)) :
    foreach ($images as $image) :
      $full_image_url = $image['full_image_url'];
      $url = $image['url'];
  ?>
      <div class="item">
        <a href="<?php echo $url; ?>"><img src="<?php echo $full_image_url; ?>" alt=""></a>
      </div>
  <?php endforeach;
  endif; ?>
</section>

<div id="main-wrapper">

  <section id="categorias">
    <div class="container">

      <?php get_template_part( 'carrossel-categorias' ); ?>     
      
    </div>
  </section>

  <section id="noticias">
    <div class="container">
      <div class="col-1">

        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'category_name' => 'noticia',
          'posts_per_page' => 1,          
          'orderby' => 'date',
          'order' => 'DESC'
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="noticia">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('thumb-noticia-1'); ?>
                <div class="chamada">
                  <?php
                  $post_tags = get_the_tags();
                  ?>
                  <div class="assunto assunto-<?php if ($post_tags) {
                                                foreach ($post_tags as $tag) {
                                                  echo $tag->term_id;
                                                }
                                              } ?>">
                    <?php if ($post_tags) {
                      foreach ($post_tags as $tag) {
                        echo $tag->name;
                      }
                    } ?>
                  </div>
                  <h3><?php the_title(); ?></h3>
                </div>
              </a>
            </div>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>

      </div>
      <div class="col-2">
        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'category_name' => 'noticia',
          'posts_per_page' => 2,
          'orderby' => 'date',
          'order' => 'DESC',
          'offset' => 1
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="noticia">
              <a href="<?php the_permalink(); ?>">
                <div class="mobile"><?php the_post_thumbnail('thumb-noticia-1'); ?></div>
                <div class="desktop"><?php the_post_thumbnail('thumb-noticia-2'); ?></div>
                <div class="chamada">
                  <?php
                  $post_tags = get_the_tags();
                  ?>
                  <div class="assunto assunto-<?php if ($post_tags) {
                                                foreach ($post_tags as $tag) {
                                                  echo $tag->term_id;
                                                }
                                              } ?>">
                    <?php if ($post_tags) {
                      foreach ($post_tags as $tag) {
                        echo $tag->name;
                      }
                    } ?>
                  </div>
                  <h3><?php the_title(); ?></h3>
                </div>
              </a>
            </div>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>

      </div>
    </div>
  </section>

  <section id="patrocinado-1" class="patrocinado">
    <div class="container">
      <div class="row">
        <div class="col-1">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/patrocinado.jpg?v2" alt="">
        </div>
        <div class="col-2">
          <h4>Conteúdo <strong>patrocinado</strong></h4>
          <h2>Como Montar uma Tábua de Frios</h2>
          <p class="data">01/12/2023</p>
          <p>Encante clientes, amigos e familiares com uma tábua de frios irresistível. Descubra as opções de frios Sadia e transforme seu cardápio numa experiência gastronômica</p>
          <a href="#" class="btn">Saiba mais</a>
        </div>
      </div>
    </div>
  </section>

  <section id="destaques" class="patrocinado">
    <div class="container">
      <h2>Destaques do Fort</h2>
      <div class="row">
        <div class="col-1">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/destaque.jpg" alt="">
        </div>
        <div class="col-2">
          <h3>Vuon Card do<br />Fort Atacadista</h3>
          <h4>Facilitando as suas compras com mais economia e benefícios</h4>
          <p>O Fort Atacadista, reconhecido por sua qualidade e compromisso com o cliente, sempre busca maneiras de tornar a experiência de compra mais conveniente e vantajosa. Uma das maneiras pelas quais o Fort faz isso é através do Vuon Card, um cartão de crédito exclusivo que oferece inúmeras vantagens aos seus clientes fiéis.</p>
          <a href="#" class="btn">Saiba mais</a>
        </div>
      </div>
    </div>
  </section>

  <section id="patrocinado-2" class="patrocinado">
    <div class="container">
      <div class="row">
        <div class="col-1">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/patrocinado-2.jpg" alt="">
        </div>
        <div class="col-2">
          <h4>Conteúdo <strong>patrocinado</strong></h4>
          <h2>Explorando sabores com a Friboi</h2>
          <p class="data">01/12/2023</p>
          <p>Com dedicação à qualidade e inovação, a Friboi oferece cortes de carne suculentos e saborosos que elevam cada refeição. Mergulhe nessa experiência com a gente.</p>
          <a href="#" class="btn">Saiba mais</a>
        </div>
      </div>
    </div>
  </section>

  <section id="pizzarias">
    <div class="container">
      <h2>Explore o nosso conteúdo</h2>
      <div class="row">
        <div class="col-1 revista">
          <div class="col">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/revista.png" alt="">
          </div>
          <div class="col">
            <h3>Revista</h3>
            <p>A Revista Amigo Todo Dia Seu Negócio +Fort é uma fonte de inspiração e conhecimento para os clientes da rede Fort Atacadista. Repleta de conteúdo relevante, a cada edição trazemos dicas de gestão, finanças, tendências do Food Service, dia a dia do empreendedor,
              notícias do Fort Atacadista e muito mais. Acesse e confira!</p>
            <div class="cta">
              <a href="#" class="btn">Ler agora</a>
            </div>
          </div>
        </div>
        <div class="col-2 newsletter">
          <div class="col">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/newsletter.png" alt="">
          </div>
          <div class="col">
            <h3>Newsletter</h3>
            <p>Com a Newsletter Amigo Todo Dia Seu Negócios +Fort você não perde nenhuma novidade do Fort Atacadista e ainda fica por dentro das principais notícias do setor Food Service. Cadastre-se agora e receba em primeira mão todas as informações para impulsionar o sucesso do seu negócio!</p>
            <div class="cta">
              <a href="#" class="btn">Cadastre-se Gratuitamente</a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>


</div><!-- main wrapper -->

<?php get_footer(); ?>