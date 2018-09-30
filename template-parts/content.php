<div class="row">
  <div class="12u">
    <?php the_content(); ?>

    <?php
      $args = array('category' => 4, );
      $postslist = get_posts($args);
      foreach ($postslist as $post) :

        setup_postdata($post); ?>

        <article class="news-item">
          <header class="news-item-header">
            <h3>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
          </header>
          <div class="news-item-content">

            <?php
            if( has_post_thumbnail() ) {
              $image = '';
              $title_attribute = the_title_attribute( 'echo=0' );
              $image .= '<figure class="post-featured-image">';
              $image .= '<a href="' . get_permalink() . '" title="'. $title_attribute .'">';
              $image .= get_the_post_thumbnail( $post->ID, 'square', array( 'title' => $title_attribute , 'alt' => $title_attribute ) ).'</a>';
              $image .= '</figure>';

              echo $image;
              }
             ?>

            <?php the_excerpt(); ?>
          </div>
        </article>

      <?php endforeach; ?>

  </div>
</div>
