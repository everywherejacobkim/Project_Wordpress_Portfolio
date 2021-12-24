<?php ?>
<article <?php post_class(); ?>>
<h2 class="entry-title">
  <?php the_title(); ?>
</h2>
  <div class="entry-thumbnail">
    <a href="<?php the_permalink();?>">
      <?php the_post_thumbnail(); ?> 
    </a>
</div>

  <div class="entry-content">
    <?php
      if( is_single() ):
          the_title();
      else: ?>
          <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
    <?php endif ?>
  </div>

</article>