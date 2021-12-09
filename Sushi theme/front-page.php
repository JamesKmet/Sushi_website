<?php get_header(); ?>
<body>
<section>
<div class="sushi-container">


  <div class="sushi-girl">
    <img class="sushi-girl-MQ" src="<?php bloginfo('stylesheet_directory');?>/images/test1.png" alt="." />
  </div>

  <img src="sushi-knight-girl.png" alt="">

  <div class="sushi-text">
    <p id="jTextOne"> スーシー・ナイト・ゲーミング</p>

    <p id="jTextTwo"> スーシー・ナイト・ゲーミング</p>

    <p id="jTextThree">スーシー・ナイト・ゲーミング</p>
  </div>
</div>
<img class="sushi-hero-text" src="<?php bloginfo('stylesheet_directory');?>/images/sushi text.png" alt="." />



<section class="Up-coming-events-section">



<div class="pinkTitle">

</div>

<h2 class="events-title">Up coming events</h2>

<div class="events-wraper">
  <p id="jTextfour">スーシー・ナイト・ゲーミング</p>
  <div class="calander">
    <img class="calander" src="<?php bloginfo('stylesheet_directory');?>/images/calander.png" alt="." />
  </div>
  <div class="">
    <img class="circle" src="<?php bloginfo('stylesheet_directory');?>/images/circle.png" alt="." />
  </div>
</div>
</section>




<section>
  <div class="hi">
    <img class="divider" src="<?php bloginfo('stylesheet_directory');?>/images/divider-with-jp-text.png" alt="." />
  </div>


<h2 class="events-title">Our Top Games</h2>






<div class="row col d-flex justify-content-center">
    <div class="top-game-card " style="width: 45rem; margin: 3%;">
        <img class="card-img-top" src="<?php echo get_theme_mod('top-game-image-one'); ?>" alt="." style="border-radius: 50px;">
        <div class="card-body">
            <h5 class="card-title"><?php echo get_theme_mod('top-game-title-one'); ?></h5>
            <p class="card-text"><?php echo get_theme_mod('top-game-text-one'); ?></p>
        </div>
    </div>


    <div class="top-game-card" style="width: 45rem; margin: 3%;">
        <img class="card-img-top" src="<?php echo get_theme_mod('top-game-image-two'); ?>" alt="." style="border-radius: 50px;">
        <div class="card-body">
            <h5 class="card-title"><?php echo get_theme_mod('top-game-title-two'); ?></h5>
            <p class="card-text"><?php echo get_theme_mod('top-game-text-two'); ?></p>
        </div>
    </div>

    <div class="top-game-card" style="width: 45rem; margin: 3%;">
        <img class="card-img-top" src="<?php echo get_theme_mod('top-game-image-three'); ?>" alt="." style="border-radius: 50px;">
        <div class="card-body">
            <h5 class="card-title"><?php echo get_theme_mod('top-game-title-three'); ?></h5>
            <p class="card-text"><?php echo get_theme_mod('top-game-text-three'); ?></p>
        </div>
    </div>

    <div class="top-game-card" style="width: 45rem; margin: 3%;">
        <img class="card-img-top" src="<?php echo get_theme_mod('top-game-image-four'); ?>" alt="." style="border-radius: 50px;">
        <div class="card-body">
            <h5 class="card-title"><?php echo get_theme_mod('top-game-title-four'); ?></h5>
            <p class="card-text"><?php echo get_theme_mod('top-game-text-four'); ?></p>
        </div>
    </div>
</div>






</section>
<section>
  <div class="hi">
    <img class="divider" src="<?php bloginfo('stylesheet_directory');?>/images/divider-with-jp-text.png" alt="." />
  </div>



<h3>Featured Mats</h3>
  <a id="test2" href="woocommerce.php">
<div class="row col d-flex justify-content-center">
  <div class="featured-mats-card card" style="width: 45rem; margin: 3%;" class="featured-mats-card card" style="width: 45rem; margin: 3%;">
      <img id="featured-mat-img" class="card-img-top" src="<?php bloginfo('stylesheet_directory');?>/images/goat mat.png" alt="." >
      <div class="card-body">
          <h5 class="card-title">Yugioh Goat Mat</h5>
          <p class="card-text">Due to popular demand we have brought back our famous goat mat. Featuring scapegoat tokens and grateful charity. To grab yours today, go up to our new webstore today. </p>
      </div>
  </div>



  <div  class="featured-mats-card card" style="width: 45rem; margin: 3%;">
      <img id="featured-mat-img" class="card-img-top" src="<?php bloginfo('stylesheet_directory');?>/images/test.1.png" alt="." >
      <div class="card-body">
          <h5 class="card-title">Dark Magician Girl Mat</h5>
          <p class="card-text">Our new Dark Magician Girl mat designed by the wonderful Ekko Berry is our latest new mat. Featuring the famous Dark Magician Girl and Magical hats, get them while stocks last. </p>
      </div>
  </div>

</div>


</section>








</body>


<footer>
  <?php get_footer(); ?>

</footer>
