<section class="spotlight">
  <div class="image">

    <?php the_post_thumbnail('square'); ?>
    <?php if( have_rows('icons_footer') ) : ?>
      <footer class="social-footer flex">
        <?php while( have_rows('icons_footer') ) : the_row(); ?>
          <a target="_blank" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('social_icon'); ?></a>
        <?php endwhile; ?>
      </footer>
    <?php endif; ?>
  </div>
  <div class="content">
    <h2 class="line-between"><?php the_title(); ?></h2>
  <?php the_content(); ?>
  </div>
</section>
