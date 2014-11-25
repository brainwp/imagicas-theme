<a id="nav_mobile_toggle" class="glyphicon glyphicon-align-justify" data-open="false"></a>
<div id="nav_mobile">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'home-menu',
					'depth'          => 2,
					'container'      => false,
					'menu_class'     => 'nav navbar-nav',
					'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
					'walker'         => new Odin_Bootstrap_Nav_Walker()
					)
				);
				?>
</div><!-- .pull-right -->
