<?php ?>
<article <?php post_class(); ?>>

<div class="flip-card">
  <div class="flip-card-inside">
      <div class="flip-card-front">
        <h2 class="entry-title">
          <?php the_title(); ?>
        </h2>   
      </div>

      <div class="flip-card-back">
        <?php the_post_thumbnail(); ?>     
      </div>
</div>

</article>