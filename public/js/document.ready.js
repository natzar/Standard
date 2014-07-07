
		var loc = unescape(document.location.href);

		var cadena;
		cadena = loc.substr(loc.indexOf(BASE_URL)+BASE_URL.length);
		
		var obj = $("a[href='"+cadena+"']");
		obj.addClass("active");
		obj.parent().addClass("active");

		obj.parent().addClass('current-menu-item');
		if ($('.active').length == 0) $('a[href="/"]').addClass("active");
		var obj = $("a[href='"+LANG+"/']");
		obj.addClass("active");
		
/*
		if ($('.rslides').length >0){
				$(".rslides").responsiveSlides({
			  auto: true,             // Boolean: Animate automatically, true or false
			  speed: 500,            // Integer: Speed of the transition, in milliseconds
			  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
			  pager: false,           // Boolean: Show pager, true or false
			  nav: false,             // Boolean: Show navigation, true or false
			  random: false,          // Boolean: Randomize the order of the slides, true or false
			  pause: false,           // Boolean: Pause on hover, true or false
			  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
			  prevText: "Previous",   // String: Text for the "previous" button
			  nextText: "Next",       // String: Text for the "next" button
			  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
			  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
			  manualControls: "",     // Selector: Declare custom pager navigation
			  namespace: "rslides",   // String: Change the default namespace used
			  before: function(){},   // Function: Before callback
			  after: function(){}     // Function: After callback
				});
		}
		
*/
		
		if ($('.bxslider').length > 0){
	
			$(document).ready(function(){
			    $('.bxslider').bxSlider({
			               speed:3000,
			               pause:6000,
			               tickerHover:true,
			               pager:true,
			               captions:true,
			               auto:true
			    });
			});
		}