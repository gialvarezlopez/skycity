<?php  get_header(); ?>

    <!-- Hero -->
    <?php $data = get_field("blog_top_hero", get_the_ID(), true); ?>
    <?php //echo @$data['background']['sizes']['main_hero'];?>
    <section class="hero-image mb50" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo @$data['background']['sizes']['main_hero'];?>');">
        <div class="hero-container">
            <div class="hero-text-middle">
                <h1 class='title_case_study'><?php the_title(); ?> <!-- NAME OF THE <br> CASESTUDY --></h1>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="main_container pt50 pb50">
        <!--    
        <div class=''>
            <div class='mb50'>
                <h1 class="main_title text-center">COVID-19 ALERT</h1>
            </div> 
        </div>
        -->

        <div class="holder-small">

            <?php $data = get_field("blog_content"); ?>

            <?php 
                foreach($data['group'] as $key => $value)
                {
                    if($value['type'] == "full_width")
                    {
                        ?>
                            <div class="mt15 mb15">
                                <img src="<?php echo @$value['full_width']['sizes']['image_1300_770']; ?>" class="img-full display-block">
                            </div>
                        <?php
                    }
                    else if($value['type'] == "grid")
                    {
                        
                        ?>
                        <div class="grid-container col-2 gap20 mt15 mb15">
                            <?php foreach( $value['grid'] as $image ): ?>
                                <div class="grid-item">
                                    <img src="<?php echo esc_url($image['sizes']['image_740_500']); ?>" class="img-full">
                                </div>
                            <?php endforeach; ?>
                        </div>    
                        <?php
                    }
                    else if ($value['type'] == "content")
                    {
                        echo $value['content'];
                    }
                    else if ($value['type'] == "heading")
                    {
                        ?>
                        <h1 class="main_sub-title mt15 mb15"><?php echo $value['heading']; ?></h1>
                        <?php
                    }
                }
            ?>

            <!--
            <p>
                Sed maximus in nulla non aliquam. Vivamus vestibulum velit non sem rutrum, at condimentum elit ullamcorper. Aliquam in lacus et erat laoreet tempor. Integer commodo gravida risus a fermentum. Nulla pellentesque nunc id semper scelerisque. Nunc aliquet euismod nunc, et volutpat lectus ultrices sit amet. Ut sit amet urna quis tellus auctor hendrerit. Nullam cursus tortor massa, sed laoreet nunc vestibulum nec. Donec nec consectetur sem. Aenean rutrum, lectus vitae tempor commodo, leo ex pharetra justo, eu facilisis odio enim vitae risus. Ut sit amet elit quis justo laoreet sollicitudin. Nulla rhoncus eros imperdiet, mattis lacus ut, pretium metus. Sed suscipit luctus interdum. Praesent vel convallis felis.
            </p>
            <div class="grid-container col-2 gap20 mb30">
                <div class="grid-item">
                    <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/blog/post-8.png" class="img-full display-block">
                </div>
                <div class="grid-item">
                    <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/blog/post-9.png" class="img-full display-block">
                </div>
            </div>
            <h1 class="main_sub-title mb30">Mauris dui ligula, gravida imperdiet augue non, suscipit pretium augue. Ut id mauris quis elit viverra ullamcorper.</h1>
            <p>
                Sed maximus in nulla non aliquam. Vivamus vestibulum velit non sem rutrum, at condimentum elit ullamcorper. Aliquam in lacus et erat laoreet tempor. Integer commodo gravida risus a fermentum. Nulla pellentesque nunc id semper scelerisque. Nunc aliquet euismod nunc, et volutpat lectus ultrices sit amet. Ut sit amet urna quis tellus auctor hendrerit. Nullam cursus tortor massa, sed laoreet nunc vestibulum nec. Donec nec consectetur sem. Aenean rutrum, lectus vitae tempor commodo, leo ex pharetra justo, eu facilisis odio enim vitae risus. Ut sit amet elit quis justo laoreet sollicitudin. Nulla rhoncus eros imperdiet, mattis lacus ut, pretium metus. Sed suscipit luctus interdum. Praesent vel convallis felis.
            </p>
            <div class="mb30">
                <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/blog/post-10.png" class="img-full display-block">
            </div>
            <p>
                Sed maximus in nulla non aliquam. Vivamus vestibulum velit non sem rutrum, at condimentum elit ullamcorper. Aliquam in lacus et erat laoreet tempor. Integer commodo gravida risus a fermentum. Nulla pellentesque nunc id semper scelerisque. Nunc aliquet euismod nunc, et volutpat lectus ultrices sit amet. Ut sit amet urna quis tellus auctor hendrerit. Nullam cursus tortor massa, sed laoreet nunc vestibulum nec. Donec nec consectetur sem. Aenean rutrum, lectus vitae tempor commodo, leo ex pharetra justo, eu facilisis odio enim vitae risus. Ut sit amet elit quis justo laoreet sollicitudin. Nulla rhoncus eros imperdiet, mattis lacus ut, pretium metus. Sed suscipit luctus interdum. Praesent vel convallis felis.
            </p>
            -->
        </div>
    </section>

<?php
  //get_template_part('template_inc/inc','footer');
  get_footer();
?>
