function getNextField($form){
	var j = 1;
	while( $form.find("input[name="+j+"]").length ){
		j++;
	}
	return j;
}

// function fancyOpen(el){
//     $.fancybox(el,{
//     	padding:0,
//     	fitToView: false,
//         scrolling: 'no',
//         beforeShow: function(){
// 			$(".fancybox-wrap").addClass("beforeShow");
// 			if( !device.mobile() ){
// 		    	$('html').addClass('fancybox-lock'); 
// 		    	$('.fancybox-overlay').html($('.fancybox-wrap')); 
// 		    }
// 		},
// 		afterShow: function(){
// 			$(".fancybox-wrap").removeClass("beforeShow");
// 			$(".fancybox-wrap").addClass("afterShow");
// 			setTimeout(function(){
//                 $('.fancybox-wrap').css({
//                     'position':'absolute'
//                 });
//                 $('.fancybox-inner').css('height','auto');
//             },200);
// 		},
// 		beforeClose: function(){
// 			$(".fancybox-wrap").removeClass("afterShow");
// 			$(".fancybox-wrap").addClass("beforeClose");
// 		},
// 		afterClose: function(){
// 			$(".fancybox-wrap").removeClass("beforeClose");
// 			$(".fancybox-wrap").addClass("afterClose");
// 		},
//     }); 
//     return false;
// }

var customHandlers = [];

$(document).ready(function(){	
	var rePhone = /^\+\d \(\d{3}\) \d{3}-\d{2}-\d{2}$/,
		tePhone = '+7 (999) 999-99-99';

	$.validator.addMethod('customPhone', function (value) {
		return rePhone.test(value);
	});

	$(".ajax").parents("form").each(function(){
		$(this).validate({
			rules: {
				email: 'email',
				phone: 'customPhone'
			},
			errorElement : "span",
		});
		if( $(this).find("input[name=phone]").length ){
			$(this).find("input[name=phone]").each(function(){
				var phoneMask = new IMask($(this)[0], {
		        	mask: '+{7} (000) 000-00-00',
		        	prepare: function(value, masked){
				    	if( value == 8 && masked._value.length == 0 ){
				    		return "+7 (";
				    	}

				    	if( value == 8 && masked._value == "+7 (" ){
				    		return "";
				    	}

				    	tmp = value.match(/[\d\+]*/g);
				    	if( tmp && tmp.length ){
				    		value = tmp.join("");
				    	}else{
				    		value = "";
				    	}
				    	return value;
				    }
		        });
			});
		}
	});

	function whenScroll(){
		var scroll = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;
		if( customHandlers["onScroll"] ){
			customHandlers["onScroll"](scroll);
		}
	}
	$(window).scroll(whenScroll);
	whenScroll();

	var open = false;
    $("body").on("mouseup", ".b-popup *, .b-popup", function(){
        open = true;
    });
    $("body").on("mousedown", ".fancybox-slide", function() {
        open = false;
    }).on("mouseup", ".fancybox-slide", function(){
        if( !open ){
            $.fancybox.close();
        }
    });

	$(".b-go").click(function(){
		var block = $( $(this).attr("data-block") ),
			off = $(this).attr("data-offset")||0,
			duration = $(this).attr("data-duration")||800;
		$("body, html").animate({
			scrollTop : block.offset().top-off
		},duration);
		return false;
	});

	$(".fancy-img").fancybox({
		padding : 0
	});

	$(".goal-click").click(function(){
		if( $(this).attr("data-goal") )
			yaCounter12345678.reachGoal($(this).attr("data-goal"));
	});

	$('select').on('change', function(){
		if ($(this).val().length !== 0) {
			$(this).removeClass('error');
			$(this).parent().removeClass('error');
			$(this).parent().addClass('not-empty');
		} else {
			$(this).parent().removeClass('not-empty');
		}
	});

	$('input').on('input', function(){
		if ($(this).hasClass('error')) {
			$(this).valid();
		}
	});

	$(".ajax").parents("form").submit(function(){
		$(this).find('select').each(function(){
			if ($(this).hasClass('error')){
				$(this).parent().addClass('error');
			} else {
				$(this).parent().removeClass('error');
			}
			// if ($(this).val().length == 0) {
			// 	$(this).addClass('error');
			// 	$(this).parents('.jq-selectbox').addClass('error');
			// } else {
			// 	$(this).removeClass('error');
			// 	$(this).parents('.jq-selectbox').removeClass('error');
			// }
		});
  		if( $(this).find("input.error,select.error,textarea.error").length == 0 ){
  			var $this = $(this),
  				$thanks = $($this.attr("data-block"));

  			$this.find(".ajax").attr("onclick", "return false;");

  			if( $this.attr("data-beforeAjax") && customHandlers[$this.attr("data-beforeAjax")] ){
				customHandlers[$this.attr("data-beforeAjax")]($this);
			}

			if( $this.attr("data-goal") ){
				yaCounter12345678.reachGoal($this.attr("data-goal"));
			}
			//собрать параметры для b-form-request
			var params = "";
			if($this.hasClass("b-form-request")){
				$this.find("select, input, textarea").each(function(){
					if($(this).hasClass("b-select-engine")){
						params += $(this).attr("name") + "=" + $(this).find('option:selected').text()+"&";
					}else{
						params += $(this).serialize()+"&";
					}
				});
			}
			// console.log(params);
  			$.ajax({
			  	type: $(this).attr("method"),
			  	url: $(this).attr("action"),
			  	data: (params) ? params : $this.serialize(),
				success: function(msg){
					var $form;
					if( msg == "1" ){
						$link = $(".b-thanks-link");
					}else{
						$link = $(".b-error-link");
					}

					console.log($link);

					if( $this.attr("data-afterAjax") && customHandlers[$this.attr("data-afterAjax")] ){
						customHandlers[$this.attr("data-afterAjax")]($this);
					}

					$.fancybox.close();
					$link.click();
				},
				error: function(){
					$.fancybox.close();
					$(".b-error-link").click();
				},
				complete: function(){
					$this.find(".ajax").removeAttr("onclick");
					$this.find("input[type=text],textarea").val("");
				}
			});
  		}else{
  			$(this).find("input.error,select.error,textarea.error").eq(0).focus();
  		}
  		return false;
  	});

	$("body").on("click", ".ajax", function(){
		$(this).parents("form").submit();
		return false;
	});
});