<?php
/*
Template Name: Categorias
*/
//the content of page.php and now you can do what you want.
?>

<?php get_header(); ?>


<div id="principal">  
  <div class="container">

    <div class="conteudo">
      <div id="noticias">        
        <h2 style='font-weight:bold;color:#000'>404</h2>
        <div class="alert alert-info">
          <p>Desculpe, parece que a página que você procura não existe.</p>
        </div>
        <h3>Gostaria de tentar pesquisar em todo o site?</h3>
        <?php get_search_form(); ?>
      </div>
    </div>

    <?php get_template_part( 'sidebar' ); ?>  

  </div>
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