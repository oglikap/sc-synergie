<!-- Footer -->
  <div id="footer">

    <div class="container">
      <div class="row">
        <div class="12u">

          <!-- Contact -->
            <section class="contact">
<!--              <header>
                <h3>Nisl turpis nascetur interdum?</h3>
              </header>
              <p>Urna nisl non quis interdum mus ornare ridiculus egestas ridiculus lobortis vivamus tempor aliquet.</p>-->
              <ul class="icons">
<!--                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>-->
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
              </ul>
            </section>

          <!-- Copyright -->
            <div class="copyright">
              <ul class="menu">
                <li><?php echo date('Y') . " ";?>&copy; SC Synergie</li>
              </ul>
            </div>

        </div>

      </div>
    </div>
  </div>



  </div><!-- #page-wrapper -->
  <a href="#page-wrapper" id="return-to-top" class="scrolly"><i class="fa fa-chevron-up"></i></a>

<?php if( is_single() ): ?>
  <script src="https://apis.google.com/js/platform.js" async defer></script>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v3.0&appId=1836969689931800&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
<?php endif; ?>

<?php wp_footer(); ?>

  </body>
</html>
