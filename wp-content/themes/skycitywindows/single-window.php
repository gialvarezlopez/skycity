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
    <?php $data = get_field("window_description");?>
    
    <section class="main_container pt50 pb50" id="">
        <div class="holder-window-detail">
            <div class="w-content">
                <section id="block1">
                    <div class='content-image'>
                        <?php $url = get_the_post_thumbnail_url( get_the_ID(), 'image_610_570' ); ?>
                        <img src="<?php echo $url; ?>" class="img-full">
                        <!--
                        <?php //$feature_image = @$data['featured_image']['sizes']['image_610_570'];?>
                        <img src='<?php //echo $feature_image; ?>' class="img-full">
                        -->
                    </div>
                    <div class="info">
                        <h1 class="main_sub-title"><?php the_title(); ?></h1>
                        <div class='holderQuote'>
                            <div>
                                <?php 
                                    $sub_title = $data['sub_heading'];
                                    echo $sub_title;
                                ?>
                            </div>
                            <div>
                                <a href="#" class='btn-explore btn-blue btn-open-modal-request-quote'>
                                    <?php echo get_field("window_request_quote","option")['button_label']; ?>
                                </a>
                            </div>
                        </div>
                        <div>
                            <?php echo @$data['content']['block_1'];?>
                        </div>
                    </div>
                </section>
                <section id="block2">
                    <?php echo @$data['content']['block_2'];?>
                </section>
            </div>

            <?php $data = get_field("window_technical_features"); ?>
            <div class="w-features">
                <div>
                    <h3><?php echo $data['heading'];?></h3>
                </div>
                <div>
                    <?php 
                        $items = $data['items'];
                        if( count($items) > 0 )
                        {
                            ?>
                                <ul>
                                    <?php
                                        foreach($items as $key => $value)
                                        {
                                            ?>
                                            <li>
                                                <span>
                                                    <?php 
                                                        if($value['header_option'] == "title")
                                                        {
                                                            echo $value['title'];
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-<?php echo $value['icon']; ?>.png">
                                                            <?php
                                                        }
                                                    ?>
                                                </span>
                                                <div><?php echo $value['description'];?></div>
                                            </li>
                                            <?php
                                        }
                                    ?>   
                                </ul>
                            <?php
                        }
                    ?>
                    <!--
                    <ul>
                        <li>
                            <span>5-11/16”</span>
                            <div>Overall frame depth</div>
                        </li>
                        <li>
                            <span>5-11/16”</span>
                            <div>Rain screen air and water seal system</div>
                        </li>
                        <li>
                            <span>5-11/16”</span>
                            <div>Powder coated or optional PVDF painted finish</div>
                        </li>
                        <li>
                            <span>5-11/16”</span>
                            <div>System width</div>
                        </li>
                        <li>
                            <span>5-11/16”</span>
                            <div>NAFS AW-PG70 approved</div>
                        </li>
                        <li>
                            <span>5-11/16”</span>
                            <div>Glazing options available for double or triple glazed sealed units</div>
                        </li>
                        <li>
                            <span>5-11/16”</span>
                            <div>Extra-large polyamide thermal strut system for increased thermal performance</div>
                        </li>
                    </ul>
                    -->
                </div>
            </div>

            <?php $data = get_field("window_grid_image"); ?>

            <?php 
                if( $data )
                {
                    ?>
                        <div class="w-images">
                            <?php foreach( $data['gallery'] as $image ): ?>
                                <div class="holderSetBgImgGrid"  style='background-image: url(<?php echo esc_url($image['sizes']['image_740_570']); ?>);'>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-transparent-grid-2-col-style-639x471.png" class="img-full">
                                </div>
                            <?php endforeach; ?>
                            
                            
                        </div>
                    <?php
                }
            ?>
            
        </div>
    </section>

    

     <!-- The Modal -->
     <div id="modalGetAQuote" class="modal">

            <!-- Modal content -->
            <div class="modal-content-quotes">
                
                <div id="holder_form_amount">
                    <div class="" id="section_one">
                         
                        <div class="modal-header-title-icon">
                            <div></div>
                            <div><h1 class="main_sub-title text-center ">REQUEST A QUOTE</h1></div>
                            <div><span class="close_modal">&times;</span></div>
                        </div> 
                        <div class="form-request">
                        <?php $_GET['window_type'] = get_the_title()." | ".$sub_title; //Dinamic field?>
                        <?php $data = get_field("window_request_quote","option"); ?>
                        <?php $posts = $data['form'];
                            if( $posts ): 
                                foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) 
                                    $cf7_id= $p->ID;
                                    echo do_shortcode( '[contact-form-7 id="'.$cf7_id.'" ]' ); 
                                endforeach;
                            endif; 
                            //echo do_shortcode( '[contact-form-7 id="384" ]' ); 
                        ?>
                        </div>
                        <!--
                        <form method="post" id="form-get-quote" class="form-request">
                            <div class="holdersItemForm col-2" >
                                <div class="item_form">
                                    <input type="text" name="set_pay_first_name" id="set_pay_first_name" required autocomplete="off">
                                    <label>First Name</label> 
                                </div>
                                <div class="item_form">
                                    <input type="text" name="set_pay_last_name" id="set_pay_last_name" required autocomplete="off">
                                    <label>Last Name</label> 
                                </div>
                            </div>

                            <div class="holdersItemForm col-1">    
                                <div class="item_form">
                                    <input type="email" name="set_pay_email" id="set_pay_email" required autocomplete="off">
                                    <label>Email</label> 
                                </div>
                            </div>

                            <div class="holdersItemForm col-2" >
                                <div class="item_form">
                                    <input type="text" name="set_pay_first_name" id="set_pay_first_name"  autocomplete="off">
                                    <label>Phone (Optional)</label> 
                                </div>
                                <div class="item_form">
                                    <input type="text" name="set_pay_last_name" id="set_pay_last_name"  autocomplete="off">
                                    <label>Company (Optional)</label> 
                                </div>
                            </div>

                            <div class="holdersItemForm col-1" >
                                <div class="item_form"> 
                                    <textarea class="form-control" required></textarea>
                                    <label>Message</label> 
                                </div>
                            </div>

                            <input type="submit" id="" name="" class="btn-explore btn-blue border-none " value="SUBMIT A QUOTE">
                        </form>
                        -->
                    </div>             
                </div>

            </div>
    </div> 

<?php
  //get_template_part('template_inc/inc','footer');
  get_footer();
?>
