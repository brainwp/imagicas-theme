<?php
/**
 * front-page
 *
 * @package Odin
 * @since 2.2.0
 */

get_header('home'); ?>
<header id="content" class="col-md-6 pull-right home-content" role="main">
	<a href="<?php echo home_url();?>" class="logo-home col-md-12">
	</a>
	<div class="col-md-12">
			<nav class="menu_principal" id="nav-home">
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
	        </nav>
	       <?php get_template_part('content','nav-mobile'); ?>
	</div>
</header><!-- #content -->
<?php
get_footer('home');
