<?php get_header(); ?>

<container class="main-container">
  <articles class="article">
    <?php get_template_part('templates/posts', 'loop'); ?>
  </articles>
  <aside class="aside">
    <?php dynamic_sidebar('sidebar'); ?>
  </aside>
</container>

<?php get_footer(); ?>