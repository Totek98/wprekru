<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('-', true, 'right'); bloginfo('name');?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>"></link>
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>>

    <div class="main_container">
        <header>
            <div class="logo">
                <span>Baltic Park</span>
            </div>
            <div class="book_your">
                <i><span>Book your</span></i>
                <i>stay now</i>
            </div>
            <nav>
                <?php wp_nav_menu(array('theme_location' => 'top-navigation'));?>
            </nav>
            <div class="language">
                <ul>
                    <li>EN</li>
                    <li>DE</li>
                    <li>PL</li>
                </ul>
            </div>
        </header>