<!-- five -->
<section id="five" class="wrapper style5 special">
  <div class="inner">
    <header>
      <h2 class="line-between">About us</h2>
      <p style="margin:auto;width:80%;">We bounced into each other at Entebbe Airport in July 2017. From that moment we have founded a five member team that works together on a great and aligned goal…. To provide clean energy to the people living in Sub Sahara Africa and  improve their healthcare situation, especially  in remote areas where connectivity is poor.</p>
    </header>

    <div class="flex">
      <?php $args = array( 'category' => 3, 'order_by' => 'date', 'posts_per_page' => -1 );
      $postslist = get_posts($args);
      foreach( $postslist as $post ) :
        setup_postdata( $post ); ?>
        <div class="hvrbox">
          <a href="<?php the_permalink(); ?>">
            <span class="hvrbox-layer_bottom"><?php the_post_thumbnail('hvrbox'); ?></span>
          </a>
          <div class="hvrbox-layer_top hvrbox-layer_scale">
            <div class="hvrbox-text">
              <h3>
                <a href="<?php the_permalink();?>">
                  <?php the_title(); ?>
                </a>
              </h3>
              <a href="<?php the_permalink(); ?>">
                <?php the_excerpt(); ?>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach;
      wp_reset_postdata(); ?>
    </div>
  </div>
</section>
