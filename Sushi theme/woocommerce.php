
<?php get_header(); ?>


<div class="store-header-div">
  <div class="text-waper">
    <div class="eng-header">
      <h2>Playmat Store</h2>
    </div>
    <div class="jp-header">
      <h2>名舗 メイホ</h2>
    </div>
  </div>
  <img class="circle-on-store" src="<?php bloginfo('stylesheet_directory');?>/images/circle.png" alt="." />
</div>








<!-- <div id="wootest" class="card-group"> -->
  <div class="woocommerce">
    <?php echo woocommerce_content('[products limit="8" columns="2" ]'); ?>
    </div>
<!-- </div> -->







  <?php get_footer(); ?>
