<style>
body{    background-color:#f5f5f5;}
.form-signin{    max-width: 330px;    padding: 15px;    margin: 0 auto;}
.form-signin .form-control{    position: relative;    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 80px;
    padding: 40px 0px 20px 0px;
    background-color: #ffffff;
    box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.16);
}
.login-title
{
    color: #555;
    font-size: 22px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.select-img
{
	border-radius: 50%;
    display: block;
    height: 75px;
    margin: 0 30px 10px;
    width: 75px;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.select-name
{
    display: block;
    margin: 30px 10px 10px;
}

.logo-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
</style>
<? include "application/views/layout/top-content.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                
						<div class="tab-pane active" id="login">
               		  <h2 style="text-align:center">DiveTraders</h2>
               		   <? if (isset($_SESSION['errors'])): ?>
                    <div class="alert alert-info">               			
                    <?= $_SESSION['errors']; ?>
                    </div>              			
                    <? endif; ?> 
               			<form class="form-signin" action="<?= $_SESSION['lang'] ?>/login/doLogin" method="post">
               				<input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
               				<input type="password" name="password" class="form-control" placeholder="Password" required>
               				<input type="submit" class="btn btn-lg btn-default btn-block" value="Sign In" />
               			</form>
               			<div id="tabs" data-tabs="tabs">
               				<p class="text-center"><a href="/<?= $_SESSION['lang'] ?>/signup">Need an Account?</a></p>

              				</div>
						
						
            </div>
        </div>
    </div>
</div>