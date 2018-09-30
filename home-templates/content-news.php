<!-- news -->
<section id="news" class="wrapper style5 special alt">
  <div class="inner">
    <header>
      <h2 class="line-between">News</h2>
    </header>

    <div class="flex">

    <?php //* The Query
      $exec_query = new WP_Query( array (
      'post_type' => 'news',
      //  'job_role'  => 'executive',
      //'category' => 4
      'posts_per_page' => 6
      ) );


      //* The Loop
      if ( $exec_query->have_posts() ) { ?>
      <ul class="flex cards">
      <?php while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>

      <li>
        <h3>
          <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </h3>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('widescreen'); ?>
        <?php the_excerpt(); ?>

      </li>
      <?php
       endwhile;
       //* Restore original Post Data
       wp_reset_postdata();}?>
    </ul>
  </div><!-- .flex -->
</section>
