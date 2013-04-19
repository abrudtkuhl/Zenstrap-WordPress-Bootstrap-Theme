<?php 
    /* --[ Homepage ] -- */ 
    get_header(); 
?>

<div class="row-fluid">
	<div class="span12">
        <?php get_template_part( 'loop', 'index' ); ?>
	</div><!--#end content -->
</div><!--.end row-fluid -->
<?php get_footer(); ?>