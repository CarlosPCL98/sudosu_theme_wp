<?php get_header(); ?>

  <div class="container">
      

  <!-- Page Content -->
    <div class="row">
      <!-- Entradas -->
      <div class="col-lg-8">


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <!-- Entrada  -->
         <div class="card-body post-index  rounded mb-1 pt-1">
          <a href="<?php the_permalink(); ?>">
            <h2 class="text-dark title-post text-break ||  mb-md-2 mt-lg-2 || mb-sm-2 mt-2 "><?php the_title(); ?></h2>
          </a>

          <span class="date_post rounded p-1 d-block text-break text-center " style="max-width:170px"><?php $lang=get_bloginfo("language"); if($lang == 'es') { $date = "Fecha:"; }else{ $date = "Date:"; } echo $date; ?> <?php the_time('j F, Y'); ?> </span>
          

          <?php 
          //Revisa si existe imagenes destacadas y si existe la coloca.
          if ( has_post_thumbnail()) {
            //A traves del array le pasamos las clases a la etiqueta img.
            the_post_thumbnail('post-thumbnails', array(
              'class' => 'img-fluid mb-3'
            ));
          }
          ?>
              <div class="text-break ">
              <?php the_excerpt(); ?>
              </div>
              
              <a href="<?php the_permalink(); ?>" class="btn btn-dark"><?php $lang=get_bloginfo("language"); if($lang == 'es') { $read_more = "Leer más"; }else{ $read_more = "Read more"; } echo $read_more; ?> &rarr;</a>
              <p class="d-block mb-1 pt-3 float-lg-right float-sm-none mb-0"><?php $lang=get_bloginfo("language"); if($lang == 'es') { $author = "Autor:"; }else{ $author = "Author:"; } echo $author; ?> <?php the_author(); ?>, <?php $lang=get_bloginfo("language"); if($lang == 'es') { $categories = "Categorias:"; }else{ $categories = "Categories:"; } echo $categories; ?> <span class="category_post"> <?php the_category(' / '); ?> </span><!--Etiquetas: <?php //the_tags('',' / ',''); ?> --></p>
         </div>


       <?php endwhile; else : ?>
           <p>Lo siento, no hemos encontrado ningún post.</p>
       <?php endif; ?> 

        <!-- Paginacion --> 
        <div class="mt-4">
          <?php get_template_part('template-parts/content','paginacion'); ?>
        </div><!--Fin paginación -->

      </div>

      <!--Aside-->
        <?php get_sidebar(); ?><!--Fin aside-->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<!-- Footer -->
<?php get_footer(); ?>