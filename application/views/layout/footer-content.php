<div class="row">
<div class="col-lg-12 col-md-12 text-center">
<?
$FRASES[0] =  'Otras 14 personas han hecho click esta semana';
$FRASES[1] = '¿Hablamos de tu proyecto?';
$FRASES[2] = 'Estamos online';
$FRASES[3] = '¿Cómo podriamos ayudarte  a externalizar mejor la programación?';
?> 

<span class="lead"><?= $FRASES[rand(0,count($FRASES)-1)]; ?></span> &nbsp;&nbsp;
<a class="btn btn-lg btn-success" href="mailto:hello@96levels.com" role="button">E-mail</a>



</div>
</div>
     </div>   
<div class="site-footer" style="margin-top:30px; ">


<div class="container" style="">
<div class="row">
<div class="col-lg-12 col-md-12">
    <a href="<?= $base_url ?><?= $_SESSION['lang'] ?>/profile">Conócenos</a> ·

  <a href="<?= $base_url ?><?= $_SESSION['lang'] ?>/services">Servicios</a> · 
      <a href="<?= $base_url ?><?= $_SESSION['lang'] ?>/works">Proyectos destacados</a> ·
      <a href="<?= $base_url ?><?= $_SESSION['lang'] ?>/contact">Contacto</a> ·      
      <a href="es/aviso-legal">Aviso legal</a>
<!-- <a href="<?= $base_url ?><?= $_SESSION['lang'] ?>/for-agencies">Para agencias</a> -                 <a href="<?= $base_url ?><?= $_SESSION['lang'] ?>/for-business">Para empresas</a> -                <a href="<?= $base_url ?><?= $_SESSION['lang'] ?>/for-freelances">Para Freelance</a><br> -->


<br>

<br>
<strong>BARCELONA</strong> Padilla 174, at 1. 08017 Barcelona, Spain. /
<strong>BERLIN</strong> Islandische str. 10, 10984 Berlín, Deutschland  </small>
<br>
<small>96 LEVELS &copy; Todos los derechos reservados /  hello (at) 96levels.com
</div></div>
</div>



    <!-- JavaScript plugins (requires jQuery) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
<script>
var base_url= '<?= $base_url ?>';
 var h1aux ="";
 h1aux= $('h1:first').html();
 if (h1aux){
 h1aux = h1aux.replace(/(<([^>]+)>)/ig,"");
 h1aux = h1aux.trim();
 }
		 $('h1:first').html("");
		 
		 
function cursorAnimation() {
    $('#cursor').animate({
        opacity: 0
    }, 'fast', 'swing').animate({
        opacity: 1
    }, 'fast', 'swing');
}




var captionLength = 0;
var caption = '';
 

 
function testTypingEffect() {
    
    type();
}
 
function type() {
    captionEl.html(caption.substr(0, captionLength++));
    if(captionLength < caption.length+1) {
        setTimeout('type()', 1);
    } else {
        captionLength = 0;
        caption = '';
    }
}

function start_construction(){
	caption = $('body').html();
    captionEl = $('body');
    $('body').fadeOut().html('').fadeIn(300);
    $('body').css("background","#3e3e3e");
    $('body').append("<span id='cursor'></span>");

    setInterval ('cursorAnimation()', 600);

    
  
        testTypingEffect();

} 




</script>


     <!-- Optionally enable responsive features in IE8 -->
<script src="public/js/jquery.airport.js"></script>
	     
<!--Start of Zopim Live Chat Script-->

<!--End of Zopim Live Chat Script-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-431558-23']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script>
// Include the UserVoice JavaScript SDK (only needed once on a page)
UserVoice=window.UserVoice||[];(function(){var uv=document.createElement('script');uv.type='text/javascript';uv.async=true;uv.src='//widget.uservoice.com/DifJFLMpbQx36gA6pRq9TA.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(uv,s)})();

//
// UserVoice Javascript SDK developer documentation:
// https://www.uservoice.com/o/javascript-sdk
//

// Set colors
UserVoice.push(['set', {
  accent_color: '#448dd6',
  trigger_color: 'white',
  trigger_background_color: 'rgba(46, 49, 51, 0.6)'
}]);

// Identify the user and pass traits
// To enable, replace sample data with actual user traits and uncomment the line
UserVoice.push(['identify', {
  //email:      'john.doe@example.com', // User’s email address
  //name:       'John Doe', // User’s real name
  //created_at: 1364406966, // Unix timestamp for the date the user signed up
  //id:         123, // Optional: Unique id of the user (if set, this should not change)
  //type:       'Owner', // Optional: segment your users by type
  //account: {
  //  id:           123, // Optional: associate multiple users with a single account
  //  name:         'Acme, Co.', // Account name
  //  created_at:   1364406966, // Unix timestamp for the date the account was created
  //  monthly_rate: 9.99, // Decimal; monthly rate of the account
  //  ltv:          1495.00, // Decimal; lifetime value of the account
  //  plan:         'Enhanced' // Plan name for the account
  //}
}]);

// Add default trigger to the bottom-right corner of the window:
UserVoice.push(['addTrigger', { mode: 'satisfaction', trigger_position: 'bottom-right' }]);

// Or, use your own custom trigger:
//UserVoice.push(['addTrigger', '#id', { mode: 'satisfaction' }]);

// Autoprompt for Satisfaction and SmartVote (only displayed under certain conditions)
UserVoice.push(['autoprompt', {}]);
</script>