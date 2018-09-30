<div class="wrapper style2" style="background:#f7f6f4;">
  <div class="container">
      <!-- Widgets -->
      <div id="footer-sidebar" class="secondary">
        <div class="row flex">
          <?php
            if( is_active_sidebar('sidebar-2') ) : ?>
              <div class="4u 12u$(small)">
                <?php dynamic_sidebar('sidebar-2'); ?>
              </div>
            <?php endif; ?>
            <?php
              if( is_active_sidebar('sidebar-3') ) : ?>
              <div class="4u 12u$(small)">
                <?php dynamic_sidebar('sidebar-3'); ?>
              </div>
            <?php endif;?>
            <?php
              if( is_active_sidebar('sidebar-4') ) : ?>
              <div class="4u$ 12u$(small)">
                <?php dynamic_sidebar('sidebar-4'); ?>
              </div>
            <?php endif;?>
        </div><!-- .row -->

    </div>
  </div>
</div>
