<?php  get_header(); ?>

  <!--
  <section class="full_bg full_bg_no_bg" style="">
          <div class="container">
              <?php //include("inc/tmp_header.php"); ?>
          </div>
  </section>

  <section class="single-container ">
      <div class="holder_heading_background pb30">
            <h1 class="heading"><?php //the_title(); ?></h1>
            <div class="defaultContent"><?php //the_content(); ?></div>
      </div>
  </section>
  -->

  <!-- Hero -->
  <?php $data = get_field("showroom_top_hero"); ?>
  <?php //echo @$data['background']['sizes']['main_hero'];?>
  <section class="hero-image mb50" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo @$data['background']['sizes']['main_hero'];?>');">
        <div class="hero-container">
            <div class="hero-text-middle">
                <h1 class='title_case_study'><?php the_title(); ?> <!-- NAME OF THE <br> CASESTUDY --></h1>
            </div>
        </div>
    </section>


    <!-- Intro Windowcity -->
    <?php $data = get_field("showroom_general_content"); ?>
    <?php 
        if( ($data) ) 
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


    <?php $data = get_field("showroom_images"); ?>
    <?php if($data) { ?>
        <section class="main_container  pb50">
            <?php 
                foreach($data['group'] as $key => $value)
                {
                   // echo $value['type'];
                    if($value['type'] == "full_width")
                    {
                        ?>
                            <div class="mb20 mt20">
                                <img src="<?php echo @$value['full_width']['sizes']['image_1300_770']; ?>" class="img-full display-block">
                            </div>
                        <?php
                    }
                    else
                    {
                        
                        ?>
                        <div class="grid-container col-2 gap20">
                            <?php foreach( $value['grid'] as $image ): ?>
                                <div class="grid-item">
                                    <img src="<?php echo esc_url($image['sizes']['image_740_500']); ?>" class="img-full">
                                </div>
                            <?php endforeach; ?>
                        </div>    
                        <?php
                    }
                }
            ?>
            <!--
            <div class="mb20">
                <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/showroom/detail/detail-showroom-1.png" class="img-full display-block">
            </div>

            <div class="grid-container col-2 gap20">
                <div class="grid-item">
                    <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/showroom/showroom-2.png" class="img-full display-block">
                </div>
                <div class="grid-item">
                    <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/showroom/showroom-3.png" class="img-full display-block">
                </div>
            </div>
            
            <div class="mt20 mb20">
                <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/showroom/detail/detail-showroom-4.png" class="img-full display-block">
            </div>

            <div class="grid-container col-2 gap20">
                <div class="grid-item">
                    <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/showroom/detail/detail-showroom-5.png" class="img-full display-block">
                </div>
                <div class="grid-item">
                    <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/showroom/detail/detail-showroom-6.png" class="img-full display-block">
                </div>
                <div class="grid-item">
                    <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/showroom/detail/detail-showroom-7.png" class="img-full display-block">
                </div>
                <div class="grid-item">
                    <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/showroom/detail/detail-showroom-8.png" class="img-full display-block">
                </div>
            </div>
            -->
        </section>
    <?php } ?>

<?php
  //get_template_part('template_inc/inc','footer');
  get_footer();
?>
