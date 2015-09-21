

/*
// funciones para validacion de FORMS
// Deberia haber una funcion para cada tipo de campo.
*/
function stopRKey(evt) {
var evt = (evt) ? evt : ((event) ? event : null);
var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
if ((evt.keyCode == 13) && (node.type=="text")) {return false;}
}

document.onkeypress = stopRKey;

function nif(dni) {
  numero = dni.substr(0,dni.length-1);
  let = dni.substr(dni.length-1,1);
  numero = numero % 23;
  letra='TRWAGMYFPDXBNJZSQVHLCKET';
  letra=letra.substring(numero,numero+1);
  if (letra!=let) 
    return false;
    else return true;
}

function validateEmail(email){
	var regEx = /^[\w\.\+-]{1,}\@([\da-zA-Z-]{1,}\.){1,}[\da-zA-Z-]{2,6}$/;
	if (!regEx.test(email)) {
		return false;
	} 
return true;
}

function validateURL(s){
var regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/
var regexp2 = /(mailto):[\w\.\+-]{1,}\@([\da-zA-Z-]{1,}\.){1,}[\da-zA-Z-]{2,6}$/;
	return regexp.test(s) || regexp2.test(s);
}
function validateTime(time){

	var re=/^(0[1-9]|1\d|2[0-3]):([0-5]\d):([0-5]\d)$/;
	return re.test(time);
}

function validateNumber(valor){
  	var regEx = /^[0-9]+[\.]?[0-9]*$/;
	if (!regEx.test(valor)) {
		return false;
	} 
	return true;

}
function validate_credit_card(card){
	var re=/^((67\d{2})|(4\d{3})|(5[1-5]\d{2})|(6011))(-?\s?\d{4}){3}|(3[4,7])\ d{2}-?\s?\d{6}-?\s?\d{5}$/;
	return re.test(card);
}
function formato_numero(numero, decimales, separador_decimal, separador_miles){ // v2007-08-06
   numero=numero.toString().replace('.', '');
    numero=numero.replace(',', '.');
    numero=parseFloat(numero);

    if(isNaN(numero)){
        return "";
    }
	  //numero=numero.replace(",", ".");
    if(decimales!==undefined){
        // Redondeamos
        numero=numero.toFixed(decimales);
        
    }

    // Convertimos el punto en separador_decimal
    numero=numero.toString().replace(".", separador_decimal!==undefined ? separador_decimal : ",");

    if(separador_miles){
        // Añadimos los separadores de miles
     var miles=new RegExp("(-?[0-9]+)([0-9]{3})");
  //      var miles=new RegExp("^(\d{1}\.)?(\d+\.?)+(,\d{2})?$");
        while(miles.test(numero)) {
            numero=numero.replace(miles, "$1" + separador_miles + "$2");
        }
    }

    return numero;
}
function validateNumber_float(valor,idx){

		dix = document.getElementById(idx);
		
		dix.value =  formato_numero(dix.value,2,",",".");
	
	
}
function float_to_sql(valor){
	numero  = valor.toString().replace(".",'');
	numero = numero.replace(",",'.');
	return numero;
}

function validate_percent(valor,idx){
	dix = document.getElementById(idx);
	numero = valor.toString().replace(",",".");
	numero = parseFloat(valor);
	aux = "";
	if (!isNaN(numero)) aux = ""; 
	if (numero > 100) aux = "100,00";

	if (numero > -1 & numero < 101 & !isNaN(numero) ){
		numero = numero.toString().replace(",",'.');
		aux = formato_numero(numero,2,",",".");
	}
	
	dix.value = aux;
	
}

/* COMMOM */
function obrirPopUp(url, alt, ample, scrollok){
var altura=screen.height;
var amp=screen.width;
		xW= (screen.width - ample)/2;
		yW= (altura - alt)/2;
		esquema=window.open(""+url+"" ,"esquema","left="+xW+", top="+yW+",width="+ample+", height="+alt+",resizable=0,status=0,statusbar=0,toolbar=0,location=0,scrollbars="+scrollok+",menubar=0");
		esquema.focus();

}

/*

CUSTOM JS FUNCTIONS

*/

function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function busy(){
document.getElementById('overlay').style.display='block';
}

function DeleteRegistro(div_id,id_registro,cat,tabla){

	if(confirm("¿Seguro que quieres eliminarlo?") != false){
	$('#'+div_id).remove();
//	document.getElementById(div_id).style.display = 'none';	
		ajax=objetoAjax();
		url = BASE_URL + 'index.php?p=admin&m=deleteRow&rid='+id_registro+'&table='+tabla+'&f='+div_id;
		ajax.open("GET", url);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				aux = 0;
				aux  = ajax.responseText;
				//if (aux == 1) document.getElementById(div_id).innerHTML ='ninguno';					
			}
		}
		ajax.send(null);
	}
}

function DeleteFile(div_id,tabla,id_registro,file){
	if(confirm("Are you sure?") != false){
		ajax=objetoAjax();
		url = BASE_URL + 'index.php?p=admin&m=deleteFile&table='+tabla+'&rid='+id_registro+'&f='+div_id;
		ajax.open("GET", url);
		ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				aux = 0;
				aux  = ajax.responseText;
				if (aux == 1) document.getElementById(div_id).innerHTML ='ninguno';	
			}
		}
		ajax.send(null);
	}
}
function click_tag(tag_link){

var aux = $('#tags').attr("value");
if (aux != ""){ 
	$('#tags').attr("value",aux+","+tag_link);
} else {
	$('#tags').attr("value",tag_link);
}


}
function show_add_option_box(field){
	id = "combo_"+field;
	id2 = "div_"+field;
	div = document.getElementById(id);
	div2 = document.getElementById(id2);	
	div.style.display='none';
	div2.style.display='block';
}

