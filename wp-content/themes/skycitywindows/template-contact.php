<?php
    /*
     * Template Name: Template Contact
     */
?>

<?php  get_header(); ?>

    <section class="main_container pt50 pb50">

        <div class="holder-contact-page">
            <div id="contact_p_info">
                <h1 class="main_sub-title mb20 show_only_desktop_768"><?php echo strtoupper(get_the_title()); ?></h1>
                <div id="block-content">
                    <?php $data = get_field("settings_footer_information","option"); ?>
                    <?php if($data) { ?>
                       
                            <div class="">
                                <h3 class="title-third"><?php echo $data['content_1']['key']; ?></h3>
                                <div class="info">
                                    <?php echo $data['content_1']['value']; ?>
                                </div>
                            </div>
                            <div class="">
                                <h3 class="title-third"><?php echo $data['content_2']['key']; ?></h3>
                                <div class="info">
                                    <?php echo $data['content_2']['value']; ?>
                                </div>
                            </div>
                            <div class="">
                                <h3 class="title-third"><?php echo $data['content_3']['key']; ?></h3>
                                <div class="info">
                                    <?php echo $data['content_3']['value']; ?>
                                </div>
                            </div>
                            <div class="">
                                <h3 class="title-third"><?php echo $data['content_4']['key']; ?></h3>
                                <div class="info">
                                    <?php echo $data['content_4']['value']; ?>
                                </div>
                            </div>                            
                        
                    <?php } ?>
                </div>
            </div>
            <div id="contact_p_form">
                <!--<h1 class="main_sub-title mb20 show_only_mobile_768"><?php //echo strtoupper(get_the_title()); ?></h1> -->
                <div class="form-request">
                    
                    <?php $data = get_field("contact_content"); ?>
                    <?php $posts = $data; //$data['form'];
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
                    <form method="post" id="form_contact_page" class="form-request">
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

                        <input type="submit" id="" name="" class="btn-explore btn-blue border-none " value="SUBMIT">
                    </form>
                -->
                
            </div>
        </div>
    </section>


<?php get_footer(); ?>

