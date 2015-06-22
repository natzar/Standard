<? include "application/views/layout/top.php"; ?>
<script type="text/x-handlebars">
<? include "application/views/layout/top-content.php"; ?>
{{outlet main}}
<div class="container">
<hr>
  <footer class="footer">
  <center>
  **** DIVETRADERS. This site is under construction.<br>
  <a href="">Privacy Policy</a> ·   <a href="">Legal notice</a> · Powered by <a href="http://www.96levels.com" target="_blank">96Levels</a><br>
    <p><?= Date("Y") ?> &copy; <?= $base_title ?> </p>
        </center>
      </footer>
    </div>
</script>

<script type="text/x-handlebars" id="divecenters" data-template-name="divecenters">
<? include "search.php"; ?>
</script>

<script type="text/x-handlebars" id="divecenters/loading" data-template-name="divecenters/loading">
Loading
</script>
<script type="text/x-handlebars" id="divecenter/loading" data-template-name="divecenter/loading">
Loading
</script>

<script type="text/x-handlebars" id="divecenter" data-template-name="divecenter"><? include "divecenter-profile.php";?>     </script>
<script type="text/x-handlebars" data-template-name="components/image"> </script>




	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/public/vendor/ie10-viewport-bug-workaround.js"></script>
    
	<!-- jQuery CDN-->
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->

	<!-- Bootstrap 3.3.2 js CDN -->
	<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->

	<!-- jQuery local file -->
	<script type="text/javascript" src="/public/vendor/jquery-1.11.2/jquery-1.11.2.min.js"></script>
	
	<!-- Bootstrap Local File -->
	<script type="text/javascript" src="/public/vendor/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>


 <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/1.1.0/handlebars.min.js" ></script>
    <script src="/public/vendor/ember-1.7.0.js"></script>
    <script src="/public/vendor/swag.min.js"></script>
	<script>Swag.registerHelpers(Ember.Handlebars);</script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/ember-data.js/1.0.0-beta.8/ember-data.min.js"></Script>

    <script type="text/javascript" src="/public/vendor/ember-droplet-mixin.js"></script>
    <script type="text/javascript" src="/public/vendor/ember-droplet-view.js"></script>
   
   <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', '<?= $config->get('google_analytics-UA') ?>', 'auto');
  ga('send', 'pageview');

</script>
 
	<script src="/public/searchApp.js?v=<?= Date("His"); ?>"></script>
	<!-- Some Php Variables to JS -->
	<script type="text/javascript">
		var BASE_URL = '<?= $base_url ?>';
		var LANG = '<?= $_SESSION['lang'] ?>';
	</script>
	
	<!-- Custom Js -->
	<script type="text/javascript" src="/public/application.js"></script>

  </body>
</html>