function close_add_option_box(field){
	id = "combo_"+field;
	id2 = "div_"+field;
	div = document.getElementById(id);
	div2 = document.getElementById(id2);	
	div2.style.display='none';
	div.style.display='block';
}

function add_new_option_to_combo(field){

	id = "combo_"+field;
	id2 = "div_"+field;
	div = document.getElementById(id);
	div2 = document.getElementById(id2);	
	new_option = document.getElementById('new_'+field).value;
	div2.style.display='none';
	div.innerHTML = 'Loading ...';
	div.style.display='block';
	
	ajax=objetoAjax();
	url = 'scripts/exec_add_option_combo.php?field='+field+'&val='+new_option;
	ajax.open("GET", url);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			div.innerHTML = ajax.responseText;			
		}
	}
	ajax.send(null);
	document.getElementById('new_'+field).value = "";
}
		


jQuery.fn.filterOn = function(parent) {
        return this.each(function() {
            var select = this;
            var options = [];
			var values = [];
            $(select).find('option').each(function() { 
                options.push({value: $(this).val(), text: $(this).text(), parent: $(this).attr("parent")});
			});
			val_selected = $(select).find('option:selected').val();
			console.log(options);
			$(select).html('<option value="-1">---</option>');
            
            $(parent).change(function() {
				$(select).html('<option value="-1">---</option>');   		        
				parent_value = $('option:selected',this).val();
              $.each(options,function(i){
                    var option = options[i];
	                   var option = options[i];
                    if (option.parent == parent_value){
                         aux = $('<option>').text(option.text).val(option.value);
                        $(select).append(aux   );
                    }
                });  
            });

				parent_value = $(parent).find('option:selected',this).val();
				if (parent_value != '' && parent_value != '-1'){
              $.each(options,function(i){
                    var option = options[i];
	                   var option = options[i];
                    if (option.parent == parent_value){
                    	if (val_selected == option.value){
                    	aux = $('<option>').text(option.text).val(option.value).attr("selected","selected");
                    	}else{
                         aux = $('<option>').text(option.text).val(option.value);
                         }
                        $(select).append(aux   );
                    }
                }); 
                }
            //$(parent).trigger('change');
    	});
}


function toggle_visible(table,id,value){
	ajax=objetoAjax();
		url = BASE_URL + '?p=form&m=updateVisible&table='+table+'&rid='+id+'&v='+value;
		ajax.open("GET", url);
		/*
ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				aux = 0;
				aux  = ajax.responseText;
				if (aux == 1) document.getElementById(div_id).innerHTML ='ninguno';	
			}
		}
*/
		ajax.send(null);
}

function toggle_featured(table,id,value){

	max = new Object;
	
	max['news'] = 	max['agenda'] = max['thoughts'] = max['crossconcepts'] = 4;
	max['hightlight'] = 1;
	
	if ($('#destacado_home'+id).prop("checked")){	
	var checkBoxes = $("input[name='destacado_home']:checked");
	if (max[table] && checkBoxes.length > max[table]) {
		alert(max[table]+' featured elements');
		$('#destacado_home'+id).prop("checked", '');
		return false;
	}
	}
/*
 str = "";
		checkBoxes.each(function(i){
			that = i;
			console.log(i);

			if ($(this).prop("checked")){
		 	str += $(this).attr("value")+',';
	 	

				$(this).parent().parent().fadeOut();
			}
	});
*/



	ajax=objetoAjax();
		url = BASE_URL + '?p=form&m=updateFeatured&table='+table+'&rid='+id+'&v='+value;
		ajax.open("GET", url);
		/*
ajax.onreadystatechange=function() {
			if (ajax.readyState==4) {
				aux = 0;
				aux  = ajax.responseText;
				if (aux == 1) document.getElementById(div_id).innerHTML ='ninguno';	
			}
		}
*/
		ajax.send(null);
}

var normalize = (function() {
  var from = "ÃÀÁÄÂÈÉËÊÌÍÏÎÒÓÖÔÙÚÜÛãàáäâèéëêìíïîòóöôùúüûÑñÇç",
      to   = "AAAAAEEEEIIIIOOOOUUUUaaaaaeeeeiiiioooouuuunncc",
      mapping = {};
 
  for(var i = 0, j = from.length; i < j; i++ )
      mapping[ from.charAt( i ) ] = to.charAt( i );
 
  return function( str ) {
      var ret = [];
      for( var i = 0, j = str.length; i < j; i++ ) {
          var c = str.charAt( i );
          if( mapping.hasOwnProperty( str.charAt( i ) ) )
              ret.push( mapping[ c ] );
          else
              ret.push( c );
      }
      return ret.join( '' );
  }
 
})();


function seoLink(text) {       
    var characters = [' ','"',':','“','\'','·', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '+', '=', '_', '{', '}', '[', ']', '|', '/', '<', '>', ',', '.', '?', '--',"'"]; 

    for (var i = 0; i < characters.length; i++) {
         var char = String(characters[i]);
         text = text.replace(new RegExp("\\" + char, "g"), '-');
    }
    text = normalize(text);
    text = text.trim();
    text = text.toLowerCase();
    text = text.replace(/\W/g, '-');
      text = text.replace(new RegExp("\\--", "g"), '-');
    return text;
}

function validateSlug(f){

	$('#'+f).val(seoLink($('#'+f).val()));


}