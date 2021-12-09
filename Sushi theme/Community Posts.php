<?php
/*

Template Name: Community Posts Template

*/?>
<?php get_header(); ?>


<body>
  <div class="post-container">
  <?php query_posts('post_type=post&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>
  <?php if( have_posts() ): ?>
  <?php while( have_posts() ): the_post(); ?>

    <div class="post-card" >
          <!-- <div class="thumbnail"><?php the_post_thumbnail(); ?></div> -->
          <img class="thumbnail" src=""<?php the_post_thumbnail();?>
          <div class="test">
          <h4 class="cardtitle"><?php the_title() ?></h4>
          <div class="entry-content">
          <p>Posted on: <span class="date"><?php echo get_the_date('F j, Y'); ?> <?php the_time(); ?></span></p>
          <p class="card-text"><?php the_excerpt(); ?></p>
          </div>
      </div>

    </div>

  <?php endwhile; ?>
  <?php endif; wp_reset_query(); ?>
  </div>
</body>


<?php get_footer(); ?>
