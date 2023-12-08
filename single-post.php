<?php get_header(); ?>

<section class="banners top desktop carrossel">        
    <div class="item">
        <img src="https://fortfoodservice.mediabrand.com.br/wp-content/uploads/2023/11/Sem-Titulo-1.jpg" alt="">
    </div>
</section>



<div id="principal">
  <div class="container">

    <div class="conteudo">    

      <div class="header">
        <div class="assunto">
          <?php 
            $post_tags = get_the_tags();
            if ( $post_tags ) {
              foreach( $post_tags as $tag ) {
                echo $tag->name; 
              }
            }
          ?>
        </div>  

        <h1><?php the_title(); ?></h1>

        <div class="data">
            <?php
            $post_date = get_the_date('m\/d\/Y');
            echo $post_date;
            ?>
        </div>
      </div>

      <div class="body">
        <?php the_content(); ?>
      </div>

      <div id="compartilhe">
        <div class="container">
          <?php
          global $wp;
          $current_url = home_url(add_query_arg(array(), $wp->request));
          ?>
          <ul>
            <li class="fb"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_url; ?>" target="_blank">Facebook</a></li>
            <li class="twitter"><a href="https://twitter.com/intent/tweet?text=<?php echo $current_url; ?>" target="_blank">Twitter</a></li>
            <li class="wpp"><a href="https://api.whatsapp.com/send?text=<?php echo $current_url; ?>" target="_blank">Whatsapp</a></li>
            <li class="telegram"><a href="https://t.me/share/url?url=<?php echo $current_url; ?>" target="_blank">Telegram</a></li>
            <li class="linkedin"><a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $current_url; ?>" target="_blank">Linkedin</a></li>
          </ul>
        </div>
      </div>

    </div><!-- conteudo -->

    <?php get_template_part( 'sidebar' ); ?>  <!-- sidebar -->
  </div><!-- container -->
</div><!-- principal -->

<section id="patrocinado-1" class="patrocinado">
  <div class="container">
    <div class="row">
      <div class="col-1">
        <a href="#">
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/patrocinado-3.jpg?v2" alt="">
        </a>
      </div>
      <div class="col-2">
        <h4>Conteúdo <strong>patrocinado</strong></h4>
        <p class="data">01/12/2023</p>
        <h2>Como Montar uma Tábua de Frios</h2>
        <p>Encante clientes, amigos e familiares com uma tábua de frios irresistível. Descubra as opções de frios Sadia e transforme seu cardápio numa experiência gastronômica</p>
        <a href="#" class="btn">Saiba mais</a>
      </div>
    </div>
  </div>
</section>

<section id="categorias">
  <h2>Conteúdos Recomendados</h2>
  <div class="container">
    <div class="main-wrapper">
    <?php get_template_part( 'carrossel-categorias' ); ?>     
    </div>
  </div>
</section>



<?php get_footer(); ?>