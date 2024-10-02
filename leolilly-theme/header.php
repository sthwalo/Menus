<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?> | <?php wp_title(''); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu|Pacifico|Cutive+Mono|Source+Sans+Pro">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Header Section -->
<header class="header">
    <div class="logo-container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/Final-Logo.png" alt="LeoLilly Logo" class="logo-image">
    </div>
    
    <!-- Navigation Menu for Larger Screens -->
    <nav class="nav-menu" id="navLinks">
        <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
    </nav>

    <!-- Mobile menu icon -->
    <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
        <i class="fa fa-bars"></i>
    </a>
</header>