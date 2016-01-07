<head>

    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>
    <h1><a class='current' href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
</head>

<?php

    $defaults = array (

        'container' => false,
        'theme_location' => 'primary-menu',
        'menu_class' => 'menu__links'

        );

    wp_nav_menu( $defaults );

?>

<body>


<html>