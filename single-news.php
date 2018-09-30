<?php

 get_header(); ?>

 <?php
 // Start the loop.
 if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

   <!-- Main -->
   <article id="main">

     <section class="wrapper alt style5">
       <div class="inner">
         <?php get_template_part( 'template-parts/content', 'news' ); ?>
       </div>
     </section>

       <?php endwhile; else : ?>
     	   <p><?php _e( 'Sorry, there doesn\'t appear to be anything here.' ); ?></p>
       <?php endif; ?>
       <footer>
         <?php include( get_template_directory() . '/includes/navigation.php' ); ?>
       </footer>
   </article>

<?php get_footer(); ?>
