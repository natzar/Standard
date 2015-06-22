	 <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= $base_url ?>"><i class="glyphicon glyphicon-paperclip"></i> <?= $base_title ?></a>
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
        
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Submenus <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Menu 1</a></li>
                <li><a href="#">Menu 0</a></li>
              </ul>
            </li>
                        <li><a href="#contact">Last Menu</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
			<?
				$langs = $config->get('available_langs');
				foreach($langs as $lang):
			?>
    	       <li><a href="<?= $lang ?>/"><?= ucfirst($lang) ?></a></li>
           <? 
	           	endforeach;
           ?>
          </ul>

            
             
        </div>
      </div>
    </nav>
    
    <div class="container" style="padding-top:50px">
    <? if (isset($_SESSION['errors'])): ?>
        <div class="alert"><?= $_SESSION['errors'] ?></div>
    <? endif; ?>