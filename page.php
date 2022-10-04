
<?php get_header(); ?>

<!-- Page Content -->
<div class="container container_page">

    <!-- Entradas -->
    <div class="col-lg-12 ">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <!-- Entrada  -->
      <div class="card-body post-index rounded mb-1 pt-2 pb-2 d-nowrap || mr-sm-2  ">
            <h2 class="text-dark title-post mb-lg0 || mt-lg-2 || mb-sm-2 pb-sm-2 ">
                <?php the_title(); ?>
            </h2>
        
            <?php 
            //Revisa si existe imagenes destacadas y si existe la coloca.
            if ( has_post_thumbnail()) { echo '<br>';
              //A traves del array le pasamos las clases a la etiqueta img.
              the_post_thumbnail('post-thumbnails', array(
                'class' => 'img-fluid mb-3'
              ));
            }
            ?>

            <div class=" mb-3 text-break  ">

              <?php the_content(); ?>
            </div>

       </div>


     <?php endwhile; else : ?>
         <p>Lo siento, no hemos encontrado ningún post.</p>
     <?php endif; ?> 

    </div>



</div>
<!-- /.container -->

<!-- Footer -->
<?php get_footer(); ?>