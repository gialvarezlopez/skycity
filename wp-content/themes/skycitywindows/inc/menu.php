<header class="main_container">
    <nav id="top_menu">
        <div>
            <?php 
                $data_header = get_field("settings_header","option");
                $logo_url = @$data_header['logo']['url'];
            ?>
            <a href="<?php echo home_url(); ?>"><img src='<?php echo $logo_url; ?>'></a>
        </div>
        <div>
            <!-- Icons open and close menu mobile -->
            <div class="holder-icon-main-menu">
                <?php //echo get_stylesheet_directory_uri(); ?>
                <img class="icon-action-menu" id="icon-menu-open" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu_open.svg">
                <img class="icon-action-menu" id="icon-menu-close" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu_close.svg">
            </div>
            <div class="holderMenuItems" id="holderMenuItems">
                <!--
                <ul class='menu_full_itemsX'>
                    <li><a href="about.php">About </a></li>
                    <li><a href="windows.php">Windows </a></li>
                    <li><a href="showroom.php">Showroom </a></li>
                    <li><a href="gallery.php">Gallery </a></li>
                    <li><a href="blog.php">Blog </a></li>
                    <li class='show_only_mobile_990'><a href="contact.php">Contact</a></li>
                </ul>
                -->

                <?php 
                    //Header Menu
                    
                    $args = array(
                        'theme_location' => 'header-menu',
                        'menu_class'=>'h-menu',
                        'menu_id'=> '',
                        'add_li_class'  => 'nav-item'
                    );
                    wp_nav_menu($args);

                    //We add extra menu manually at the end
                    $contactPage = get_permalink( get_page_by_path( 'contact' ) );
                    //wp_nav_menu( array( 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li class="show_only_mobile_990xxx"><a href="'.$contactPage.'">Contact</a></li></ul>' ) );
                    
                ?>
            </div>
        </div>
        <div>
            <ul >
                <li class="show_only_desktop_990"><a href="<?php echo $contactPage; ?>">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>

