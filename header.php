<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP Sky Project</title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">
</head>
<body>
    <header>
        <a href="<?php site_url() ?>">
            <img src="<?php echo get_header_image()  ?>">
        </a>
        <?php 
        wp_nav_menu( [
            'theme_location' => 'primary-menu',
            'menu_class' => 'nav'
            ]);
        ?>

    </header>