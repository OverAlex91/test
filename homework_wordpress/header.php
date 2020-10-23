<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Добрый картон</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
</head>

<body>

    <div class="page-content popup-overlay">
        <header id="header" class="header">
            <div class="header__menu">
                <nav class="header__menu_body">
                    <ul class="header__menu_list">
                        <li class="menu_list_data">
                            <a class="list_data_anchor" href="#main">О компании</a>
                        </li>
                        <li class="menu_list_data">
                            <a class="list_data_anchor" href="#advantages">Преимущества</a>
                        </li>
                        <li class="menu_list_data">
                            <a class="list_data_anchor" href="#production">Производство</a>
                        </li>
                        <li class="menu_list_data">
                            <a class="list_data_anchor" href="#offer">Склад</a>
                        </li>
                        <li class="menu_list_data">
                            <a class="list_data_anchor" href=#factory>Продукция</a>
                        </li>
                        <li class="menu_list_data">
                            <a class="list_data_anchor" href="#partners">Наши клиенты</a>
                        </li>
                        <li class="menu_list_data">
                            <a class="list_data_anchor" href="#review">Сертификаты</a>
                        </li>
                        <li class="menu_list_data">
                            <a class="list_data_anchor" href="#review">Отзывы</a>
                        </li>
                        <li class="menu_list_data">
                            <a class="list_data_anchor" href="#map">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="container">
                <div class="header_main_logo">
                    <div class="row align-items-center">
                        <div class="col-4 col-lg-3">
                            <div class="header_logo ">
                                <a href="#" class="burger-menu">
                                    <span class="burger-menu_span"></span>
                                </a>
                                <div class="header__burger">
                                    <nav class="burger-menu_nav">
                                        <a class="burger_data_anchor" href="#main">О компании</a>
                                        <a class="burger_data_anchor" href="#advantages">Преимущества</a>
                                        <a class="burger_data_anchor" href="#production">Производство</a>
                                        <a class="burger_data_anchor" href="#offer">Склад</a>
                                        <a class="burger_data_anchor" href=#factory>Продукция</a>
                                        <a class="burger_data_anchor" href="#partners">Наши клиенты</a>
                                        <a class="burger_data_anchor" href="#review">Сертификаты</a>
                                        <a class="burger_data_anchor" href="#review">Отзывы</a>
                                        <a class="burger_data_anchor" href="#map">Контакты</a>
                                    </nav>
                                </div>
                                <!-- /.header__burger -->
                                <img src="<?php the_field('logo'); ?>" alt="Logotipe" class="full-logo">
                                <img src="<?php the_field('mobile_logo'); ?>" alt="Small Logo" class="mobile-logo">
                            </div>
                            <!-- /.header_logo -->
                        </div>
                        <div class="col-8 col-lg-9">
                            <div class="header-text">
                                <div class="header-text_phones">
                                    <div class="header-text_phones__phone">
                                        <p><?php the_field('telephone_header_1');?></p>
                                    </div>
                                    <!-- /.header-phone -->
                                    <div class="header-text_phones__phone">
                                        <p><?php the_field('telephone_header_2');?></p>
                                    </div>
                                </div>
                                <!-- /.header-phone -->
                                <div class="header-button">
                                    <button class="header-button__button">
                                        <img class="header-button-icon" src="<?php the_field('header_button_img');?>" alt="phone">
                                        <span><?php the_field('header_button_text');?></span>
                                    </button>

                                </div>
                                <!-- /.header-button -->
                            </div>
                            <!-- /.header-text -->

                        </div>
                        <!-- /.col-8 -->
                    </div>
                </div>
            </div>
        </header>