var clickCount = readCookie();
if ( clickCount == null ){
    clickCount = 0;
 $('#cookies').fadeIn();
}


function trackclick() {
    clickCount = parseInt(clickCount)+1;
    setCookie( clickCount, 2 );
 $('#cookies').fadeOut();
    $('#cookies').css("display","none");
}

function setCookie( cookieValue, nDays) {
    var today = new Date();
    var expire = new Date();
    if (nDays==null || nDays==0) nDays=1;
    expire.setTime(today.getTime() + 3600000*24*nDays);
    document.cookie = "clicktrack="+escape(cookieValue)
                      + ";expires="+expire.toGMTString();
}

function readCookie() {
    var nameEQ = "clicktrack=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0){
            return c.substring(nameEQ.length,c.length);
        }
    }
    return null;
}

