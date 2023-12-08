<ul class="carrossel-categorias">
      <?php
        $loop = new WP_Query(array(
          'post_type' => 'page',          
          'posts_per_page' => -1,
          'post__in' => array( 662, 666, 660, 626, 668, 664),
          'orderby' => 'rand'
        ));
        if ($loop->have_posts()) :
          while ($loop->have_posts()) : $loop->the_post(); ?>
            <li>
              <div class="wrapper">
                <h3><?php the_title(); ?></h3>
                <img src="<?php the_field('foto_categoria'); ?>" alt="">
                <a href="<?php the_permalink(); ?>"  class="overlay">
                  <p><?php the_field('chamada_categoria'); ?></p>
                  <span class="btn">Saiba mais</span>
                </a>
              </div>
            </li>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </ul>