  <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; <?php echo bloginfo();?> <?php echo date('Y');?></div></div>
                    <div class="col-auto">
                        <?php
                            // Get the menu items for the menu location 'primary-menu'
                            $menu_items = wp_get_nav_menu_items('footer-menu');

                            if ($menu_items):
                            ?>
                                <?php foreach ($menu_items as $menu_item): ?>
                                        <a class="link-light small" href="<?php echo esc_url($menu_item->url); ?>">
                                            <?php echo esc_html($menu_item->title); ?>
                                        </a>
                                        <span class="text-white mx-1">&middot;</span>
                                <?php endforeach; ?>
                            <?php
                            endif;
                            ?>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer();?>
    </body>
</html>