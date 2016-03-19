<!doctype html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div id="site-container" class="site-container">
        <header id="site-header" class="l-header header">
            <div class="l-container">

                <!-- logo -->
                <a class="site-logo" href="<?php echo home_url(); ?>" rel="nofollow">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" alt="Logo"/>
                </a>

                <!-- mobile button menu -->
                <div class="menu-icon js-menu-toggle" id="js-menu-toggle">
                  <span></span>
                </div>

                <!-- menu -->
                <nav class="site-nav">
                    <?php wp_nav_menu(array(
                        'container' => false,
                        'theme_location' => 'main-nav',
                    )); ?>
                </nav>

            </div>
        </header>
        <div class="site-content">
