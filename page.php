<?php
/**
 * page-home
 *
 * @package Odin
 * @since 2.2.0
 */
get_header('laboratorio'); ?>
<div class="col-md-8 col-sm-12 col-xs-12 pull-left contato_content">

	<?php while ( have_posts() ) : the_post(); ?>
	<?php // Include the page content template.
		get_template_part( 'content', 'page' ); ?>

	<?php endwhile; ?>

</div><!-- .col-md-8 -->
<?php
get_footer('laboratorio');
