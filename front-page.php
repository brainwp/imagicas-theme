<?php
/**
 * front-page
 *
 * @package Odin
 * @since 2.2.0
 */

get_header('home'); ?>
<header id="content" class="col-md-12 home-content" role="main">
	<?php
	$logo_home = get_option( 'home_options' );
	$logo_home = wp_get_attachment_image_src( $logo_home['logo_home'], 'full', false );
	$logo_home = $logo_home[0];
	?>
	<div class="logo-home col-md-12" style="background:url('<?php echo $logo_home; ?>') center no-repeat;">
	</div>
	<div class="col-md-6 col-md-offset-3">
			<nav id="nav-home">
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
	</div>
</header><!-- #content -->
<?php
get_footer('home');
