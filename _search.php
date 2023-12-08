
<?php
/*
Template Name: Search Page
*/

//the content of page.php and now you can do what you want.
?>

<?php get_header(); ?>

<div id="principal">

<div class="container">

<?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h2>Exibindo resultados para a sua busca</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    
                    <div class="item">
                      <div class="imagem">
                        <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail('thumb-noticia'); ?>
                        </a>
                      </div>
                      <div class="conteudo">
                      <h4>
                      <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                      </a>
                    </h4>
                    <p><?php the_field('chamada'); ?></p>
                      </div>                    
                  </div>  
                    
                 <?php
        }
    }else{
?>
        <h2 style='font-weight:bold;color:#000'>Nenhum resultado encontrado</h2>
        <div class="alert alert-info">
          <p>Desculpe, não foi possível encontrar nenhum conteúdo com as palavras-chave fornecidas.</p>
        </div>
<?php } ?>

</div>
</div>

<?php get_footer(); ?>

