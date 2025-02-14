<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    wp_enqueue_script('WebsiteJquery');
    wp_enqueue_style('WebsiteStyle');
    wp_enqueue_style('CustomFontAwesome');
    wp_enqueue_style('Bootstrap');
    wp_enqueue_script('BootstrapJs');
    wp_enqueue_script('WebsiteJs');

    wp_head();
    ?>
</head>

<body <?php body_class(); ?> dir="rtl">
    <?php wp_body_open(); ?>

    <!-- header part -->
    <header id="navbar" class="">

        <!-- phone number and social media navbar -->
        <div class="bg-white-cety">
            <div class="d-flex flex-row justify-content-between p-2 container mx-auto">

                <!--phone number part-->
                <?php get_template_part('template-parts/Header/Default/PhoneNumber') ?>
                <!--end phone number part-->

                <!-- social media part-->
                <?php get_template_part('template-parts/Header/Default/SocialMedia') ?>
                <!--end social media part-->

            </div>
        </div>
        <!-- end phone number and social media navbar-->

        <!-- menu section-->
        <div class="bg-white-cety menu shadow-bottom">
            <div class="row align-items-center container mx-auto px-5">
                <div class="col-1">
                    <?php
                    //custom logo
                    get_template_part('template-parts/CustomLogo/CustomLogo');
                    ?>
                </div>
                <nav class="col-11 px-5">
                    <?php
                    //navigation menu for header
                    get_template_part('template-parts/Navigation/Header', 'Navigation');
                    ?>
                </nav>
            </div>
        </div>
        <!-- end menu section-->

        <!-- collapse menu section-->
        <div class="shadow bg-light-cety sidebar">
            <div class="d-flex align-items-center justify-content-between container mx-auto p-2">

                <!--logo pic -->
                <div>
                    <?php
                    //custom logo
                    get_template_part('template-parts/CustomLogo/CustomLogo');
                    ?>
                </div>
                <!--end logo pic  -->

                <!-- brand name  -->
                <div class="d-none">
                    <strong class="text-purple-cety fa-15x">Cety</strong>
                </div>
                <!-- end brand name part -->

                <!-- collapse sidebar or navbar btn  -->
                <div>
                    <button class="border-none bg-transparent" onclick="openNav()">
                        <span class="fa fa-bars text-gray-cety fa-15x"></span>
                    </button>
                </div>
                <!-- end collapse sidebar or navbar btn -->

            </div>
            <!--end logo and collapse part-->

        </div>
        <!-- end collapse menu section-->

    </header>
    <!-- end header part -->