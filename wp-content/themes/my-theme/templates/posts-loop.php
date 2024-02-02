<div class="col-6 col-s-9">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div> <?php the_post_thumbnail(); ?></div>
      <h1> <?php the_title(); ?></h1>
      <p> <?php the_content(); ?></p>
    <?php
    endwhile;
    endif;
    ?> 
  </div>
