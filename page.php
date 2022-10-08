<?php get_header(); ?>
<!-- Page Content -->
<div class="container container_page">
  <!-- Entrys -->
  <div class="col-lg-12 ">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="card-body post-index rounded mb-1 pt-2 pb-2 d-nowrap || mr-sm-2  ">
          <h2 class="text-dark title-post mb-lg0 || mt-lg-2 || mb-sm-2 pb-sm-2 ">
            <?php the_title(); ?>
          </h2>
          <?php
          //Checks if there are featured images and if so, show them.
          if (has_post_thumbnail()) {
            echo '<br>';
            //Through the array we pass the classes to the img tag.
            the_post_thumbnail('post-thumbnails', array(
              'class' => 'img-fluid mb-3'
            ));
          }
          ?>
          <div class=" mb-3 text-break  ">
            <?php the_content(); ?>
          </div>
        </div>
      <?php endwhile;
    else : ?>
      <p>Lo siento, no hemos encontrado ningún post.</p>
    <?php endif; ?>
  </div>
</div>
<!-- /.container -->
<!-- Footer -->
<?php get_footer(); ?>