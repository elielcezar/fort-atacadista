<?php
/*
Template Name: Padarias
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

<div id="principal">
<h1><?php the_title(); ?></h1>
  <div class="container">
    <div class="conteudo">
      <div id="noticias">
        <?php
        $loop = new WP_Query(array(
          'post_type' => 'post',
          'category_name' => 'padarias',
          'posts_per_page' => 3,
          'orderby' => 'date',
          'order' => 'DESC'
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="item">
              <div class="thumb-noticia">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('thumb-noticia'); ?>
                </a>
              </div>
              <div class="content">
                <?php
                $post_tags = get_the_tags();
                ?>
                <div class="sobre">
                  <div class="assunto assunto-<?php if ($post_tags) {
                                                foreach ($post_tags as $tag) {
                                                  echo $tag->term_id;
                                                }
                                              } ?>">
                    <?php
                    if ($post_tags) {
                      foreach ($post_tags as $tag) {
                        echo $tag->name;
                      }
                    }
                    ?>
                  </div>
                  <div class="categoria">
                    <?php 
                    $categories = get_the_category();

                    if ( ! empty( $categories ) ) {
                      echo esc_html( $categories[0]->name );	
                    }
                    ?>
                  </div>
                  <div class="data">
                    <?php
                    $post_date = get_the_date('m\/d\/Y');
                    echo $post_date;
                    ?>
                  </div>
                </div>
                <h3>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h3>
                <p><?php the_field('chamada'); ?></p>
                <div class="cta">
                  <a href="<?php the_permalink(); ?>" class="btn">Leia mais</a>
                </div>
              </div>
            </div>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
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