<?php
/**
 * archive-laboratorio.php
 *
 * @package Odin
 * @since 2.2.0
 */
global $opts;
get_header('laboratorio'); ?>
<div class="col-md-4 pull-left lab_content">
	<h1 class="col-md-10">Sobre o Imagicas</h1>
	<div class="col-md-12" style="margin-top:10px;float:none;clear:both"></div>
	<p class="intro"><?php echo $opts['lab_intro']; ?></p><!-- .intro -->
</div><!-- .col-md-4 pull-left lab_content -->
<?php
get_footer('contato');
