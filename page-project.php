<?php 
get_header(); 
?>

<?php
$blogs_query = new WP_Query(
  array(
    'category_name'   => 'blog',
    'posts_per_page'  => '9',
    'orderby'         => 'rand'
  ) 
);

if ( $blogs_query -> have_posts() ) :
  while ( $blogs_query -> have_posts() ) :
    $blogs_query -> the_post();
    get_template_part('template-parts/content');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif;  

?>

<?php

get_footer();