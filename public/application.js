/*

	STANDART
	CUSTOM - Application.js
	@Modify at your own
*/

$(document).load(function(){
	
});		
		 
$(document).ready(function()
{

	console.log("STANDART 2");
	console.log("Standart Loaded...");
	console.log("document.ready()");
	var base_url = BASE_URL;
	/*
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
		
*/
		
	var loc = unescape(document.location.href);

	var cadena;
	cadena = loc;
	cadena = "/"+loc.substr(loc.indexOf(base_url)+base_url.length);
	var obj = $("a[href='"+cadena+"']");
	obj.each(function(){
		if ($(this).parent().get( 0 ).tagName == 'LI'){
			$(this).parent().addClass("active list-group-item-active");
		}else{
			$(this).addClass("active list-group-item-active");			
		}

	});
	
	
});

