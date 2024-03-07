<?php
    /*
     * Template Name: Template Home
     */
?>

<?php  get_header(); ?>
    
    <?php $data = get_field("home_top_hero"); ?>

    <?php if($data['banner_status'] == "on" ) { ?>
        <section id="top_banner_container">
            <div id="top_banner_info">
                <div>
                    <?php echo $data['banner_message']; ?>
                </div>
                <div><a href="#" id="btn_close_top_banner"><img src='<?php echo get_stylesheet_directory_uri(); ?>/images/close.png'></a></div>
            </div>
        </section>
    <?php } ?>

    <!-- Hero -->
    <section class="hero-image mb50" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo @$data['background']['sizes']['main_hero'];?>')">
        <div class="hero-container">
            <div class="hero-text-middle">
                <h1><?php echo @$data['heading'];?></h1>
                <!-- <a href="<?php //echo  get_permalink( get_page_by_path( 'windows' ) );?>" class='btn-explore btn-gray mt50'>Explore products</a> -->
                <?php 
                    if($data['link'])
                    {
                        ?>
                            <a href="<?php echo $data['link']['url'];?>" class='btn-explore btn-gray mt50' target="<?php echo $data['link']['target'];?>"><?php echo $data['link']['title'];?></a>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>

    


    <!-- Section Unparalleled -->
    <?php $data = get_field("home_window"); ?>
    <section class="main_container pt50 pb50 holder_slick_rows" id="holder_slick_unpalleled">
        <div class='flex-space-between'>
            <div class='content-left'>
                <h1 class="main_title"><?php echo @$data['heading']; ?></h1>
            </div> 
            <div class="content-right">   
                <div class="holder-icons-slider">
                    <a href="<?php echo  get_permalink( get_page_by_path( 'windows' ) );?>" class='btn-explore btn-blue mr30'><?php echo @$data['button_label']; ?></a>
                    <!--
                    <a href='#' class='icon-nav-slide btn-arrow-left'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-left.png"></a> 
                    <a href='#' class='icon-nav-slide btn-arrow-right'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right.png"></a>
                    -->
                    <a id="unparalleled_arrow_left" href='#' class='icon-nav-slide btn-arrow-left'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-left.png"></a>
                    <a id="unparalleled_arrow_right" href='#' class='icon-nav-slide btn-arrow-right'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right.png"></a>
                </div>
            </div>
        </div>

        <div class="grid-container" id="unparalleled_performance">
            <?php 
                $items_to_show = @trim($data['items_to_show']); 
                if( $items_to_show > 0)
                {
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $args = array(
                        'post_type' => 'window', 
                        'posts_per_page' => $items_to_show ,
                        'paged' =>  $paged, 
                        'post_status' => 'publish',
                        //'orderby' => 'date',
                        //'order'   => 'DESC',
                      );
                      
                    $myQuery = new WP_Query($args);

                    if ($myQuery->have_posts()) :
                        while ($myQuery->have_posts()) : $myQuery->the_post();
                            ?>
                                <div class="grid-item">
                                    <div class='content-info'>
                                        <h2><?php the_title(); ?></h2>
                                        <h3><?php echo get_field('window_description',  get_the_ID(), true)['sub_heading']; ?></h3>
                                    </div>
                                    <?php $url = get_the_post_thumbnail_url( get_the_ID(), 'image_610_570' ); ?>
                                    <div class='holderSetBgImgGrid' style='background-image: url(<?php echo $url; ?>);'>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-transparent-grid-3-col-style-420x333.png" class="img-full display-block">
                                    </div>
                                    <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/home/unparalleled-performance/Unknown-5.png"> -->
                                    <div class='holder-view-window'><a href="<?php echo get_post_permalink(get_the_ID()); ?>" class='btn-explore btn-gray mt40'>VIEW</a></div>
                                </div>
                            <?php
                        endwhile;  
                        wp_reset_postdata(); 
                    endif;
                }

    
            ?>        
            <!--
            <div class="grid-item">
                <div class='content-info'>
                    <h2>Fixed Windows</h2>
                    <h3>SW-1000</h3>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/unparalleled-performance/Unknown-5.png">
                <div class='holder-view-window'><a href="#" class='btn-explore btn-gray mt40'>VIEW</a></div>
            </div>
            
            <div class="grid-item">
                <div class='content-info'>
                    <h2>Operating Windows</h2>
                    <h3>SW-1000</h3>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/unparalleled-performance/Unknown-6.png">
                <div class='holder-view-window'><a href="#" class='btn-explore btn-gray mt40'>VIEW</a></div>
            </div>
            <div class="grid-item">
                <div class='content-info'>
                    <h2>Folding Doors</h2>
                    <h3>SW-1000</h3>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/unparalleled-performance/Unknown-7.png">
                <div class='holder-view-window'><a href="#" class='btn-explore btn-gray mt40'>VIEW</a></div>
            </div> 
            <div class="grid-item">
                <div class='content-info'>
                    <h2>Fixed Windows</h2>
                    <h3>SW-1000</h3>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/unparalleled-performance/Unknown-5.png">
                <div class='holder-view-window'><a href="#" class='btn-explore btn-gray mt40'>VIEW</a></div>
            </div>
            <div class="grid-item">
                <div class='content-info'>
                    <h2>Operating Windows</h2>
                    <h3>SW-1000</h3>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/unparalleled-performance/Unknown-6.png">
                <div class='holder-view-window'><a href="#" class='btn-explore btn-gray mt40'>VIEW</a></div>
            </div>
            <div class="grid-item">
                <div class='content-info'>
                    <h2>Folding Doors</h2>
                    <h3>SW-1000</h3>
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/unparalleled-performance/Unknown-7.png">
                <div class='holder-view-window'><a href="#" class='btn-explore btn-gray mt40'>VIEW</a></div>
            </div>  
            -->
            
        </div>
    </section>

     <!-- Hero middle -->
    <?php $data = get_field("home_showroom"); ?>
    <?php if($data){ ?>
        <section id="holder_slick_case_study" class="holder_slick_rows">
            <div class="content-btns main_container">   
                <div class="holder-icons-slider">
                    <a id="hero_arrow_left" href='#' class='icon-nav-slide btn-arrow-left'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-left.png"></a>
                    <a id="hero_arrow_right" href='#' class='icon-nav-slide btn-arrow-right'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right.png"></a>
                </div>
            </div>
            <div id="content_stick_case_study">

                <?php 
                    $items_to_show = @trim($data['items_to_show']); 
                    if( $items_to_show > 0)
                    {
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                        $args = array(
                            'post_type' => 'showroom', 
                            'posts_per_page' => $items_to_show ,
                            'paged' =>  $paged, 
                            'post_status' => 'publish',
                            //'orderby' => 'date',
                            //'order'   => 'DESC',
                          );
                          
                        $myQuery = new WP_Query($args);
    
                        if ($myQuery->have_posts()) :
                            while ($myQuery->have_posts()) : $myQuery->the_post();
                                ?>
                                    <?php 
                                        if($data['image_to_show'] == "hero")
                                        {
                                            $url = get_field('showroom_top_hero',  get_the_ID(), true)['background']['sizes']['main_hero']; 
                                        }
                                        else
                                        {
                                            $url = get_the_post_thumbnail_url( get_the_ID(), 'main_hero' ); 
                                        }
                                        

                                    ?>
                                    <section class="hero-image second-bg mb75" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo $url; ?>');">
                                        <div class="hero-container second">
                                            <div class="hero-text-top">
                                                <div class='flex-space-between'>
                                                    <div class='content-left'>
                                                        <h2 class=""><?php echo @$data['heading']; ?> </h2>
                                                        <h1 class=""><?php the_title(); ?></h1>
                                                        <a href="<?php echo get_post_permalink(get_the_ID()); ?>" class='btn-explore btn-gray mt40'><?php echo $data['button_label']; ?></a>
                                                    </div> 
                                                    <!-- <div class="content-right"></div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <!--
                                    <div class="grid-item">
                                        <div class='content-info'>
                                            <h2><?php the_title(); ?></h2>
                                            <h3><?php echo get_field('window_description',  get_the_ID(), true)['sub_heading']; ?></h3>
                                        </div>
                                        <?php $url = get_the_post_thumbnail_url( get_the_ID(), 'image_610_570' ); ?>
                                        <div class='holderSetBgImgGrid' style='background-image: url(<?php echo $url; ?>);'>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-transparent-grid-3-col-style-420x333.png" class="img-full display-block">
                                        </div>
                                        <div class='holder-view-window'><a href="<?php echo get_post_permalink(get_the_ID()); ?>" class='btn-explore btn-gray mt40'>VIEW</a></div>
                                    </div>
                                    -->

                                <?php
                            endwhile;  
                            wp_reset_postdata(); 
                        endif;
                    }
                ?>

                
                <!--    
                <section class="hero-image second-bg mb75" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo get_stylesheet_directory_uri(); ?>/images/home/hero2.png');">
                    <div class="hero-container second">
                        <div class="hero-text-top">
                            <div class='flex-space-between'>
                                <div class='content-left'>
                                    <h2 class="">FEATURED CASE STUDIES</h2>
                                    <h1 class="">Name of the Case Study</h1>
                                    <a href="#" class='btn-explore btn-gray mt40'>See case study</a>
                                </div> 
                                <div class="content-right">   
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                -->
            </div>    
        </section>
    <?php } ?>


    <!-- Intro Windowcity -->
    <?php $data = get_field("home_grid_content"); ?>
    <?php if($data) { ?>
        <section class="main_container pt75 pb75 holder-windowcity">
            <div class="intro-windowcity">
                <div class='holder-wc-left'>
                    <?php 
                        foreach($data['logos'] as $key => $value)
                        {
                            $url = @$value['sizes']['medium'];
                            ?>
                                <img src="<?php echo $url; ?>"><br>
                            <?php
                        }
                    ?>
                </div>
                <div  class='holder-wc-right'>
                    <h4><?php echo @$data['heading']; ?></h4>
                    <h1><?php echo @$data['description']; ?></h1>
                    <?php 
                        if($data['link'])
                        {
                            ?>
                                 <a href="<?php echo $data['link']['url']; ?>" target="<?php echo $data['link']['target']; ?>" class='btn-explore btn-blue mt30'><?php echo $data['link']['title']; ?></a>
                            <?php
                        }
                    ?>
                    <!-- <a href="<?php //echo  get_permalink( get_page_by_path( 'windows' ) );?>" class='btn-explore btn-blue mt30'>LEARN MORE</a> -->
                </div>
            </div>
        </section>
    <?php } ?>

    <!-- Approach & Process -->
    <?php $data = get_field("home_carrousel"); ?>

    <?php if($data && $data['items'] ) { ?>
        <section class="main_container pb50 holder_slick_rows">
            <div id='holder-approch-process'>
                <?php if( isset($data['content']) && $data['content'] != "" )  { ?>
                    <?php echo $data['content']; ?>
                <?php } ?>
                <?php if(isset($data['items']) && ($data['items']) != "" ) { ?>
                <div>
                    <div class='flex-space-between'>
                        <div class='content-left'>

                        </div> 
                        <div class="content-right">   
                            <div class="holder-icons-slider">
                                <!-- <a href="#" class='btn-explore btn-blue'>EXPLORE more</a> -->
                                <a id="approach_p_arrow_left" href='#' class='icon-nav-slide btn-arrow-left'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-left.png"></a>
                                <a id="approach_p_arrow_right" href='#' class=' icon-nav-slide btn-arrow-right'><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-right.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <ul id="content_slick_process_steps">
                    <?php 
                        $num_step = 1;
                        foreach($data['items'] as $key => $value)
                        {
                            $url =  $value['image']['sizes']['medium'];
                            ?>
                                <li>
                                    <div class="holderSetBgImgGrid"  style='background-image: url(<?php echo $url; ?>);'>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-transparent-grid-3-col-style-420x333.png">
                                    </div>
                                    <div class='info'>
                                        <h1><?php echo $value['heading']; ?></h1>
                                        <p>
                                            <?php 
                                                $text = $value['description']; 
                                                $words = 10;
                                                $more = ' <a href="#" class="link-more-steps" data-step="'.$num_step.'">[More]</a> ';
                                                echo $excerpt = wp_trim_words( $text, $words, $more );
                                            ?>
                                        </p>
                                    </div>
                                </li>
                            <?php
                            $num_step++;
                        }
                    ?>
                    </ul>
                    
                </div>

                <div class='modal-approach-process' style="">
                    <a href="#" id="close-model-step">x</a>
                    <div id='modal-ap-content'>
                        
                        <div class='info'>
                            <div class="get-step-items">
                                <?php 
                                    $num_step = 1;
                                    foreach($data['items'] as $key => $value)
                                    {
                                        //$url =  $value['image']['sizes']['medium'];
                                        ?>
                                            <div class="holder-step holder-step-number-<?php echo $num_step; ?>" style="d">
                                                <!--
                                                <div class="holderSetBgImgGrid"  style='background-image: url(<?php //echo $url; ?>);'>
                                                    <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/img-transparent-grid-3-col-style-420x333.png">
                                                </div>
                                                -->
                                                <div>
                                                    <h3><?php echo $value['heading']; ?></h3>
                                                    <h1>
                                                        <?php 
                                                            echo $value['description']; 
                                                        ?>
                                                    </h1>
                                                </div>
                                            </div>
                                        <?php
                                        $num_step++;
                                    }
                                ?>
                                <!--
                                <h3>Approach & Process</h3>
                                <h1>
                                    Donec nulla risus, faucibus ultrices placerat id, hendrerit a magna. Aenean nulla nibh, interdum id interdum quis, pellentesque non nisi.
                                </h1>
                                <a href="#" class='btn-explore btn-gray mt30'>Our process</a>
                                -->   
                            </div>
                        </div>
                    </div>
                </div>

                <?php } ?>
            </div>
        </section>
    <?php } ?>

    <!-- Blog -->
    <?php $data = get_field("home_blog"); ?>
    <?php if($data) { ?>
        <section class="main_container pt50 pb50">
            <h3 class="title-third mb20"><?php echo $data['heading'];?></h3>
            <div class='flex-space-between phone-one-col gap20'>
                <div class='content-leftX'>
                    <h1 class="main_title"><?php echo $data['sub_heading'];?></h1>
                </div> 
                <div class="content-rightX">   
                    <a href="<?php echo  get_permalink( get_page_by_path( 'blog' ) );?>" class='btn-explore btn-blue '><?php echo $data['button_label'];?></a>
                </div>
            </div>

            <div class="grid-container col-2 gap50">

                <?php 
                    $items_to_show = @trim($data['items_to_show']); 
                    if( $items_to_show > 0)
                    {
                        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                        $args = array(
                            'post_type' => 'post', 
                            'posts_per_page' => $items_to_show ,
                            'paged' =>  $paged, 
                            'post_status' => 'publish',
                            //'orderby' => 'date',
                            //'order'   => 'DESC',
                          );
                          
                        $myQuery = new WP_Query($args);
    
                        if ($myQuery->have_posts()) :
                            while ($myQuery->have_posts()) : $myQuery->the_post();
                                ?>
                                    <div class="grid-item">

                                        <?php $url = get_the_post_thumbnail_url( get_the_ID(), 'image_740_500' ); ?>
                                        <div class="holderSetBgImgGrid"  style='background-image: url(<?php echo $url; ?>);'>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-transparent-grid-2-col-style-638x335.png" class="img-full display-block">
                                        </div>
                                        <div class='content-info-no-bg mt30'>
                                            <h2><?php the_title(); ?></h2>
                                            <a href="<?php echo get_post_permalink(get_the_ID()); ?>" class='btn-explore btn-blue mt20'>READ</a>
                                        </div>
                                    </div>

                                <?php
                            endwhile;  
                            wp_reset_postdata(); 
                        endif;
                    }
                ?>
            </div>
        </section>
    <?php } ?>


<?php get_footer(); ?>

