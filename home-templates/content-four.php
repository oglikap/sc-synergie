<?php if( have_rows('solar_care') ):
  while( have_rows('solar_care') ): the_row();
  ?>
<section id="four" class="wrapper alt style5" style="margin-top:-3em;margin-bottom:-2em;">
  <div class="inner">
    <header>
      <h2 class="line-between" style="padding-top:1em;"><?php if( get_sub_field('header_2') ) : the_sub_field('header_2'); endif; ?></h2>
      <h3 style="text-align:center;color:orange;">
        <?php if( get_sub_field( 'subheader_2' ) ) : the_sub_field('subheader_2'); endif; ?>
      </h3>
      <?php if( get_sub_field( 'header_text_2' ) ) : the_sub_field('header_text_2'); endif; ?>
    </header>

    <?php if( have_rows('care') ): ?>
      <?php while( have_rows('care') ): the_row(); ?>

        <ul class="features">
          <li class="icon fa-lightbulb-o">
            <?php if( the_sub_field('solution') ): the_sub_field('solution'); endif; ?>
          </li>
          <li class="icon fa-balance-scale">
            <?php if( the_sub_field('services') ): the_sub_field('services'); endif; ?>
          </li>
          <li>
            <?php
            $image_1 = get_sub_field('image_1');
              if( !empty($image_1) ):
                $caption_1 = $image_1['caption'];

                if( $caption_1 ) : ?>

              <div class="wp-caption">

                <?php endif; ?>

                <img src="<?php echo $image_1['url']; ?>" alt="<?php echo $image_1['alt'] ?>">

                  <?php if( $caption_1 ) : ?>
                    <p class="wp-caption-text"><small><?php echo $caption_1; ?></small></p>

              </div>

            <?php endif; ?>
          <?php endif; ?>
          </li>
          <li class="icon fa-envira">
            <?php if( the_sub_field('proof') ): the_sub_field('proof'); endif; ?>
          </li>
          <li class="icon fa-simplybuilt">
            <?php if( get_sub_field('objectives') ): the_sub_field('objectives'); endif; ?>
          </li>
          <li>
            <?php
            $image_2 = get_sub_field('image_2');
              if( !empty($image_2) ):
                $caption_2 = $image_2['caption'];

                if( $caption_2 ) : ?>

              <div class="wp-caption">

                <?php endif; ?>

                <img src="<?php echo $image_2['url']; ?>" alt="<?php echo $image_2['alt'] ?>">

                  <?php if( $caption_2 ) : ?>
                    <p class="wp-caption-text"><small><?php echo $caption_2; ?></small></p>

              </div>

            <?php endif; ?>
            <?php endif; ?>
          </li>
        </ul>

    <?php endwhile; endif; ?>
  </div>
</section>
<?php endwhile; endif; ?>
