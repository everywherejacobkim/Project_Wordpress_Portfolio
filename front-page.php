<?php 

get_header(); 

?>

<div class="section">
<h2 class="sectionTitle">Projects & Blogs</h2>
<?php


//Projects & Blogs
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
</div>


<div class="section">
<h2 class="sectionTitle">Tech Skills</h2>
<?php


//Tech skills query
$skills_query = new WP_Query(
  array(
    'category_name'   => 'skill',
    'posts_per_page'  => '2',
  ) 
);

if ( $skills_query -> have_posts() ) :
  while ( $skills_query -> have_posts() ) :
    $skills_query -> the_post();
    get_template_part('template-parts/content-skills');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif;  

?>
</div>


<?php

get_footer();