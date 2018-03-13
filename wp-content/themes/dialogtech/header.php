<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>DialogTech</title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <nav class="nav container-fluid secondary-nav">
                <div class="row">
                    <div class="navbar-right">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'secondary_menu',
                                'container_id' => 'navbar',
                                'container_class' => 'collapse navbar-collapse',
                                'menu_class' => 'nav navbar-nav navbar-right'
                            ));
                        ?>
                    </div>
                </div>
            </nav>

            <nav class="nav container main-menu">
                <div class="row">
                    <div class="navbar-header">
                        <a href="/"><img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-2x.png" alt=""></a>
                    </div>
                    <div class="navbar-right">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main_menu',
                                'container_id' => 'navbar navbar-toggle',
                                'container_class' => 'collapse navbar-collapse',
                                'menu_class' => 'nav navbar-nav navbar-right'
                            ));
                        ?>
                    </div>
                </div>
            </nav>
        </header>
