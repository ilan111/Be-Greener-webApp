$('document').ready(function(){
	// sticky start
	function top_sticky(showAfter){
			$(window).scroll(function(){
				winScroll = $(window).scrollTop();
				if($(showAfter).length){
					showSticky = $(showAfter).offset().top+$(showAfter).height()
				}else{
					showSticky = 150;
				}
				
				if(winScroll>=showSticky){
					$('.top_sticky').fadeIn('slow')
				}else{
					$('.top_sticky').fadeOut('slow')
				}
			})
		}
		
	top_sticky('.header')
	//sticky end
	
	$('a.scroll').click(function(e){
		e.preventDefault()
		var body = $("html, body");
		var targetEle = $(this).attr('href');
		targetEle = targetEle
		targetEle = ($(targetEle).offset().top)
		
		body.stop().animate({scrollTop:targetEle}, 1000, 'swing');
	})

	new WOW().init();
	
	//top_contact form start
	function show_custom_input(val){
		$('.booking_form .custom_input').hide();
		$('.booking_form .'+val).fadeIn();
	}
	show_custom_input('signin');
	$('.booking_form .custom_radio input').click(function(){
		var value=$(this).val()
		//alert(value)
		show_custom_input(value);
	})
	//top_contact form end
	$('#fact_owl .owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		responsiveClass:true,
		dots:true,
		nav:false,
		responsive:{
			0:{
				items:1,
			},
			600:{
				items:3,
			},
			1000:{
				items:4,
			}
		}
	})
	
	
	$('#testimonial_owl .owl-carousel').owlCarousel({
		loop:true,
		margin:5,
		responsiveClass:true,
		nav:false,
		dots:true,
		navText : ["<i class='fa  fa-angle-left'></i>","<i class='fa  fa-angle-right'></i>"],
		responsive:{
			0:{
				items:1,
				margin:30,
				
			},
			600:{
				items:2,
			},
			1000:{
				items:1,
				nav:false,
				loop:true,
			}
		}
	})
	
	$('#client_owl .owl-carousel').owlCarousel({
		loop:true,
		margin:5,
		responsiveClass:true,
		dots:true,
		autoplay:true,
		navText : ["<i class='fa  fa-angle-left'></i>","<i class='fa  fa-angle-right'></i>"],
		responsive:{
			0:{
				items:1,
				nav:false,
				margin:30,
				
			},
			600:{
				items:2,
				nav:false
			},
			1000:{
				items:5,
				nav:false,
				loop:true,
				dots:true,
			}
		}
	})
	
	function telInput(ele){
	 var input = document.querySelector(ele);
		if(input!=null){
			window.intlTelInput(input, {
			  // allowDropdown: false,
			  // autoHideDialCode: false,
			  // autoPlaceholder: "off",
			  // dropdownContainer: document.body,
			  // excludeCountries: ["us"],
			  // formatOnDisplay: false,
			  // geoIpLookup: function(callback) {
			  //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
			  //     var countryCode = (resp && resp.country) ? resp.country : "";
			  //     callback(countryCode);
			  //   });
			  // },
			  // hiddenInput: "full_number",
			  // initialCountry: "auto",
			  // localizedCountries: { 'de': 'Deutschland' },
			  // nationalMode: false,
			  // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
			  // placeholderNumberType: "MOBILE",
			   preferredCountries: ['gb', 'us'],
			});
		}
	}
	telInput('#phone')
	telInput('#phone2')
	
	
	 $('.lazy').Lazy({
        // your configuration goes here
        scrollDirection: 'vertical',
        effect: 'fadeIn',
        visibleOnly: true,
        onError: function(element) {
            console.log('error loading ' + element.data('src'));
        }
    });
	
	//sample gallery slider
	var sampleCount=0;
	$('.samples_section .sample').each(function(){
		sampleCount++;
		var img = $(this).find('img').attr('data-src')
		var title = $(this).find('.desc h4').text()
		var description = $(this).find('.desc p').text()
		if(sampleCount==1){
			$('#sampleModel .carousel-inner').append("<div class='item active'> <img src='"+img+"'></div>")
		}else{
			$('#sampleModel .carousel-inner').append("<div class='item'> <img src='"+img+"'></div>")
		}
		
		//alert(img+" : "+title+" : "+description)
	})
	
	$('.viewSample').click(function(){
		triggerIndex = $('.viewSample').index($(this))
		$("#sampleModel .carousel-inner .item").removeClass('active')
		$("#sampleModel .carousel-inner .item:eq("+triggerIndex+")").addClass('active')
	})

})