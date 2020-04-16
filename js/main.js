$(document).ready(function(){	

    var isDesktop = false,
        isTablet = false,
        isMobile = false;

    function resize(){
       if( typeof( window.innerWidth ) == 'number' ) {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if( document.documentElement && ( document.documentElement.clientWidth || 
        document.documentElement.clientHeight ) ) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }

        if( myWidth > 1024 ){
            isDesktop = true;
            isTablet = false;
            isMobile = false;
        }else if( myWidth > 767 && myWidth < 1023 ){
            isDesktop = false;
            isTablet = true;
            isMobile = false;
        }else{
            isDesktop = false;
            isTablet = false;
            isMobile = true;
        }
    }

    function bindFancy(){
        $(".fancy:not(.fancy-binded)").each(function(){

            if ($(this).hasClass('b-faq') && !isMobile){
                return;
            }

            var $popup = $($(this).attr("href")),
                $this = $(this);
            $this.fancybox({
                padding : 0,
                content : $popup,
                helpers: {
                    overlay: {
                        locked: true 
                    }
                },
                beforeShow: function(){
                    $(".fancybox-wrap").addClass("beforeShow");
                    $popup.find(".custom-field").remove();
                    if( $this.attr("data-value") ){
                        var name = getNextField($popup.find("form"));
                        $popup.find("form").append("<input type='hidden' class='custom-field' name='"+name+"' value='"+$this.attr("data-value")+"'/><input type='hidden' class='custom-field' name='"+name+"-name' value='"+$this.attr("data-name")+"'/>");
                    }
                    if( $popup.attr("data-beforeShow") && customHandlers[$popup.attr("data-beforeShow")] ){
                        customHandlers[$popup.attr("data-beforeShow")]($popup);
                    }
                },
                afterShow: function(){
                    $(".fancybox-wrap").removeClass("beforeShow");
                    $(".fancybox-wrap").addClass("afterShow");
                    if( $popup.attr("data-afterShow") && customHandlers[$popup.attr("data-afterShow")] ){
                        customHandlers[$popup.attr("data-afterShow")]($popup);
                    }
                    $popup.find("input[type='text'],input[type='number'],textarea").eq(0).focus();
                },
                beforeClose: function(){
                    $(".fancybox-wrap").removeClass("afterShow");
                    $(".fancybox-wrap").addClass("beforeClose");
                    if( $popup.attr("data-beforeClose") && customHandlers[$popup.attr("data-beforeClose")] ){
                        customHandlers[$popup.attr("data-beforeClose")]($popup);
                    }
                },
                afterClose: function(){
                    $(".fancybox-wrap").removeClass("beforeClose");
                    $(".fancybox-wrap").addClass("afterClose");
                    if( $popup.attr("data-afterClose") && customHandlers[$popup.attr("data-afterClose")] ){
                        customHandlers[$popup.attr("data-afterClose")]($popup);
                    }
                }
            });
            $this.addClass("fancy-binded");
        });
    }
    
    $(window).resize(resize);
    resize();

    bindFancy();

    $.fn.placeholder = function() {
        if(typeof document.createElement("input").placeholder == 'undefined') {
            $('[placeholder]').focus(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(function() {
                var input = $(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur().parents('form').submit(function() {
                $(this).find('[placeholder]').each(function() {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });
            });
        }
    }
    $.fn.placeholder();

    $(document).find(".b-tab-slider-list").each(function(){
        $(this).slick({
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            cssEase: 'ease', 
            fade: true,
            speed: 500,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev slick-arrow icon-arrow-left"></button>',
            nextArrow: '<button type="button" class="slick-next slick-arrow icon-arrow-right"></button>',
            touchThreshold: 100,
        });
    });

    $(document).find(".b-3-list").slick({
        dots: false,
        slidesToShow: 8,
        slidesToScroll: 1,
        cssEase: 'ease',
        autoplay: true,
        speed: 1500,
        autoplaySpeed: 1500,
        arrows: false,
        draggable: false,
        touchMove: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 4
          }
        }]
    });
    // // Первая анимация элементов в слайде
    // $(".b-step-slide[data-slick-index='0'] .slider-anim").addClass("show");

    // // Кастомные переключатели (тумблеры)
    $(".b-tab-slider-list").on('beforeChange', function(event, slick, currentSlide, nextSlide){
        var tabs = slick.$slider.parents('.b-tab-block').find('.b-tab-item');
        
        if (isMobile) {
            var bottom = slick.listHeight - slick.$slides.eq(nextSlide).height() - 8;
        } else {
            var bottom = slick.listHeight - slick.$slides.eq(nextSlide).height() + 21;
        }

        slick.$slider.parents('.b-tab-block').find('.slick-arrow').css('bottom', bottom);
        tabs.removeClass('active');
        tabs.eq(nextSlide).addClass("active");
    });

    $(document).on('click', '.b-tab-item', function(){
        id = $(this).attr("id");
        $(this).parents('.b-tab-block').find(".b-tab-slider-list").slick('slickGoTo', $('[data-id='+id+']').attr('data-slick-index'), true);
    });

    $(document).find('select').each(function(){
        // $(this).styler();
    });

    $(document).on('click', '.b-faq-left a', function(){

        $('.b-faq-left a').removeClass('active');
        $(this).addClass('active');
        var id = $(this).attr('data-id');
        var h3 = $('#'+id).find('h3').text();
        var p = $('#'+id).find('p').text();
        $('#faq-popup').find('h3').text(h3);
        $('#faq-popup').find('p').text(p);

        $('.b-faq-item.active').animate({
            opacity : 'hide',
            height : 'hide'
        }, 200, 'swing', function(){

            $('#'+id).animate({
                opacity : 'show',
                height : 'show'
            }, 400);

            $('.b-faq-item.active').removeClass('active');
            $('#'+id).addClass('active');

        });

        return false;
    });

    initialize();

    function initialize() {
        var myPlace = new google.maps.LatLng(56.5273681, 84.98542719999999);
        var myOptions = {
            zoom: 16,
            center: new google.maps.LatLng(56.5283681, 84.9855171),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true,
            scrollwheel: false,
            zoomControl: true
        }

        var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

        addMarker(myPlace, map);

        map.addListener('drag',function(event) {
            var bubble = $(document).find('.b-map-bubble');

            if (bubble.hasClass('show')) {
                bubble.animate({
                    opacity : 'hide',
                }, 300);
                bubble.removeClass('show');
            }
        });
    }

    function addMarker(latlng,map) {
        var marker = new google.maps.Marker({
            position: latlng,
            icon: {
                url: "http://localhost/autosafe/i/pin.svg", // url
                scaledSize: new google.maps.Size(50, 67), // scaled size
                origin: new google.maps.Point(0,0), // origin
                anchor: new google.maps.Point(19,58) // anchor
            },
            map: map,
        });

        marker.addListener('click',function(event) {
            var bubble = $(document).find('.b-map-bubble');
            
            if (!bubble.hasClass('show')) {
                bubble.animate({
                    opacity : 'show',
                }, 300);
                bubble.addClass('show');
            }
            
            map.panTo(new google.maps.LatLng(56.5283681, 84.9855171));
        });
    }

    // ===========

    var arCars = {};
    $.ajax({
        type: "GET",
        url: "/storage/cars.json",
        success: function(res){
            arCars = res;
            for (mark in arCars) {
                if(mark){
                    $('.b-select-mark').append('<option value="' + mark + '">' + mark + '</option>');
                }
            }
            //console.log(arCars);
        },
    });

    var $calcForm = $('.b-form-calc-power').validate({errorElement : "span"});

    $(document).on('change', '.b-select-mark', function(){
        $(".b-select-model option:not(.default-option), .b-select-engine option:not(.default-option)").remove();
        if($(this).val()){
            $calcForm.resetForm();
            for (model in arCars[$(this).val()]) {
                if(model){
                    $('.b-select-model').append('<option value="' + model + '">' + model + '</option>');
                }
            }
        }
    });

    $(document).on('change', '.b-select-model', function(){
        $(".b-select-engine option:not(.default-option)").remove();
        if($(this).val() && $('.b-select-mark').val()){
            $calcForm.resetForm();
            var arModel = arCars[$('.b-select-mark').val()][$(this).val()];
            for (engine in arModel) {
                if(engine && arModel[engine] && arModel[engine].powerBefore && arModel[engine].powerAfter){
                    $('.b-select-engine').append('<option value="' + engine + '">' + 
                        arModel[engine].name + ' (' + arModel[engine].powerBefore + ' л.с.)' + '</option>');
                }
            }
        }
    });

    $(document).on('click', '.b-btn-calc-power', function(){
        if($calcForm.form()){
            alert(arCars[$('.b-select-mark').val()][$('.b-select-model').val()][$('.b-select-engine').val()].powerAfter);
        }
        
        return false;
    });

});