<header>
  <h2 class="line-between"><?php the_title(); ?></h2>
  <ul class="actions">
    <li><em>Posted <?php the_time(get_option('date_format')); ?></em></li>
  </ul>
</header>
<section class="news-item">
  <div class="image right">
    <?php the_post_thumbnail('spotlight'); ?>
  </div>
  <div class="content">
  <?php the_content(); ?>
  <hr />
<!--  <ul class="actions">
    <li><a href="#" class="g-plus" data-action="share" data-height="24"></a></li>
    <li><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-share-button fb-xfbml-parse-ignore" data-href="<?//php echo get_permalink(); ?>" data-layout="button_count" data-size="small" target="_blank">Sharre</a></li>
    <li>
      <a class="twitter-share-button" href="https://twitter.com/inent/tweet">Tweet</a>
    </li>
  </ul>-->
  <?php echo DISPLAY_PREMIUM_RECTANGLE_ICONS(); ?> 
  </div>
</section>
