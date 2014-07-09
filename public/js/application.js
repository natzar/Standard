/*

Application.js

*/

$(document).load(function(){
	
});		
		 
$(document).ready(function()
{


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
	
	 if (h1aux != "" && h1aux != null && h1aux != 'undefined'){

	 $('h1:first').airport([h1aux ],{
		 loop: false		 });
		}
 	function isCanvasSupported(){
		var elem = document.createElement('canvas');
			return !!(elem.getContext && elem.getContext('2d'));
	}

});

    $('.hr').click(function(){
    $(this).css("z-index","-1");
    $('.jumbotron').css("background","rgba(255,255,255,0.6)");
    	$(this).animate({     	'height': parseInt($(document).height() ) 	});
    });
var colors = new Array(
  [62,35,255],
  [60,255,60],
  [255,35,98],
  [45,175,230],
  [255,0,255],
  [255,128,0]);

var step = 0;
//color table indices for: 
// current color left
// next color left
// current color right
// next color right
var colorIndices = [0,1,2,3];

//transition speed
var gradientSpeed = 0.002;

function updateGradient()
{
var c0_0 = colors[colorIndices[0]];
var c0_1 = colors[colorIndices[1]];
var c1_0 = colors[colorIndices[2]];
var c1_1 = colors[colorIndices[3]];

var istep = 1 - step;
var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
var color1 = "#"+((r1 << 16) | (g1 << 8) | b1).toString(16);

var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
var color2 = "#"+((r2 << 16) | (g2 << 8) | b2).toString(16);

 $('.hr').css({
   background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
    background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
  
  step += gradientSpeed;
  if ( step >= 1 )
  {
    step %= 1;
    colorIndices[0] = colorIndices[1];
    colorIndices[2] = colorIndices[3];
    
    //pick two new target color indices
    //do not pick the same as the current one
    colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
    
  }
}

setInterval(updateGradient,10);

