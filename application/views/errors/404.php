        <!-- Header Image -->
        <div id="header-image-container">
            <div id="header-image">
                <img src="images/demo/404-header.jpg" alt="" class="stretch-image" />
            </div>
        </div>

        <div id="content-container" class="content-width">

            <!-- Breadcrumbs -->
            <div class="row">
                <div id="breadcrumbs-wrapper" class="large-12 columns for-nested">
                    <span>You are here:</span>
                    <ul class="breadcrumbs">
                        <li>
                            <a href="404.php.html#">Home</a>
                        </li>
                        <li class="current">
                            <a href="404.php.html#">Other Pages</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Page Intro -->
            <div id="intro" class="not-homepage row">
                <div class="large-9 large-centered columns">
                    <h1>404 <strong>Page Not Found</strong></h1>
                    <p>
                        Your requested page could not be found or it is currently unavailable. 
                        <br/>
                        Please <a href="404.php.html#">click here</a> to go back to our home page or use the search form below.
                    </p>
                    <hr>
                    <? if ($config->get('developer_mode')): ?>
                    	<? print_r(gett()); ?>
                    <? endif; ?>
                </div>
            </div>

        </div>
  