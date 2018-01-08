<!doctype html>

<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  
   <meta name="viewport" content="width=device-width">
   <title><?php bloginfo('name'); ?></title>
   <?php wp_head(); ?>
    </head>
<body <?php body_class();?>>


<!-- site header -->
<header class="site-header">
    <h1><a href="<?php echo home_url(); ?>">
    <?php bloginfo('name');?></a></h1>
    <nav class="site-nav">
    <div id="menu">
    <div id="menutop">  
    <?php wp_nav_menu();?>
    <?php 
        $args = array(
        'theme_location' => 'primary'); ?>
    
    </div>
    </div>
<img src =" http://localhost/wordpress/wp-content/uploads/2017/02/IMG_5795.jpeg" id="me" alt="the user">
    </nav>
</header>