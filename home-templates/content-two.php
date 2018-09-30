<!-- Two -->
  <section id="two" class="wrapper style5 special">
    <div class="inner">
      <header>

        <?php if( have_rows('scynergie') ): ?>
          <?php while( have_rows('scynergie') ): the_row(); ?>

        <h2 class="line-between"><?php if( get_sub_field('header') ): the_sub_field('header'); endif; ?></h2>
      </header>
      <ul class="features">
        <li class="icon fa-sun-o">
          <h3><?php  if( get_sub_field('header_1') ) : the_sub_field('header_1'); endif; ?></h3>
          <?php  if( get_sub_field('solar') ) : the_sub_field('solar'); endif; ?>
        </li>
        <li class="icon fa-heart-o">
          <h3><?php  if( get_sub_field('header_2') ) : the_sub_field('header_2'); endif; ?></h3>
          <?php  if( get_sub_field('care') ) : the_sub_field('care'); endif; ?>
        </li>
        <li class="icon fa-hospital-o">
          <h3><?php  if( get_sub_field('header_3') ) : the_sub_field('header_3'); endif; ?></h3>
          <?php  if( get_sub_field('scynergie') ) : the_sub_field('scynergie'); endif; ?>
        </li>
        <li>
          <?php
          $image = get_sub_field('image');
            if( !empty($image) ):
              $caption = $image['caption'];

              if( $caption ) : ?>

          <div class="wp-caption">
            <?php endif; ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
              <?php if( $caption ) : ?>
                <p class="wp-caption-text"><small><?php echo $caption; ?></small></p>
              <?php endif; ?>
            <?php endif; ?>
          </div>
        </li>
      </ul>
    </div>

         <?php
       endwhile; endif; ?>
          </section>
