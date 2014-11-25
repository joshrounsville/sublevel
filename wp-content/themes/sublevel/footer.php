
    <footer>
      <div class="container">

        <div class="row">
          <div class="span6">
            <ul class="list-inline">
              <li><img src="<?php echo get_template_directory_uri(); ?>/library/img/structure/sublevel-icon-white.svg" alt="Sublevel Drum Company" width="31" height="42"></li>
              <li>copyright &copy; 2014 Sublevel Drum Company</li>
            </ul>
          </div>
          <div class="span6">
            <nav class="nav-footer">
              <ul>
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><a href="<?php echo get_page_link(7); ?>">About</a></li>
                <li><a href="<?php echo get_page_link(9); ?>">Order</a></li>
                <li><a href="<?php echo get_page_link(11); ?>">Contact</a></li>
                <li class="social">
                  <a href="http://instagram.com/subleveldrumcompany" class="instagram" target="blank"><i class="fa fa-instagram"></i></a>
                </li>
                <li class="social">
                  <a href="https://www.facebook.com/subleveldrumcompany" class="facebook" target="blank"><i class="fa fa-facebook"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>

      </div>
    </footer>

    <?php wp_footer(); ?>

  </body>
</html>