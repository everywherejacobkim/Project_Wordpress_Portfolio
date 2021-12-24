<?php 
get_header(); 
?>

<div class="sectionTitle">
    <?php  the_title(); ?>
</div>

<div class="sectionAboutMe">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
    endwhile; else: ?>
        <p>Sorry, no contents!</p>
    <?php endif; ?>
</div>

<?php

get_footer();

