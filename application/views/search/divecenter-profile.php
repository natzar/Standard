<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">        	  
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <!--
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    -->
      </ol>            
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          {{imagepath src=model.featImage}}
          <div class="carousel-caption">
            Kuala
          </div>                 
        </div>                  
            {{slider model.images}}
      </div>            
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
        
    <div class="modal-header">
        <button {{action "goBack"}} type="button" class="close" data-dismiss="modal" aria-label="Close" class="btn btn-default">&times;</button>
        <div class="row">
        	<div class="col-lg-10">
              	<a class="btn btn-success pull-right" href="#">Trade with us</a>
            	<h1>{{model.title}}</h1>
        	    <h2>{{model.location}} </h2>
                <span>AVAILABILITY</span>   	<span class="badge badge-info">{{model.availability}}</span>
        	</div>
        	<div class="col-lg-2">
    
        	</div>
    	</div>
    </div>
	<div class="row">
        <div class="col-lg-12">	      
            <div class="panel panel-info">
                <div class="panel panel-heading">About our dive center</h2></div>
                <div class="panel panel-body">
                    {{model.description}}
                </div>            
            </div>
            <div class="panel panel-info">
                <div class="panel panel-heading">What we are looking for</h2></div>
                <div class="panel panel-body">
                       {{skills model.skills}}  
                </div>
                <div class="panel panel-footer">
                    <div class="row">
                        <div class="col-lg-1">
                       	<img class="pull-left" src="/public/png/OTHERS/workingTime.png">
                        </div>
                        <div class="col-lg-3">
                        <strong>Working time</strong><br>
                        {{model.workingHoursday}} hours/day<br>
                        {{model.workingDaysweek}} days/week
                        </div>
                        <div class="col-lg-1">
                            <img class="pull-left" src="/public/png/OTHERS/MINIMUM-STAY.png">
                        </div>
                        <div class="col-lg-3">
                        <strong>Minimum Stay</strong><br>
                    	{{model.minimumTime}}
                    	
                    	</div>
                    	<div class="col-lg-1">
                        	<img class="pull-left" src="/public/png/OTHERS/LanguagesRequired.png">
                    	</div>
                    	<div class="col-lg-3">
                    	<strong>Languages</strong><br>
                    	{{model.languages}}
                    	</div>
                    </div>
                 </div>        
            </div>
            <div class="panel panel-info">
                <div class="panel panel-heading">What we offer in exchange</h2></div>
                <div class="panel panel-body">               
                    {{offers model.offers}}
                    {{#unless model.agencyFeeIncluded}}
                    	<p>{{offersCosts}}</p>
                    {{/unless}}                
                </div>
                <div class="panel panel-footer">
                 Agencies: {{model.agencies}}<br>
                Agency Fee Included? {{#if model.agencyFeeIncluded}} <strong>YES</strong>{{else}}<strong>NO</strong>{{/if}}
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel panel-heading">We include</h2></div>
                <div class="panel panel-body">
                    {{things model.thingsIncluded}}
                </div>
            </div>



<div class="panel panel-info">
<div class="panel panel-heading">What they say about us</h2></div>
<div class="panel panel-body">

{{#if model.comments}}
<ul class="media-list">
{{#each model.comments}}
  <li class="media">
    <div class="media-left">
      <a href="#">
        <img class="media-object" src="http://lorempixel.com/100/100/people/9/" alt=".">
      </a>
    </div>
    <div class="media-body">
      <h4 class="media-heading">{{model.comments.author}}</h4>
      {{model.comments.comment}}
    </div>
  </li>
  {{/each}}
  </ul>
{{else}}
    No Comments
{{/if}}
</div>
</div>
		<!--
<div class="col-lg-3 col-sm-6">


           <!--
 <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="" src="http://lorempixel.com/100/100/people/9/">
                </div>
                <div class="info">
                    <div class="title">
TITLE
                    </div>
                    <div class="desc">Passionate designer</div>
                    <div class="desc">Curious developer</div>
                    <div class="desc">Tech geek</div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/+ahmshahnuralam">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-behance"></i>
                    </a>
                </div>
            </div>


        </div>
-->
    		<div class="col-lg-12">
    		<h2>Get in contact</h2>
    		<? if (isset($_SESSION['initiated']) and isset($_SESSION['usersId']) and $_SESSION['usersId'] >0): ?>
    		  <p>Write why you are interested in diving with us and when you would like to go (Optional)</p>
                <form name="formContact" action="<?= $_SESSION['lang'] ?>/mail/sendMessage" method="POST" >
                <label>Subject</label><br>
                <input type="text" class="form-control" name="subject" value="" placeholder="Subject">
                <label>Message</label>            
                <textarea rows="10" name="content" class="form-control" placeholder="Write your message"></textarea>
                {{input type="hidden" name="toUsersId" value=id}}
                <input type="hidden" name="read" value="1">
                <input type="hidden" name="author" value="<?= $_SESSION['author'] ?>">
                <input type="hidden" name="author_image" value="<?= $_SESSION['author_image'] ?>">
                <br>
                <input class=" btn btn-primary"  type="submit" value="Send">
                </form>		
                <br>
                <? else: ?>
                <p>If you want to contact them, you have to be logged in. <a href="/<?= $_SESSION['lang'] ?>/signup">Signup</a> or <a href="/<?= $_SESSION['lang'] ?>/login">login</a>. </p>
                <br>
                <? endif; ?>                
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button {{action "goBack"}} class="btn btn-default">Close</button>
        </div>
    </div>
</div>
  

