<?php
/**
 * page-home
 *
 * @package Odin
 * @since 2.2.0
 */
get_header('contato'); ?>
<div class="col-md-4 col-sm-12 col-xs-12 pull-right contato_content">
	<?php while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
	<?php endwhile; ?>
</div><!-- .col-md-4 pull-right contato_content -->
<?php
get_footer('contato');
