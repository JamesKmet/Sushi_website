<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- google fonts for Quicksand -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;600&family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <title><?php bloginfo('name');?></title>
  </head>
</html>


<nav id="nav-id" class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
    <a id="nav-logo" class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('stylesheet_directory');?>/images/sushi text.png" style="width:100px;height:auto; margin-left: 5%;" id="logo"/></a>
		<ul>
			<?php $menu_args = ['theme_location' => 'primary', 'menu_class' => "nav navbar-nav"]; ?>
			<?php wp_nav_menu($menu_args); ?>
	  </ul>
	</div>
</nav>
