<?php get_header(); ?>
  <div class="container fluid mt-5 mb-5">
     <div class="row">
        <?php
        if (have_posts() ) :
            while (have_posts() ) : the_post(); ?>
            <!-- here's the area where it loops over each post -->
            <div class="col-6">
            <h1 class="card-title"><?php the_title() ?></h1>
            </div>
            <div class="col">
                 <div class="card mb-3" style="width: 100%">
                   <div class="card-body">
                     <p class="card-text"><?php the_content() ?></p>
                   </div>
                 </div>
            </div>
            <div class="col-12">
              <a class="btn btn-primary" href="<?php echo home_url(); ?>">Back to home</a>
            </div>
        <?php endwhile;
            else : echo '<p>There are no posts!</p>';
        endif;
        ?>
        <!-- <p>This is the index template</p> -->
</div>
</div>


  <?php get_footer(); ?>




  <div class="container fluid mt-5 mb-5">
     <div class="row">
       <!-- bootstrap card start -->
       <div class="col-12">
        <h3>Showing all posts </h3>
      </div>
  <?php query_posts('post_type=post&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>

        <?php
        if (have_posts() ) :
            while (have_posts() ) : the_post(); ?>

  <?php if (get_theme_mod('my_custom_select') == 'hide_posts'){ }  ?>

            <!-- here's the area where it loops over each post -->
            <div class="col <?php echo "col-md-" . get_theme_mod("my_custom_col_size"); ?>">
                 <div class="card mb-3" style="width: 100%">

                   <!-- image test -->
                   <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post-id), 'thumbnail' ); ?>
                   <img src="<?php echo $url ?>" style="width:300px; height:300px;" />

                   <!-- bootstrap card text-->
                   <div class="card-body">
                     <h5 class="card-title">
                       <!-- add permalink later -->
                       <!-- <a href="<?php the_permalink(); ?>"> -->
                       <?php echo get_the_title($post-id);?>
                       </a>
                     </h5>
                    </div>
                     <p>Posted: <?php echo get_the_date('F j, Y'); ?></p>
                     <p>Posted by: <?php the_author('F j, Y'); ?></p>
                     <p><?php the_time(); ?></p>
                     <p class="card-text"><?php the_excerpt(); ?></p>
                   </div>
                 </div>
            </div>
        <?php endwhile;
            else : echo '<p>There are no posts!</p>';
        endif;
        ?>
      </div>
