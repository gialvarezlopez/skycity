jQuery(function ($) {
    if( $("#unparalleled_performance").length == 1 )
    {
        $('#unparalleled_performance').slick({
                arrows: true,
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 3,
                adaptiveHeight: true,
                prevArrow: $('#unparalleled_arrow_left'),
                nextArrow: $('#unparalleled_arrow_right'),
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        //dots: true,
                        //arrows: false,
                    }
                    },
                    {
                    breakpoint: 760,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        //arrows: false,
                    }
                    },
                    /*
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        //arrows: false,
                    }
                    }
                    */
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
        });
    }

    if( $("#content_stick_case_study").length == 1 )
    {
        $("#content_stick_case_study").slick({
                arrows: true,
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                adaptiveHeight: true,
                prevArrow: $('#hero_arrow_left'),
                nextArrow: $('#hero_arrow_right'),
                /*
                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        //dots: true,
                        //arrows: false,
                    }
                    },
                    {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        //arrows: false,
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        //arrows: false,
                    }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
                */
        })
    }

    if( $("#content_slick_process_steps").length == 1 )
    {
        $("#content_slick_process_steps").slick({
                arrows: true,
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 3,
                adaptiveHeight: true, 
                prevArrow: $('#approach_p_arrow_left'),
                nextArrow: $('#approach_p_arrow_right'),

                responsive: [
                    {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        //dots: true,
                        //arrows: false,
                    }
                    },
                    {
                    breakpoint: 760,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        //arrows: false,
                    }
                    },
                    /*
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        //arrows: false,
                    }
                    }
                    */
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
                
        });
    }
    /*
    $(window).load(function() {
        // Custom carousel nav
        $('.unparalleled_arrow_left').click(function(e){ 
            e.preventDefault();
            $(this).closest(".holder_slick_rows").find('.slick-slider').slick('slickPrev');
            //alert();
        } );
        
        $('.unparalleled_arrow_right').click(function(e){
            e.preventDefault(); 
            $(this).closest(".holder_slick_rows").find('.slick-slider').slick('slickNext');
        } );

    });
    */

    //==============================================================
    //Menu
    //==============================================================
    function myFunction(x) {
        if (x.matches) { // If media query matches
            $("#holderMenuItems").hide();
            $('#icon-menu-open').show();
            $("#icon-menu-close").hide();
        } else {
            $("#holderMenuItems").show();
            $('#icon-menu-open').hide();
            $("#icon-menu-close").show();
        }
    }
    
    var x = window.matchMedia("(max-width: 990px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes

    $('.icon-action-menu').on('click', function(e){
        
        var icon = $("#icon-menu-open");
        let containerMenu = $(".holderMenuItems");
        if(icon.is(':visible'))
        {
            containerMenu.show();
            $('#icon-menu-open').hide();
            $("#icon-menu-close").show();

        } else {
            containerMenu.hide();
            $('#icon-menu-open').show();
            $("#icon-menu-close").hide();

        }
        
    });


    $("body").on("click",".btn-open-modal-request-quote", function(event){
        event.preventDefault();
        $("body").addClass("no-scrollbar");
        $("#modalGetAQuote").show();
    })

    $("body").on("click", ".close_modal", function(){
        $("body").removeClass("no-scrollbar");
        $(this).closest(".modal").hide();
    });

    if( $('[data-fancybox="gallery"]').length > 0 )
    {
        $('[data-fancybox="gallery"]').fancybox({
            buttons : [ 
            //'slideShow',
            //'share',
            'zoom',
            'fullScreen',
            'close'
            ],
            //clickOutside: "close",
            clickSlide: "",
            //infobar: true,
            thumbs : {
            //autoStart : true
            }
        });
    }

    $("body").on("click","#btn_close_top_banner", function(event){
        event.preventDefault();
        $("#top_banner_container").hide();
        sessionStorage.setItem('banner_closed', 1);
    });

    if( sessionStorage.getItem('banner_closed') == 1 )
    {
        $("#top_banner_container").hide();
    }else{
        $("#top_banner_container").show();
    }

    $("body").on("click",".link-more-steps",function(event){
        event.preventDefault();
        let stepNumber = $(this).data("step");

        $(".modal-approach-process").hide();
        $(".modal-approach-process .holder-step").hide();

        $(".modal-approach-process").show();
        $(".modal-approach-process .holder-step-number-"+stepNumber).show();

    });

    $("body").on("click","#close-model-step", function(event){
        event.preventDefault();
        $(".modal-approach-process").hide();
        $(".modal-approach-process .holder-step").hide();
    })


    //Contact form 7
    $(".wpcf7-response-output").each(function(){
        let output = $(this).closest("form").find(".holder-response-output");
        let response = $(this).closest("form").find(".wpcf7-response-output");
        response.appendTo(output);
    });

});