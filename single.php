<?php
get_header();

if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/single-page');
    endwhile;
else :
    echo "we do not have posts!" ;
endif;

get_footer();