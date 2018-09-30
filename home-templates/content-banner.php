<!-- Banner -->
  <section id="banner">
    <div class="inner">
      <ul class="navi">
        <li>
          <a class="button one scrolly" href="#one">drive</a>
        </li>
        <li>
          <a class="button two scrolly" href="#two">synergie</a>
        </li>
        <li>
          <a class="button three scrolly" href="#five">about us</a>
        </li>
        <li>
          <a class="button four scrolly" href="#news">news</a>
        </li>
      </ul>
      <div class="box">
        <h2><?php the_custom_logo(); ?></h2>
        <p>
          <?php if( get_field('slogan') ): the_field('slogan'); endif; ?>
          <?php bloginfo( 'description' ); ?>

        </p>
      </div>
      <a href="#one" class="more scrolly">More</a>
    </div>
  </section>
