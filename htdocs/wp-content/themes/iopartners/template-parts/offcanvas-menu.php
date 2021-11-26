<div class="offcanvas offcanvas-end" tabindex="-1" id="site-navigation" aria-labelledby="offcanvasLabel">
  
<div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasLabel">&nbsp;</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  
  <div class="offcanvas-body">
    <div class="container-fluid h-100">

      <div class="row h-100">

        <div class="col col-12 col-md-8 right d-flex align-items-center order-md-2">
          <div class="content">
            <?php
              wp_nav_menu(array(
                'theme_location' 	=>	'menu-1',
                'menu_id'        	=>	'primary-menu',
                'menu_class'	 	=>	'navbar-nav',
                'container_class'	=>	'',
                'container_id'		=>	'',
                'fallback_cb'     	=>	'WP_Bootstrap_Navwalker::fallback',
                'walker'          	=>	new WP_Bootstrap_Navwalker(),
              ));
            ?>
            <div class="contact">
              <ul class="navbar-nav">
                <li><a href="tel:+358 947 803 300">+358 947 803 300</a></li>
                <li><a href="mailto:office@iopartners.fi">office@iopartners.fi</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col col-12 col-md-4 left d-flex align-items-end justify-content-md-center order-md-1">
          <?php
            wp_nav_menu(array(
              'theme_location' 	=>	'menu-2',
              'menu_id'        	=>	'legal-menu',
              'menu_class'	 	=>	'navbar-nav',
              'container_class'	=>	'',
              'container_id'		=>	'',
              'fallback_cb'     	=>	'WP_Bootstrap_Navwalker::fallback',
              'walker'          	=>	new WP_Bootstrap_Navwalker(),
            ));
          ?>
        </div>

      </div>

    </div>
  </div>
</div>