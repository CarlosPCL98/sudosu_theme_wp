<?php get_header();?>
  <!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="card-body col-md-8">
        <p><?php _e( 'Pagina no encontrada , quieres realizar una busqueda?', 'sudosu' ); ?></p>
            <div class=" ml-0 col-md-8">
                <?php get_search_form(); ?>
            </div>
        </div>
        <?php get_sidebar(); ?>
        </div>
    </div>
</div><!-- /.container -->
<!-- Footer -->
<?php get_footer(); ?>