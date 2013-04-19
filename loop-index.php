<?php 

if (have_posts()): while (have_posts()): the_post(); ?>
  <div class="post">
    <h2><a href="<?php the_permalink() ?>" rel="permalink"><?php the_title(); ?></a></h2>
    <div class="post-content">
        <?php echo the_content(); ?>
    </div>

    <?php if(comments_open()): ?>
      <div id="comments">
        <?php comments_template(); ?>
      </div>
    <?php endif; ?>
  </div><!--#end post-->
<?php endwhile; endif; ?>
<div class="navigation">
  <div class="alignleft"><?php previous_post_link('%link')?></div>
  <div class="alignright"><?php next_post_link('%link')?></div>  
</div>