<?php /* --[ Single Post Template ]-- */ ?>
<?php get_header(); ?>
<div class="row-fluid">
	<div class="span12">
    <div class="post">
      <?php get_template_part( 'loop', 'index' ); ?>  
    </div><!--#end post-->
	</div><!--#end content -->
</div>
<?php get_footer(); ?>