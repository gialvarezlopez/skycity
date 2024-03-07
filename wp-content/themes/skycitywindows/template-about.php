<?php
    /*
     * Template Name: Template About
     */
?>

<?php  get_header(); ?>

    <!-- Hero -->
    <?php $data = get_field("about_top_hero");?>
    <section class="hero-image mb50" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo $data['background']['sizes']['main_hero']; ?>');">
        <div class="hero-container">
            <div class="hero-text-middle">
                <?php if( isset($data['heading']) && $data['heading'] != "" ) { ?>
                    <h1><?php echo $data['heading']; ?> </h1>
                <?php } ?>
            </div>
        </div>
    </section>


    <!-- Intro Windowcity -->
    <?php $data = get_field("about_grid_general_content"); ?>
    <?php 
        if( ($data)  ) 
        { 
            ?>
            <section class="main_container pt75 pb75 ">
                <?php
                foreach($data as $key => $value)
                {
                    //if($value['image_position'] == "left"){
                    $image = @$value['image']['sizes']['image_750_470'];
                    $imagen_position = $value['image_position'];
                    
                    $heading = $value['heading'];
                    $content = $value['content'];

                    $info = "hf-content-info";
                    $holderImage = "hf-content-image";
                    
                    ?>
                    
                        <div class="holder-flex">
                            <?php 
                                if( $imagen_position == "right")
                                {
                                    ?>
                                        <div class='hf-content-info'>
                                            <section>
                                                <h2 class='main_sub-title'><?php echo $heading; ?></h2>
                                                <div class="content"><?php echo $content; ?></div>
                                            </section>
                                        </div>
                                        <div  class='hf-content-image'>
                                            <img src="<?php echo $image; ?>" class="img-fluid">
                                        </div>
                                    <?php
                                }   
                                else
                                {
                                    ?>
                                        <div  class='hf-content-image'>
                                            <img src="<?php echo $image; ?>" class="img-fluid">
                                        </div>

                                        <div class='hf-content-info'>
                                            <section>
                                                <h2 class='main_sub-title'><?php echo $heading; ?></h2>
                                                <div class="content"><?php echo $content; ?></div>
                                            </section>
                                        </div>
                                
                                    <?php
                                }
                            ?>
                            
                        </div>
                    
            
                <?php 
                }
                ?>
            </section>
            <?php
        }
    ?>

    <?php $data = get_field("about_values");?>
    <section class="block-color">
        <div class="main_container">
            <section>
                <?php if( $data['heading'] ) { ?>
                    <h5><?php echo $data['heading']; ?></h5>
                <?php } ?>

                <?php if( $data['description'] ) { ?>
                    <h1><?php echo $data['description']; ?></h1>
                <?php } ?>
            </section>
        </div>
    </section>

    <!-- content-full-process -->
    <?php $data = get_field("about_grid_processes");?>

    <section class="main_container pt50 pb50 " id="">
        <div class='content-full-process'>
            <?php if( $data['heading'] ) { ?>
                <h4 class="litle-title set-color-gray mb20 text-center"><?php echo $data['heading']; ?></h4>
            <?php } ?>
            <?php if( $data['content'] ) { ?>
                <h1 class="main_sub-title"><?php echo $data['content']; ?></h1>
            <?php } ?>
        </div>

        <!-- Grid -->

        <?php $items = $data['items'];?>
        <?php if( count($items) > 0 ) { ?>
            <div class="grid-container row-gap40 dynamic-grid-fluid" id="">
                
                <?php 
                    foreach($items as $key => $value)
                    {
                        $image = @$value['image']['sizes']['image_600_250'];
                        $imagen_position = $value['image_position'];
                    
                        $title = $value['title'];
                        $description = $value['description'];
                        ?>
                            <div class="grid-item gb-color-main-blue">
                                <div class="holderSetBgImgGrid"  style='background-image: url(<?php echo $image; ?>);'>
                                    <!-- <img src="<?php //echo $image; ?>" class="img-full"> -->
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-transparent-grid-3-col-style-420x333.png" class="img-full display-block">
                                </div>
                                <div class='content-info'>
                                    <h2><?php echo $title; ?></h2>
                                    <div class='description-item'><?php echo $description; ?></div>
                                </div>
                            </div>
                        <?php
                    }
                ?>

                <!--
                <div class="grid-item gb-color-main-blue">
                    
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/unparalleled-performance/Unknown-6.png" class="img-full">
                    <div class='content-info'>
                        <h2>Process Step</h2>
                        <div class='description-item'>Donec nulla risus, faucibus ultrices placerat id, hendrerit a magna. Aenean nulla nibh, interdum id interdum quis, pellentesque non nisi.</div>
                    </div>
                </div>
                <div class="grid-item gb-color-main-blue">
                    
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/unparalleled-performance/Unknown-7.png" class="img-full">
                    <div class='content-info'>
                        <h2>Process Step</h2>
                        <div class='description-item'>Donec nulla risus, faucibus ultrices placerat id, hendrerit a magna. Aenean nulla nibh, interdum id interdum quis, pellentesque non nisi.</div>
                    </div>
                </div> 
                <div class="grid-item gb-color-main-blue">
                    
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/unparalleled-performance/Unknown-5.png" class="img-full">
                    <div class='content-info'>
                        <h2>Process Step</h2>
                        <div class='description-item'>Donec nulla risus, faucibus ultrices placerat id, hendrerit a magna. Aenean nulla nibh, interdum id interdum quis, pellentesque non nisi.</div>
                    </div>
                </div>
                <div class="grid-item gb-color-main-blue">
                    
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/unparalleled-performance/Unknown-6.png" class="img-full">
                    <div class='content-info'>
                        <h2>Process Step</h2>
                        <div class='description-item'>Donec nulla risus, faucibus ultrices placerat id, hendrerit a magna. Aenean nulla nibh, interdum id interdum quis, pellentesque non nisi.</div>
                    </div>
                </div>
                <div class="grid-item gb-color-main-blue">
                    
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home/unparalleled-performance/Unknown-7.png" class="img-full">
                    <div class='content-info'>
                        <h2>Process Step</h2>
                        <div class='description-item'>Donec nulla risus, faucibus ultrices placerat id, hendrerit a magna. Aenean nulla nibh, interdum id interdum quis, pellentesque non nisi.</div>
                    </div>
                </div>  
                -->
            </div>
        <?php } ?>
    </section>


<?php get_footer(); ?>

