<?php 
if (have_posts()): while (have_posts()): the_post(); ?>
  <div class="post">

      <h1><a href="<?php the_permalink() ?>" rel="permalink"><?php the_title(); ?></a></h1>
      <small>By <?php the_author_posts_link(); ?></small>

    
    <div class="post-content">
        <?php echo the_content(); ?>
    </div>

    <div class="navigation">
      <div class="alignleft"><?php previous_post_link('<strong>&lt;&lt; %link</strong>'); ?></div>
      <div class="alignright"><?php next_post_link('<strong>%link &gt;&gt;</strong>'); ?></div>
    </div>

    <?php if(comments_open()): ?>
      <div class="comments">
        <h3>Comments</h3>
        <?php comments_template(); ?>
      </div>
    <?php endif; ?>
  </div><!--#end post-->
<?php endwhile; endif; ?>