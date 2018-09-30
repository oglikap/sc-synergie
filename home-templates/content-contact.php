<!-- CONTACT -->

<section id="contact">
  <div class="wrapper style2">
    <section class="container special">
      <div class="row">
        <div class="12u">
          <header>
            <h2>If you want to know how we can help you?</h2>
          </header>
        </div>
        <div class="12u flex">

          <?php
            if( get_field('contact_form') ) : the_field('contact_form'); endif;
           ?>
        </div>
        <div class="12u">
          <?php echo do_shortcode('[gmap-embed id="207"]');?>
        </div>
      </div>
    </section>
  </div>
</section><!-- #contact -->
