/*

	STANDART
	CUSTOM - Application.js
	@Modify at your own
*/
$ = jQuery;
$(document).load(function(){
	
});		
		 
$(document).ready(function()
{

	console.log("STANDART 2");
	console.log("Standart Loaded...");
	console.log("document.ready()");
	var base_url = BASE_URL;
	var	cadena = unescape(document.location.href);
	cadena = cadena.substr(cadena.indexOf(base_url)+base_url.length);
	
	var aux = cadena.split("/");
	
	cadena = aux[0]+"/"+aux[1];
	
	var obj = $("a[href='"+cadena+"']");

	obj.each(function(){
		if ($(this).parent().get( 0 ).tagName == 'LI'){
			$(this).parent().addClass("active list-group-item-active current-menu-item");
		}else{
			$(this).addClass("active list-group-item-active current-menu-item");			
		}

	});
	if (obj.length < 1){
		var obj = $("a[href='"+base_url+"']");
		obj.parent().addClass("current-menu-item");
	}
	
	language_link = cadena.substr(0,cadena.indexOf('/'));
	$('a[href="'+language_link+'"]').addClass("active list-group-item-active current-menu-item");			
	
	   var height = $(window).scrollTop();

    if(height  > 30) {
            $('#header').css("background","#242424");     // do something
    } else {
            $('#header').css("background","transparent");     // do something
    }
    
});


$(window).scroll(function() {
    var height = $(window).scrollTop();

    if(height  > 30) {
            $('#header').css("background","#242424");     // do something
    } else {
            $('#header').css("background","transparent");     // do something
    }
});



