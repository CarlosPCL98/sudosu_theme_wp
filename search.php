<?php get_header(); ?>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Entrys -->
    <div class="col-lg-8">

      <h3 class="bg-primary rounded bg-dark text-white py-3 mb-5 text-center">Resultados de búsqueda: </h3>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="card-body">
            <a href="<?php the_permalink(); ?>">
              <h2 class="text-dark"><?php the_title(); ?></h2>
            </a>
          </div>
        <?php endwhile;
      else : ?>
        <h5>No se ha encontrado ningún resultado:
          <?php printf(esc_html('%s'), get_search_query()); ?>
        </h5>
        <?php get_search_form(); ?>
      <?php endif; ?>

      <!-- Pagination -->
      <div class="card-body">
        <?php get_template_part('template-parts/content', 'paginacion'); ?>
      </div>
    </div>
    <!-- Sidebar Widgets Column -->
    <?php get_sidebar(); ?>
  </div>
</div>
<!-- Footer -->
<?php get_footer(); ?>