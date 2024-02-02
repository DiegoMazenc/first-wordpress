<?php get_header(); ?>

<?php get_template_part('templates/posts','loop'); ?>

  <div class="col-3 col-s-12">
    <div class="aside">
     <?php dynamic_sidebar('sidebar'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
