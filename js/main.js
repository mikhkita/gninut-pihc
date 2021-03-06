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

        //перенести b-5-top-right
        if(isMobile){
            if($('.b-5-top-right-desktop .b-5-top-right-content').length){
                $('.b-5-top-right-mobile').append($('.b-5-top-right-desktop .b-5-top-right-content'));
            }
        }else{
            if($('.b-5-top-right-mobile .b-5-top-right-content').length){
                $('.b-5-top-right-desktop').append($('.b-5-top-right-mobile .b-5-top-right-content'));
            }
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

    $(".b-tab-slider-list").on('init', function(event, slick){
        setSliderArrowPosition(slick);
    });

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
        cssEase: 'linear',
        autoplay: true,
        speed: 7500,
        autoplaySpeed: 0,
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

    function setSliderArrowPosition(slick, nextSlide = 0){
        var tabs = slick.$slider.parents('.b-tab-block').find('.b-tab-item');
        if (isMobile) {
            var bottom = slick.$slider.height() - slick.$slides.eq(nextSlide).height();
        } else {
            var bottom = slick.$slider.height() - slick.$slides.eq(nextSlide).height() + 21;
        }

        slick.$slider.parents('.b-tab-block').find('.slick-arrow').css('bottom', bottom);
    }

    $(".b-tab-slider-list").on('beforeChange', function(event, slick, currentSlide, nextSlide){
        var tabs = slick.$slider.parents('.b-tab-block').find('.b-tab-item');
        setSliderArrowPosition(slick, nextSlide)
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

    function changeMainBtnPosition(){
        var btn = $('.b-1').find('.b-btn-cont');
        var btnHtml = '<div class="b-btn-cont">'+btn.html()+'</div>';

        if (isMobile){
            $('.b-1-main-inner').after(btnHtml);
        } else {
            $('.b-1-main-text').after(btnHtml);
        }

        btn.remove();
    }

    changeMainBtnPosition();

    $(window).resize(function(){
        changeMainBtnPosition();
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
                bubble.removeClass('show');
            }
        });
    }

    function addMarker(latlng,map) {
        var marker = new google.maps.Marker({
            position: latlng,
            icon: {
                url: "i/pin.svg", // url
                scaledSize: new google.maps.Size(50, 67), // scaled size
                origin: new google.maps.Point(0,0), // origin
                anchor: new google.maps.Point(19,58) // anchor
            },
            map: map,
        });

        marker.addListener('click',function(event) {
            var bubble = $(document).find('.b-map-bubble');
            
            if (!bubble.hasClass('show')) {
                bubble.addClass('show');
            }
            
            map.panTo(new google.maps.LatLng(56.5283681, 84.9855171));
        });
    }

    // ===========

    function findElementCar(targetKey, obj, returnKey) {
        returnKey = returnKey || false;
        targetKey = targetKey.toLowerCase();
        var matchObj = false,
            matchKey = false;
        for (key in obj) {
            if(key.toLowerCase() === targetKey){
                matchObj = obj[key];
                matchKey = key;
            }
        }

        return (returnKey) ? matchKey : matchObj;
    }

    function changeOtherSelect($selector, value) {
        $($selector).val(value);
        $('.b-form-calc-power select, .b-form-request select').each(function(){
            if ($(this).val().length !== 0) {
                $(this).removeClass('error');
                $(this).parent().removeClass('error');
                $(this).parent().addClass('not-empty');
            } else {
                $(this).parent().removeClass('not-empty');
            }
        });
    }

    function changeCarImages(mark, model) {
        model = model || false;
        var target = mark,
            $carSelectors = '.b-car, .b-3-car, .b-7-car';
        if(model){
            target += "|"+model;
            if(carImages[target]){

                if (typeof carImages[target][1] == 'undefined') {
                    carImages[target][1] = carImages[target][0];
                }

                $('.b-car').css('background-image', 'url("'+carImages[target][0]+'")');
                $('.b-3-car').css('background-image', 'url("'+carImages[target][1]+'")');
                $('.b-7-car').css('background-image', 'url("'+carImages[target][1]+'")');
            }else if(carImages[mark]){

                if (typeof carImages[mark][1] == 'undefined') {
                    carImages[mark][1] = carImages[mark][0];
                }

                $('.b-car').css('background-image', 'url("'+carImages[mark][0]+'")');
                $('.b-3-car').css('background-image', 'url("'+carImages[mark][1]+'")');
                $('.b-7-car').css('background-image', 'url("'+carImages[mark][1]+'")');
            }
        }else if(carImages[mark]){

            if (typeof carImages[mark][1] == 'undefined') {
                carImages[mark][1] = carImages[mark][0];
            }

            $('.b-car').css('background-image', 'url("'+carImages[mark][0]+'")');
            $('.b-3-car').css('background-image', 'url("'+carImages[mark][1]+'")');
            $('.b-7-car').css('background-image', 'url("'+carImages[mark][1]+'")');
        }

        $('.current-car').text(mark + ((model) ? " "+model : ""));

    }

    var $calcForm = $('.b-form-calc-power').validate({errorElement : "span"});

    $(document).on('change', '.b-select-mark', function(){
        var $form = $(this).parents("form");
        $(".b-select-model option:not(.default-option), .b-select-engine option:not(.default-option)").remove();
        var target = false;
        if($(this).val()){
            target = findElementCar($(this).val(), arCars);
        }
        if(target){
            $calcForm.resetForm();
            for (model in target) {
                if(model){
                    $('.b-select-model').append('<option value="' + model + '">' + model + '</option>');
                }
            }
            changeCarImages($(this).val());
        }
        changeOtherSelect($form.hasClass('b-form-calc-power') ? '.b-form-request .b-select-mark' : '.b-select-mark', $(this).val());
    });

    $(document).on('change', '.b-select-model', function(){
        var $form = $(this).parents("form");
        $(".b-select-engine option:not(.default-option)").remove();
        var target = false;
        if($(this).val() && $form.find('.b-select-mark').val()){
            target = findElementCar($(this).val(), arCars[$form.find('.b-select-mark').val()]);
        }
        if(target){
            $calcForm.resetForm();
            for (engine in target) {
                if(engine && target[engine] && target[engine].powerBefore && target[engine].powerAfter){
                    $('.b-select-engine').append('<option value="' + engine + '">' + 
                        target[engine].name + ' (' + target[engine].powerBefore + ' л.с.)' + '</option>');
                }
            }
            changeCarImages($form.find('.b-select-mark').val(), $(this).val());
        }
        changeOtherSelect($form.hasClass('b-form-calc-power') ? '.b-form-request .b-select-model' : '.b-select-model', $(this).val());
    });

    $(document).on('change', '.b-select-engine', function(){
        var $form = $(this).parents("form");
        changeOtherSelect($form.hasClass('b-form-calc-power') ? '.b-form-request .b-select-engine' : '.b-select-engine', $(this).val());
    });

    $(document).on('click', '.b-btn-calc-power', function(){
        var $form = $(this).parents("form");
        if($calcForm.form()){
            $('.b-power-after .power-value').text(
                arCars[$form.find('.b-select-mark').val()][$form.find('.b-select-model').val()][$form.find('.b-select-engine').val()].powerAfter);
            $('.b-5-motor-default').removeClass("show");
            $('.b-5-motor-fill').addClass("show");
        }

        $(this).parents('form').find('select').each(function(){
            if ($(this).hasClass('error')){
                $(this).parent().addClass('error');
            } else {
                $(this).parent().removeClass('error');
            }
        });
        
        return false;
    });

    if(typeof arCars !== undefined){
        for (mark in arCars) {
            if(mark){
                $('.b-select-mark').append('<option value="' + mark + '">' + mark + '</option>');
            }
        }
        if($('.b-5').attr("data-mark")){
            var targetMark = findElementCar($('.b-5').attr("data-mark"), arCars, true);
            if(targetMark){
                $('.b-select-mark').val(targetMark).change();
                if($('.b-5').attr("data-model")){
                    var targetModel = findElementCar($('.b-5').attr("data-model"), arCars[targetMark], true);
                    if(targetModel){
                        $('.b-select-model').val(targetModel).change();
                    }
                }
            }
        }
    }

    bindFancy();

});