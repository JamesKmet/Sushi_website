<?php

//theme support
add_theme_support('woocommerce');
add_theme_support( 'post-thumbnails' );



register_nav_menus(['primary'=> 'test_custom_section']);
register_nav_menus(['primary'=> 'test_custom_section']);


function custom_theme_assets() {
  wp_enqueue_style('my-custom-style', get_stylesheet_uri());
}


add_action("customize_register", "customise_option");


remove_action( 'woocommerce_single_product_summary',
'woocommerce_template_single_add_to_cart', 30 );
add_action( 'woocommerce_single_product_summary',
'woocommerce_template_single_add_to_cart', 15 );


// use a filter hook to modify Wordpress function at runtime
function new_excerpt_length() {
  $new_length = get_theme_mod("custom_excerpt_length");
  return $new_length;
}
add_filter('excerpt_length', 'new_excerpt_length');






function my_first_customise_option($wp_customize) {
  $wp_customize->add_section("Front Page Settings Section", array(
    "title" => "Front Page Settings Section", "custom_setting",
    "priority" => 1
  ));





// settings for the custom excerpt length
  $wp_customize->add_setting("custom_excerpt_length", array(
    "default" => 1
  ));
  $wp_customize->add_control("custom_excerpt_length", array(
    "label" => "Customize the Excerpt lengths on the Page",
    "section" => "Front Page Settings Section",
    "settings" => "custom_excerpt_length",
    "type" => "number",
      "priority" => 1,
    'input_attrs' => array(
      'min' => 5,
      'max' => 200
    )
  ));




//WP custom section for the first top game
  $wp_customize->add_setting("top-game-image-one", array(
    "default" => ""
  ));
  $wp_customize->add_control (new WP_Customize_Image_Control(
      $wp_customize, 'custom_image', array(
        'label' => 'Upload a Custom Image for Game One',
        'settings' => 'top-game-image-one',
        'section' => 'Front Page Settings Section',
        'priority' => 1
      )
    ));
  $wp_customize->add_setting("top-game-title-one", array(
    "default" => "Flesh and Blood"
  ));
  $wp_customize->add_control("top-game-title-one", array(
  "label" => "Title for top game one",
  "section" => "Front Page Settings Section",
  "settings" => "top-game-title-one",
  "type" => "textarea",
    'priority' => 2
));
  $wp_customize->add_setting("top-game-text-one", array(
    "default" => "Flesh and Blood"
  ));
  $wp_customize->add_control("top-game-text-one", array(
  "label" => "Text for top game one",
  "section" => "Front Page Settings Section",
  "settings" => "top-game-text-one",
  "type" => "textarea",
    'priority' => 3
));



//WP custom section for the second top game
  $wp_customize->add_setting("top-game-image-two", array(
    "default" => ""
  ));
  $wp_customize->add_control (new WP_Customize_Image_Control(
      $wp_customize, 'top-game-image-two', array(
        'label' => 'Upload a Custom Image For Game Two',
        'settings' => 'top-game-image-two',
        'section' => 'Front Page Settings Section',
        'priority' => 4
      )
    ));
  $wp_customize->add_setting("top-game-title-two", array(
    "default" => "Flesh and Blood"
  ));
  $wp_customize->add_control("top-game-title-two", array(
  "label" => "Title for top game two",
  "section" => "Front Page Settings Section",
  "settings" => "top-game-title-two",
  "type" => "textarea",
    'priority' => 5
));
  $wp_customize->add_setting("top-game-text-two", array(
    "default" => "Flesh and Blood"
  ));
  $wp_customize->add_control("top-game-text-two", array(
  "label" => "Text for top game two",
  "section" => "Front Page Settings Section",
  "settings" => "top-game-text-two",
  "type" => "textarea",
    'priority' => 6
));



//WP custom section for the third top game
  $wp_customize->add_setting("top-game-image-three", array(
    "default" => ""
  ));
  $wp_customize->add_control (new WP_Customize_Image_Control(
      $wp_customize, 'top-game-image-three', array(
        'label' => 'Upload a Custom Image for Game Three',
        'settings' => 'top-game-image-three',
        'section' => 'Front Page Settings Section',
        'priority' => 7
      )
    ));
  $wp_customize->add_setting("top-game-title-three", array(
    "default" => "Flesh and Blood"
  ));
  $wp_customize->add_control("top-game-title-three", array(
  "label" => "Title for top game three",
  "section" => "Front Page Settings Section",
  "settings" => "top-game-title-three",
  "type" => "textarea",
    'priority' => 8
));
  $wp_customize->add_setting("top-game-text-three", array(
    "default" => "Flesh and Blood"
  ));
  $wp_customize->add_control("top-game-text-three", array(
  "label" => "Text for top game three",
  "section" => "Front Page Settings Section",
  "settings" => "top-game-text-three",
  "type" => "textarea",
    'priority' => 9
));





//WP custom section for the Forth top game
  $wp_customize->add_setting("top-game-image-four", array(
    "default" => ""
  ));
  $wp_customize->add_control (new WP_Customize_Image_Control(
      $wp_customize, 'top-game-image-four', array(
        'label' => 'Upload a Custom Image for Game Four',
        'settings' => 'top-game-image-four',
        'section' => 'Front Page Settings Section',
        'priority' => 10
      )
    ));
  $wp_customize->add_setting("top-game-title-four", array(
    "default" => "Flesh and Blood"
  ));
  $wp_customize->add_control("top-game-title-four", array(
  "label" => "Title for top game four",
  "section" => "Front Page Settings Section",
  "settings" => "top-game-title-four",
  "type" => "textarea",
    'priority' => 11
));
  $wp_customize->add_setting("top-game-text-four", array(
    "default" => "Flesh and Blood"
  ));
  $wp_customize->add_control("top-game-text-four", array(
  "label" => "Text for top game four",
  "section" => "Front Page Settings Section",
  "settings" => "top-game-text-four",
  "type" => "textarea",
    'priority' => 12
));











}











add_action("customize_register", "my_first_customise_option");
  ?>
