<section class="holder-footer">
    <?php 
        $data_info = get_field("settings_footer_information","option");
        $data_logos = get_field("settings_footer_logos_icons","option"); 
    ?>
    <div class="main_container" id="footer_bar_top">
        <footer class="footer-flex" id="fbt_sec">
            <div class="" id="footer_logo">
                <?php $main_logo = $data_logos['main_logo']['url']; ?>
                <img src="<?php echo $main_logo; ?>"><br>
                <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/SkycityLogo.png"><br> -->
                <div class="mt20">
                    
                    <h3 class="title-third"><?php echo $data_info['content_1']['key']; ?></h3>
                    <div class="info-footer">
                        <?php echo $data_info['content_1']['value']; ?>
                    </div>
                </div>
            </div>
            <div class="footer-flex join gap60" id="menu_footer">
                <div>
                    <?php 
                        $args = array(
                            'theme_location' => 'footer-menu-left',
                            'menu_class'=>'h-menu',
                            'menu_id'=> '',
                            'add_li_class'  => 'nav-item'
                        );
                        wp_nav_menu($args);
                    ?>
                    <!--
                    <ul>
                        <li><a href="#">About</a><li>
                        <li><a href="#">Windows</a><li>
                        <li><a href="#">Showroom</a><li>
                    </ul>
                    -->
                </div>
                <div>
                    <?php 
                        $args = array(
                            'theme_location' => 'footer-menu-right',
                            'menu_class'=>'h-menu',
                            'menu_id'=> '',
                            'add_li_class'  => 'nav-item'
                        );
                        wp_nav_menu($args);
                    ?>
                    <!--
                    <ul>
                        <li><a href="#">Gallery</a><li>
                        <li><a href="#">Blog</a><li>
                        <li><a href="#">Contact</a><li>
                    </ul>
                    -->
                </div>
            </div>
            <div class="footer-flex" id="footer_sec_contact">
                <div>
                    <div id="footer_info_phone">
                        <h3 class="title-third"><?php echo $data_info['content_2']['key']; ?></h3>
                        <div class="info-footer">
                            <?php echo $data_info['content_2']['value']; ?>
                        </div>
                    </div>
                </div>
                <div >
                    <div id="footer_info_email">
                        <h3 class="title-third"><?php echo $data_info['content_3']['key']; ?></h3>
                        <div class="info-footer">
                            <?php echo $data_info['content_3']['value']; ?>
                        </div>
                    </div>
                    <div id="footer_info_schedule">
                        <h3 class="title-third mt20"><?php echo $data_info['content_4']['key']; ?></h3>
                        <div class="info-footer">
                            <?php echo $data_info['content_4']['value']; ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </footer>
        
    </div>
    <section class="footer-bar-bottom">
        <div class="main_container">
            <div class="footer-flex item-center" id="fbb_left" style="">
                <?php $privacy_policy = get_permalink( get_page_by_path( 'privacy-policy' ) ); ?>
                <div><a href="<?php echo $privacy_policy; ?>">Privacy Policy</a>   |   © <?php echo $data_logos['heading_1']; ?></div>
                <div>
                    <div class="footer-flex join item-center" id="fbb_right">
                        <div>
                            <?php $brand = $data_logos['brand']['url']; ?>
                            <!-- <img src="<?php echo $brand; ?>"> -->
                            <a href="#" class="icon-footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-linkedin.png"></a>
                            <a href="#" class="icon-footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-facebook.png"></a>
                            <a href="#" class="icon-footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-twitter.png"></a>
                            
                        </div>
                        <div class="footer-flex gap10">
                            
                            <span>
                                <?php echo $data_logos['heading_2']; ?>
                            </span> 
                            <?php $flag = $data_logos['flag']['url']; ?>
                            <img src="<?php echo $flag; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </section>
</section>