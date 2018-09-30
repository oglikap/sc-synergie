<!-- Three -->
<?php if( have_rows('solar_care') ):
  while( have_rows('solar_care') ): the_row();
  ?>
  <section id="three" class="wrapper alt style5" style="margin-top:-3em;margin-bottom:-2em;">
    <div class="inner">
      <header>
        <h2 class="line-between">
          <?php if( get_sub_field( 'header' ) ) : the_sub_field('header'); endif; ?>
        </h2>
        <h3 style="text-align:center;color:orange;">
          <?php if( get_sub_field( 'subheader' ) ) : the_sub_field('subheader'); endif; ?>
        </h3>
      </header>
      <?php if( get_sub_field( 'header_text' ) ) : the_sub_field('header_text'); endif; ?>

      <?php if( have_rows('solar') ) :
         while( have_rows('solar') ) : the_row(); ?>
      <ul class="features">
        <li class="icon fa-lightbulb-o">
          <?php if( get_sub_field('solution') ) : the_sub_field('solution'); endif; ?>
        </li>
        <li class="icon fa-balance-scale">
          <?php if( get_sub_field('services') ) : the_sub_field('services'); endif; ?>
        </li>
        <li class="icon fa-sun-o">
          <?php if( get_sub_field('case') ) : the_sub_field('case'); endif; ?>
        </li>
        <li>
          <?php $image = get_sub_field('image'); ?>

          <?php
            if( !empty($image) ):
              $caption = $image['caption'];

              if( $caption ) : ?>

            <div class="wp-caption">

              <?php endif; ?>

              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">

                <?php if( $caption ) : ?>
                  <p class="wp-caption-text"><small><?php echo $caption; ?></small></p>

            </div>

          <?php endif; endif; ?>
        </li>
      </ul>
    <?php endwhile; endif; ?>

    </div>
  </section>
<?php endwhile; endif; ?>
