<nav id="header-top" class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
<div class="navbar-nav">
<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'	 => 'navbar-nav ml-auto',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker(),
				)
			);
			?>
</div></div>
</nav>