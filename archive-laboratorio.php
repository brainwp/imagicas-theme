<?php
/**
 * archive-laboratorio.php
 *
 * @package Odin
 * @since 2.2.0
 */
global $opts;
get_header('laboratorio'); ?>
<div id="is_lab" style="display:none" data-lab="true"></div>
<div class="col-md-4 pull-left lab_content">
	<h1 class="col-md-11">Sobre o Imagicas</h1>
	<div class="col-md-12" style="margin-top:10px;float:none;clear:both"></div>
	<p class="intro"><?php echo $opts['lab_intro']; ?></p><!-- .intro -->
</div><!-- .col-md-4 pull-left lab_content -->
<div class="col-md-3 col-md-offset-1 lab_content_simples">
	<?php query_posts('lab_tax=simples&posts_per_page=7'); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<a href="<?php echo get_post_meta( get_the_ID(), 'link_lab', true ); ?>" class="col-md-12 box_simples">
		<span class="pull-left titulo"><?php the_title(); ?></span>
		<span class="pull-right acesse">acesse >></span>
	</a><!-- .col-md-12 box_simples -->
	<?php endwhile; ?>
</div><!-- .col-md-4 lab_content_simples -->
<div class="col-md-3 pull-right lab_content_destaque">
	<?php query_posts('lab_tax=destacado&posts_per_page=2'); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<a href="<?php echo get_post_meta( get_the_ID(), 'link_lab', true ); ?>" class="col-md-12 box_destaque">
		<span class="pull-left titulo"><?php the_title(); ?></span>
		<?php the_post_thumbnail('medium'); ?>
	</a><!-- .col-md-12 box_destaque -->
	<?php endwhile; ?>
</div><!-- .col-md-5 lab_content_destaque -->
<?php
get_footer('laboratorio');
