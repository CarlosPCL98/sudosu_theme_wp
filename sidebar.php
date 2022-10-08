<div class="col-lg-4 container col-sm-12  ">
    <?php dynamic_sidebar('sidebar-sudo'); ?>

    <?php if (is_active_sidebar('sidebar-derecha')) : ?>
        <?php dynamic_sidebar('sidebar-derecha'); ?>
    <?php else : ?>
        <!-- Time to add some widgets! -->
    <?php endif; ?>
</div>
</div>