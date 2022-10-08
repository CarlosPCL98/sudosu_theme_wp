<?php get_header(); ?>

<!-- Page Content -->
<div class="container">

  <div class="row">
    <!-- Entrys -->
    <!-- <div class="col-lg-8 ml-1 row">-->
    <div class="col-lg-8">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="card-body post-index rounded mb-1 pt-2 pb-2 d-nowrap || mr-sm-2  ">
            <h2 class="text-dark title-post text-break || mt-md-3 mb-md-2 mt-lg-2 || mb-sm-2 mt-2 ">
              <?php the_title(); ?>
            </h2>

            <span class="date_post rounded p-1 d-block text-break text-center " style="max-width:170px"><?php $lang = get_bloginfo("language");
                                                                                                        if ($lang == 'es') {
                                                                                                          $date = "Fecha:";
                                                                                                        } else {
                                                                                                          $date = "Date:";
                                                                                                        }
                                                                                                        echo $date; ?> <?php the_time('j F, Y'); ?> </span>

            <?php
            //Checks if there are featured images and if so, places them.
            /*if ( has_post_thumbnail()) {
              //A traves del array le pasamos las clases a la etiqueta img.
              the_post_thumbnail('post-thumbnails', array(
                'class' => 'img-fluid mb-3'
              ));
            }*/
            ?>

            <div class="mb-3 text-break ">
              <?php the_content(); ?>
            </div>
            <br />
            <p class="category-author  float-right m-0 pb-0"><?php $lang = get_bloginfo("language");
                                                              if ($lang == 'es') {
                                                                $author = "Autor:";
                                                              } else {
                                                                $author = "Author:";
                                                              }
                                                              echo $author; ?> <?php the_author(); ?> <?php $lang = get_bloginfo("language");
                                                                                                      if ($lang == 'es') {
                                                                                                        $categories = "Categorias:";
                                                                                                      } else {
                                                                                                        $categories = "Categories:";
                                                                                                      }
                                                                                                      echo $categories; ?> <span> <?php the_category(' / '); ?> </span>
              <!--Etiquetas: <?php //the_tags('',' / ',''); 
                              ?> -->
            </p>
            <br />
            <br />
          </div>

          <!-- Comments -->
          <!-- <div class=" card-body col-sm-12"> updating 10/04/22 -->
          <div class=" card-body post-index rounded mb-1 pt-2 pb-2 d-nowrap || mr-sm-2">
            <?php
            //Check comments and if enabled, call them.
            if (comments_open() || get_comments_number()) :
              comments_template();
            endif;
            ?>
          </div> <!-- End  Comments -->
        <?php endwhile;
      else : ?>
        <p>Lo siento, no hemos encontrado ningún post</p>
      <?php endif; ?>

    </div>
    <!-- End entrys -->
    <!-- Sidebar Widgets Column -->
    <?php get_sidebar(); ?>
    <!-- End sidebar Widgets Column -->
  </div>
</div>
<!-- Footer -->
<?php get_footer(); ?>