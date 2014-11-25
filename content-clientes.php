<div class="clientes_slider owl-carousel" id="sync1">
	<?php
	$opts = get_option('clientes_options');
	$clientes_img = get_post_meta( get_the_ID(), 'clientes_imgs', true );
	$clientes_img = explode( ',', $clientes_img );
	$i = 0;
	foreach ( $clientes_img as $image_id ) {
		if(!empty($image_id)){
			$img = wp_get_attachment_image_src($image_id,'th_clientes',false);
			echo '<div class="item principal_img" data-num-slick="'.$i.'"><img data-lazy="'.$img[0].'" data-width="'.$img[1].'" data-height="'.$img[2].'"></div>';
			$i++;
		}
	}
	?>
</div><!-- #sync1.clientes_slider owl-carousel -->
<div id="frase">
	<div class="container">
		<div class="row">
			<div class="col-md-6 pull-right content_frase">
				<div class="col-md-12 pull-left icone-left"></div>
				<p><?php echo wp_strip_all_tags(get_the_content()); ?></p>
				<div class="col-md-12 pull-left icone-right"></div>
			</div><!-- .col-md-5 pull-right content_frase -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #frase -->
<header class="nav_clientes">
	<div class="container">
		<div class="row">
		<?php if($opts['clientes_logo_ativar'] == 'true'): ?>
			<a href="<?php echo home_url();?>" class="pull-left">
				<img src="<?php bloginfo('template_url');?>/assets/images/logo-clientes.png">
			</a><!-- .pull-left -->
		<?php endif; ?>
		<nav class="menu_principal pull-right">
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
			</nav><!-- .pull-right -->
			<?php get_template_part('content','nav-mobile'); ?>
		</div><!-- .row -->
	</div><!-- .container -->
</header><!-- .nav_clientes -->
<footer class="slider_clientes_nav">
	<div class="container">
		<div class="row">
			<div class="col-md-4 pull-left author_name">
				<h1><?php the_title();?></h1>
				<?php
				$next_post = get_next_post();
				if($next_post && !empty($next_post)){
					echo '<a class="next" href="'.get_permalink( $next_post->ID ).'"></a>';
				}
				?>
				<?php
				$prev_post = get_previous_post();
				if($prev_post && !empty($prev_post)){
					echo '<a class="prev" href="'.get_permalink( $prev_post->ID ).'"></a>';
				}
				?>
			</div><!-- .col-md-4 author_name -->
			<div class="col-md-2 pull-right icone_nav" data-show="false" id="frase_click">
			</div><!-- .col-md-2 pull-right icone_nav -->
			<div class="clientes_slider_sync col-md-5 pull-right" id="sync2">
				<?php
				$clientes_img = get_post_meta( get_the_ID(), 'clientes_imgs', true );
				$clientes_img = explode( ',', $clientes_img );
				$i = 0;
				foreach ( $clientes_img as $image_id ) {
					if(!empty($image_id)){
						$img = wp_get_attachment_image_src($image_id);
						echo '<div class="item" data-num-slick="'.$i.'"><div class="inside"><img src="'.$img[0].'"></div></div>';
						$i++;
					}
				}
				?>
			</div><!-- #sync2.clientes_slider_sync owl-carousel -->
			<div id="itens_num" data-num="<?php echo $i;?>"></div><!-- #itens_num -->
		</div><!-- .row -->
	</div><!-- .container -->
</footer><!-- .slider_clientes_nav -->
