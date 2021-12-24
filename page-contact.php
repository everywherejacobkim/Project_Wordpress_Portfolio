<?php 
get_header(); 
?>

<div class="contactTitle1">
    <?php  the_title(); ?>
</div>

<div class="contactTitle2">
    <?php  the_title(); ?>
</div>

<section class="sectionContact">
   <h1 class="sectionContactTitle">GET IN TOUCH</h1>

   <form class="contactForm">

      <div class="inputForm short">
         <label class="label" for="name">Name</label>
         <input id="name" class="inputBox" type="text" required>
         
      </div>

      <div class="inputForm short">
         <label class="label" for="email">E-mail</label>
         <input id="email" class="inputBox" type="email" required>
       
      </div>

      <div class="inputForm long">
         <label class="label" for="message">Message</label>
         <input id="message" class="inputBox" type="text" required>
     
      </div>

      <div class="submitBtnWrap">
         <input class="submitBtn" type="submit" value="Submit">
      </div>

   </form>

</section>

<?php

get_footer();