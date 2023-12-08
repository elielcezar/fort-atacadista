<?php get_header(); ?>


<div id="principal">

  <div class="container">

    <div class="conteudo">

    <h1><?php the_title(); ?></h1>

      <?php the_content(); ?>

      <?php
      $images = acf_photo_gallery('galeria', $post->ID);
      if (count($images)) :
      ?>
      <div class="galeria">
        <?php
          foreach ($images as $image) :
            $id = $image['id']; // The attachment id of the media
            $title = $image['title']; //The title
            $caption = $image['caption']; //The caption
            $full_image_url = $image['full_image_url']; //Full size image url
            //$full_image_url = acf_photo_gallery_resize_image($full_image_url, 920, 720);
            $thumbnail_image_url = acf_photo_gallery_resize_image($full_image_url, 220, 220); //Get the thumbnail size image url 150px by 150px
            $url = $image['url']; //Goto any link when clicked
            $target = $image['target']; //Open normal or new tab
            $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
            $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
          ?>

        <a href="<?php echo $full_image_url; ?>" data-fancybox="gallery">
          <img src="<?php echo $thumbnail_image_url; ?>">
        </a>





        <?php endforeach; ?>
      </div><!-- CARROSSEL -->
      <?php endif; ?>

    </div>

    <!--div class="sidebar">

            <?php if (is_active_sidebar('sidebar')) : ?>

                <?php dynamic_sidebar('sidebar'); ?>

            <?php endif; ?>  

        </div-->

  </div>



</div>





<?php get_footer(); ?>