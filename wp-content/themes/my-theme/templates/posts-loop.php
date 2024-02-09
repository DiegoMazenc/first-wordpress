    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="article-content">
      <a href="<?php the_permalink(); ?>">
       <?php the_post_thumbnail(); ?>
      </a>
      <h1> <?php the_title(); ?></h1>
      <p> <?php the_content(); ?></p>
      </div>

    <?php
    endwhile;
    endif;
    ?> 
