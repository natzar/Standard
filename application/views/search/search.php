<div class="container-fluid" >
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
		<h5 class="panel-title"><i class="glyphicon glyphicon-search"></i> Where </h5>
		{{input class="input form-control"  type="text" value=filter placeholder="Place, Town, Island, ..."}}		   
		<br>
		<small class="pull-left">Showing {{filteredContent.length}} divecenters</small><br>
		<br>
		<!-- {{!--}}
		<div class="panel panel-default">
			<div class="panel-heading">
				<h5 class="panel-title">COURSES<i class="glyphicon glyphicon-chevron-down pull-right"></i></h5>
			</div>
			<div class="panel-body">
				<div class="checkbox">
				
				{{view Ember.Checkbox     checkedBinding="watchFoo"    class="set-recurring"    action="watchFoo"}}
    
				
					<label>                {{input type='checkbox' name='courses' action="watchFoo" on="checked" checked=foo}}   Open Water </label>
					<span class="badge pull-right">4</span>  
				</div>
				<div class="checkbox">
					<label>                 {{input type='checkbox' name='courses[]' action="watchFoo" on="click"}}   Advanced Diver </label> 
				</div>			
				<div class="checkbox">
					<label>                 {{input type='checkbox' name='courses' action="watchFoo" on="click"}}   Rescue Diver</label> 
				</div>
				<div class="checkbox">
					<label>                {{input type='checkbox' name='courses' action="watchFoo" on="click"}}   Emergency First Response  </label> 
				</div>
				<div class="checkbox">
				<label>
				  <input type="checkbox">   Divemaster 
				</label>
				</div>				
				<div class="checkbox">
				<label>
				  <input type="checkbox">   Assistant Instructor </label>  </div>							
				<div class="checkbox">
				<label>
				  <input type="checkbox">   Instructor Course </label>  </div>
				<div class="checkbox">
				<label>
				  <input type="checkbox">   Freediving Course </label>  </div>
				<div class="checkbox">
				<label>
				  <input type="checkbox">   IDC </label>  </div>
				￼￼￼￼￼￼￼<p>PIC <small>(paid by dive center from 0% -100%)</small>
				</p>
				<div class="progress">				
    				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 2%;">
				2%
	           		</div>
		        </div>
        	</div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5 class="panel-title">SPECIALITIES</h5>
            </div>
            <div class="panel-body">
                <div class="checkbox">
                <label>
                  <input type="checkbox">   Deep </label>
                <span class="badge pull-right">4</span>  </div>
                <div class="checkbox">
                <label>
                  <input type="checkbox">   Wreck </label>
                <span class="badge pull-right">4</span>  </div>
                <div class="checkbox">
                <label>
                  <input type="checkbox">   Drift </label>
                <span class="badge pull-right">4</span>  </div>
                <div class="checkbox">
                <label>
                  <input type="checkbox">   Cave </label>
                <span class="badge pull-right">4</span>  </div>
                
                <div class="checkbox">
                <label>
                  <input type="checkbox">   Nitrox </label>
                <span class="badge pull-right">4</span>  </div>
                <div class="checkbox">
                <label>
                  <input type="checkbox">   Dry Suit </label>
                <span class="badge pull-right">4</span>  </div>

                <div class="checkbox">
                <label>
                  <input type="checkbox">   Buoyancy Control </label>
                <span class="badge pull-right">4</span>  </div>
                
                <div class="checkbox">
                <label>
                  <input type="checkbox">   Porject Aware </label>
                <span class="badge pull-right">4</span>  </div>
                
                <div class="checkbox">
                <label>
                  <input type="checkbox">   Multilevel diver  </label>
                <span class="badge pull-right">4</span>  </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">FUN DIVES</h5>
                </div>
                <div class="panel-body">Free fun dives (130)</div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">NON DIVING RELATED</h5>
                </div>
                <div class="panel-body">
                	<div class="checkbox">
                	<label>
                	<input type="checkbox">  Accommodation  </label>
                	<span class="badge pull-right">4</span>  </div>
                	<div class="checkbox">
                	<label>
                	<input type="checkbox">   Breakfast </label>
                	<span class="badge pull-right">4</span>  </div>
                	<div class="checkbox">
                	<label>
                	<input type="checkbox">  Lunch </label>
                	<span class="badge pull-right">4</span>  </div>
                	<div class="checkbox">
                	<label>
                	<input type="checkbox">  Dinner </label>
                	<span class="badge pull-right">4</span>  </div>
                	<div class="checkbox">
                	<label>
                	<input type="checkbox">   Transport  </label>
                	<span class="badge pull-right">4</span>  </div>
				</div>
			</div>
			--}} -->
		</div>
		<div class="col-sm-9  col-md-10  main">			
			{{outlet}}
			
            <div class="row " style="">
                {{#ifGt filteredContent.length  1}}
                no results
                {{/ifGt}}
                {{#each filteredContent}}   
                  <div class="col-sm-6 col-md-4" style="margin:0px;padding:0px">
                    <div class="thumbnail" style="margin:0px;padding:0px;border:none">
                    <div style="height:222px;overflow:hidden">
                            {{#link-to 'divecenter' this}}
                		{{imagepath src=featImage alt=title}}{{/link-to}}
                        <div class="caption home">
                        
                        	<i class="pull-right glyphicon glyphicon-star"></i><i class="pull-right glyphicon glyphicon-star"></i><i class="pull-right glyphicon glyphicon-star"></i><i class="pull-right glyphicon glyphicon-star"></i>
                        	<h5>{{#link-to 'divecenter' this}}{{title}}{{/link-to}}</a></h5>
                     	 	<p class="">{{location}}</p>			             
		
                      </div>
               		</div>
                 	    
                    </div>
                  </div> 
                {{/each}}
            </div>
            
		</div>
	</div>
</div>
</div>



