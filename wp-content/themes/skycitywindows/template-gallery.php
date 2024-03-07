<?php
    /*
     * Template Name: Template Gallery
     */
?>

<?php  get_header(); ?>

    <section class="main_container pt50 pb50">
        <div class=''>
            <div class='mb50'>
                <h1 class="main_title text-center">GALLERY</h1>
            </div> 
        </div>

        <?php $data = get_field("gallery_images"); ?>
        <?php if($data) { ?>
            <?php 
                foreach($data['group'] as $key => $value)
                {
                   // echo $value['type'];
                    if($value['type'] == "full_width")
                    {
                        ?>
                            <div class="mb20 mt20">
                                <a
                                    href="<?php echo @$value['full_width']['sizes']['image_1300_770']; ?>"
                                    data-fancybox="gallery"
                                    data-caption=""
                                >
                                    <img src="<?php echo @$value['full_width']['sizes']['image_1300_770']; ?>" class="img-full display-block">
                                </a>
                            </div>
                        <?php
                    }
                    else
                    {
                        
                        ?>
                        <div class="grid-container col-2 gap20 mb20 mt20">
                            <?php foreach( $value['grid'] as $image ): ?>
                                <div class="grid-item">
                                    <a
                                        href="<?php echo @$image['sizes']['image_1300_770']; ?>"
                                        data-fancybox="gallery"
                                        data-caption=""
                                    >
                                        <img src="<?php echo esc_url($image['sizes']['image_740_500']); ?>" class="img-full">
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>    
                        <?php
                    }
                }
            ?>
        <?php } ?>

        <!--        
        <div class="mb20">
            <a
                href="<?php // echo get_stylesheet_directory_uri(); ?>/images/gallery/gallery-1.png"
                data-fancybox="gallery"
                data-caption=""
            >
                <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/gallery/gallery-1.png" class="img-full display-block">
            </a>
        </div>

        <div class="grid-container col-2 gap20">
            <div class="grid-item">
                <a
                    href="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery/gallery-2.png"
                    data-fancybox="gallery"
                    data-caption=""
                >
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery/gallery-2.png" class="img-full display-block">
                </a>
            </div>
            <div class="grid-item">
                <a
                    href="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery/gallery-3.png"
                    data-fancybox="gallery"
                    data-caption=""
                >
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery/gallery-3.png" class="img-full display-block">
                </a>
            </div>
        </div>
        
        <div class="mt20 mb20">
                <a
                    href="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery/gallery-4.png"
                    data-fancybox="gallery"
                    data-caption=""
                >
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery/gallery-4.png" class="img-full display-block">
                </a>
        </div>

        <div class="grid-container col-2 gap20">
            <div class="grid-item">
                <a
                    href="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery/gallery-5.png"
                    data-fancybox="gallery"
                    data-caption=""
                >
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery/gallery-5.png" class="img-full display-block">
                </a>
            </div>
            <div class="grid-item">
                <a
                    href="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery/gallery-6.png"
                    data-fancybox="gallery"
                    data-caption=""
                >
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery/gallery-6.png" class="img-full display-block">
                </a>
            </div>
            <div class="grid-item">
                <a
                    href="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery/gallery-7.png"
                    data-fancybox="gallery"
                    data-caption=""
                >
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery/gallery-7.png" class="img-full display-block">
                </a>
            </div>
            <div class="grid-item">
                <a
                    href="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery/gallery-8.png"
                    data-fancybox="gallery"
                    data-caption=""
                >
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gallery/gallery-8.png" class="img-full display-block">
                </a>
            </div>
        </div>
        -->
    </section>


<?php get_footer(); ?>

