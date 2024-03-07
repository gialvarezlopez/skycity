<?php
//Implement Cookie with HTTPOnly and Secure flag in WordPress


function skycitywindows_setup(){
	//Featured Image
	add_theme_support('post-thumbnails');

	//===================
	//Sizes custom
    //===================
    add_image_size('main_hero', 1600,800, true); //Crop with true //Hero Top,
    add_image_size('image_600_250', 600, 520, true); //Crop with true //Home - step procedure 
    add_image_size('image_750_470', 750, 470, false); //Crop with true //grid middle
    add_image_size('image_520_635', 520, 635, true); //Crop with true //about grid
    add_image_size('image_520_430', 520, 430, true); //Crop with true //windows grid
    add_image_size('image_610_570', 610, 570, false); //Crop with true //windows detail page - top
    add_image_size('image_740_570', 740, 570, true); //Crop with true //windows detail page  - grid buttom
    add_image_size('image_740_500', 740, 500, true); //Crop with true //showroom page - grid and showroom detail page - grid and blog page and detail page
    add_image_size('image_1300_770', 1300, 770, true); //Crop with true //showroom detail page - full

}

add_action('after_setup_theme','skycitywindows_setup');



/* CSS and JS */
function skycitywindows_styles(){
	//==============================
	//Add style page
	//==============================
    
    //wp_enqueue_style("bootstrap","https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css");
	wp_enqueue_style("fonts", get_template_directory_uri().'/fonts/fonts.css',array(),'1.0.0');
    wp_enqueue_style("reset", get_template_directory_uri().'/css/reset.css',array(),'1.0.0');
   
    wp_enqueue_style("theme", get_template_directory_uri().'/css/theme.css',array(),'1.0.1.47');
	//wp_enqueue_style("theme", get_stylesheet_uri(),array(),'1.0.0');


	//==============================
	//Slick Slider
	//==============================
	wp_enqueue_script('slick.js',get_template_directory_uri()."/assets/slick/slick.js", array('jquery'), '1.0.0', true);
    wp_enqueue_style("slick.css", get_template_directory_uri().'/assets/slick/slick.css',array(),'1.0.0');
    
    //Gallery
    wp_enqueue_script('fancybox.min.js',"https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js", array('jquery'), '1.0.0', true);
    wp_enqueue_style('fancybox.min.css',"https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css");


    //==============================
	//Main Scripts
	//==============================
    wp_enqueue_script('scripts',get_template_directory_uri()."/js/script.js", array('jquery'), '1.0.11', true);


    //Ajax
	wp_localize_script( 'scripts', 'ajax_var', array(
        'url'    => admin_url( 'admin-ajax.php' ),
        'nonce'  => wp_create_nonce( 'my-ajax-nonce' ),
    ) );
    
}
add_action("wp_enqueue_scripts", "skycitywindows_styles");



//============================================================
//Send email to admin to contact about the Unit
//============================================================
function skycitywindows_contact_unit()
{
    if ( ! isset( $_POST['nonce_unit'] )  || ! wp_verify_nonce( $_POST['nonce_unit'], 'nonce_action_send_unit' ) ) 
    {
        print 'Sorry, your nonce did not verify.';
        $return = array(
            'message'  => 'Sorry, nonce not verified.',
            'status'   => 0
        );
        wp_send_json($return);
    } 
    else 
    {
        // process form data
        $message = sanitize_text_field( $_POST['message'] );
        $unit = sanitize_text_field( $_POST['unit'] );
        $name = sanitize_text_field( $_POST['name'] );
        $page_id = sanitize_text_field( $_POST['page_id'] );
        $email = sanitize_email( $_POST['email'] );
        $phone_number = sanitize_text_field( $_POST['phone_number'] );
        $destination = sanitize_text_field( base64_decode($_POST['destination']) );

        $arrTo = array();
        if(  $destination != "")
        {
            $inputList = explode(",",  $destination);
            foreach($inputList as $item)
            {
                if( $item != "")
                {
                    $arrTo[] = $item;
                }
            }
        }

        //$parentpost_id = wp_get_post_parent_id( $page_id );
        $data = get_field("availability_units", $page_id);
        $setSubject =  trim($data['subject']);//."--->";
        if( $setSubject == "" )
        {
            $setSubject = "Contact from availability page - Unit ";
        }

        $subject = $setSubject." ".$unit."";
        $body = "<p><strong>Name: </strong>".$name."</p>";
        $body .= "<p><strong>Email: </strong>".$email."</p>";
        $body .= "<p><strong>Phone Number: </strong>".$phone_number."</p>";
        $body .= "<p><strong>Message: </strong>".$message."</p>";
        $arrTo[] = trim($destination);
        $to = $arrTo;
        $headers = array('Content-Type: text/html; charset=UTF-8');
        wp_mail( $to, $subject, $body, $headers );
        
        $return = array(
            'message'  => 'Thank you, the message was sent',
            'status'   => 1
        );
        wp_send_json($return);
    }
    wp_die();
}
add_action( 'wp_ajax_nopriv_skycitywindows_contact_unit', 'skycitywindows_contact_unit' );
add_action( 'wp_ajax_skycitywindows_contact_unit', 'skycitywindows_contact_unit' );



/*Menus*/
function skycitywindows_menus(){
    register_nav_menus( array(
        'header-menu' => 'Header Menu',
        'footer-menu-left' => 'Footer Menu left',
        'footer-menu-right' => 'Footer Menu right',
    ));
}
add_action("init","skycitywindows_menus" );

//Add extra menu in menu menu
/*
function add_last_nav_item($items) {
    return $items .= '<li><a href="#myModal" role="button" data-toggle="modal">Contact x</a></li>';
}
add_filter('wp_nav_menu_items','add_last_nav_item');
*/




//add_action('acf/init', 'my_acf_op_init');
if( function_exists('acf_add_options_page') ) {
    
    $parent =  acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    // Add sub page.
    /*
    $child = acf_add_options_page(array(
        'page_title'  => __('Google Map'),
        'menu_title'  => __('Google Map'),
        'parent_slug' => $parent['menu_slug'],
    ));

    $child = acf_add_options_page(array(
        'page_title'  => __('Google Analytics'),
        'menu_title'  => __('Google Analytics'),
        'parent_slug' => $parent['menu_slug'],
    ));

    $child = acf_add_options_page(array(
        'page_title'  => __('Google Tag Manager'),
        'menu_title'  => __('Google Tag Manager'),
        'parent_slug' => $parent['menu_slug'],
    ));
    */
}





