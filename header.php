<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=600, initial-scale=1.0">
  <title>Namhyung Kim's Portfolio</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
 
  <h1 class="site-title">
    <?php if (!is_home()) : ?>
      <a href="<?php echo home_url();?>">
        <div class="headerTitle1"> <?php bloginfo( 'name' ); ?></div>
        <div class="headerTitle2"> <?php bloginfo( 'name' ); ?></div>
      </a>
      <h3 class="site-description"><?php bloginfo('description');?></h3>
    <?php else: ?>
        <div class="headerTitle1"> <?php bloginfo( 'name' ); ?></div>
        <div class="headerTitle2"> <?php bloginfo( 'name' ); ?></div>
    <h3 class="site-description"><?php bloginfo('description');?></h3>
    <?php endif; ?>
  </h1>



<?php
?>

<nav class="menus">
  <span class="menuSpan">MENUS</span>
  <a class="btn-home" href="<?php echo home_url();?>">
    <span class="span1">H</span>
    <span class="span2">Home</span>
  </a>

  <a class="btn-about" href="https://langara.live/namhyung1/aboutme/" style="text-decoration: none;" >
    <span class="span1">A</span>
    <span class="span2">About</span>
  </a>

  <a class="btn-projects" href="https://langara.live/namhyung1/project/" style="text-decoration: none;" >
    <span class="span1">P</span>
    <span class="span2">Project</span>
  </a>

  <a class="btn-contact" href="https://langara.live/namhyung1/contact/" style="text-decoration: none;" >
    <span class="span1">C</span>
    <span class="span2">Contact</span>
  </a>
</nav>

</header>

<div id="primary" class="content-area">
  <main id="main" class="site-main">