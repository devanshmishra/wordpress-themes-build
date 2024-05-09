<!DOCTYPE html>
<html <?php echo language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri();?>/assets/favicon.ico" />
        
        <?php wp_head();?>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="<?php echo get_home_url();?>"><?php echo bloginfo();?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php
                            // Get the menu items for the menu location 'primary-menu'
                            $menu_items = wp_get_nav_menu_items('primary-menu');
                            if ($menu_items):
                            ?>
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <?php foreach ($menu_items as $menu_item): ?>
                                    <li class="nav-item <?php echo implode(' ', $menu_item->classes); ?>">
                                        <a class="nav-link" href="<?php echo esc_url($menu_item->url); ?>">
                                            <?php echo esc_html($menu_item->title); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php
                            endif;
                            ?>

                    </div>
                </div>
           </nav>        
        </main>
    </body>
    </html>