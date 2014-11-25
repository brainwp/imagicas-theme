<?php
$fb_link = get_option( 'social_options' );
$fb_link = $fb_link['fb_link'];
$footer = get_option( 'geral_options' );
?>
<footer class="col-md-12 contato_footer">
	<div class="container">
		<div class="row">
			<a class="fb_link" href="<?php echo $fb_link; ?>"></a>
			<div class="container items">
				<span class="endereco"><?php echo $footer['endereco_footer']; ?></span>
				<span class="creditos pull-right"><?php echo $footer['creditos']; ?></span>
			</div><!-- .items -->
		</div><!-- .row -->
	</div><!-- .container -->
</footer><!-- .col-md-12 contato_footer -->