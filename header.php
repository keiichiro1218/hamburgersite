<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="l-header">
        <div class="c-menu-button">
            <button class="c-menu-button__button">Menu</button>
        </div>
        <div class="l-header__inner">
            <div class="l-header__logo">
                <a href="<?php echo esc_url( home_url() ); ?>">
                    <h1><?php bloginfo('name'); ?></h1>
                </a>
            </div>
            <?php get_search_form(); ?>
        </div>
    </header>
     
        