<?php 
    /* --[ Homepage ] -- */ 
    get_header(); 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    query_posts('showposts=1&paged='.$paged);
?>

<div class="row-fluid">
	<div class="span12">
    <?php get_template_part( 'loop', 'index' ); ?>
	</div><!--#end content -->
</div><!--.end row-fluid -->

<?php get_footer(); ?>