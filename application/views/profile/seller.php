<? include "application/views/layout/top-content.php"; ?>


<div class="container" style="padding.top:0px;margin-top:0px">
	<div class="row">
        <div class="col-lg-12">
       
        	<h1>Dive Center Profile</h1> 
        	<? if(isset($_SESSION['errors'])): ?>
        	<div class="alert alert-success">
        	   <?= $_SESSION['errors'] ?>
        	</div>
        	<? endif; ?>

        	 <form class="form-horizontal" role="form" action='<?= $_SESSION['lang'] ?>/profile' method='POST' enctype='multipart/form-data'>

        	 <input type="submit" class="pull-right btn btn-success btn-large" name="savechanges"  value="Save Changes">
              <!-- Form Name -->   
                  
            <legend>Basic Details</legend>
            <fieldset>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class='control-group'><label class='control-label'>Dive center name</label>
                    <div class='controls'><input type='text' class="form-control"  name='title' value='<?= $items['title'] ?>'></div></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class='control-group'><label class='control-label'>Country</label>
                    <div class='controls'><input type='text' class="form-control"  name='location' value='<?= $items['location'] ?>'></div></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class='control-group'><label class='control-label'>City/Town</label>
                    <div class='controls'><input type='text' class="form-control"  name='city' value='<?= $items['city'] ?>'></div></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class='control-group'><label class='control-label'>Website</label>
                    <div class='controls'><input type='text' class="form-control"  name='website' value='<?= $items['website'] ?>'></div></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class='control-group'><label class='control-label'>Email</label>
                    <div class='controls'><input type='text' class="form-control"  name='email' value='<?= $items['email'] ?>'></div></div>
                </div>
             <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class='control-group'><label class='control-label'>Password <small>(You will overwrite your password)</small></label>
                    <div class='controls'><input type='text' class="form-control"  name='password' value='<?= $items['password'] ?>'></div></div>
                </div>
            </div>
            <div class='control-group'><label class='control-label'>Describe your dive center and seduce future traders</label>
                <div class='controls'><textarea class="form-control" rows="8" name='description' ><?= $items['description'] ?></textarea></div></div>
                    
         </fieldset>
           
        <legend>Images</legend>
        <fieldset>
<div class="row">
<div class="col-lg-3">
<? if(isset($items['featImage'])): ?>
<img style="max-width:280px;" class="img-rounded  " src="/data/img/<?= $items['featImage'] ?>">
<? endif; ?>

  <div class='control-group'><label class='control-label'>Featured Image</label>
  <div class='controls'><input type='file' name='featImage' value='<?= $items['featImage'] ?>'></div></div>

    </div>
<div class="col-lg-4" >
<div style="display:block;height:400px;overflow-y:scroll;display:block;overflow:scroll;scroll:visible">
<ul class="media-list">
<? for($i=1;$i < 3;$i++): ?>
<li class="media">
    <div class="media-left">
      <a href="#">
        <? if(isset($items['imagen'.$i])): ?>
        <img style="max-width:250px;" class="img-rounded  " src="/data/img/thumbs/<?= $items['imagen'.$i] ?>">
        <? else: ?>
        <img class="media-object" src="http://lorempixel.com/100/100/people/9/" alt="">
        <? endif; ?>
      </a>
    </div>
    <div class="media-body">
<!--       <h4 class="media-heading">Media heading</h4> -->
     

                        <div class='control-group'><label class='control-label'>Image #<?= $i ?></label>
                        <div class='controls'><input type='file' name='imagen<?=$i?>' value='<?= $items['imagen'.$i] ?>'></div></div>
 </div>
                    

  </li>
  <? endfor; ?>
</ul>
</div>

    
</div>
<div class="col-lg-5" >
<div style="display:block;height:400px;overflow-y:scroll;display:block;overflow:scroll;scroll:visible">
<ul class="media-list">
<? for($i=3;$i < 5;$i++): ?>
<li class="media">
    <div class="media-left">
      <a href="#">
        <? if(isset($items['imagen'.$i]) and $items['imagen'.$i] != ""): ?>
        <img style="max-width:250px;" class="img-rounded  " src="/data/img/thumbs/<?= $items['imagen1'] ?>">
        <? else: ?>
        <img class="media-object" src="http://lorempixel.com/100/100/people/9/" alt="">
        <? endif; ?>
      </a>
    </div>
    <div class="media-body">
<!--       <h4 class="media-heading">Media heading</h4> -->
     

                        <div class='control-group'><label class='control-label'>Image #<?= $i ?></label>
                        <div class='controls'><input type='file' name='imagen<?=$i?>' value='<?= $items['imagen1'] ?>'></div></div>
 </div>
                    

  </li>
  <? endfor; ?>
</ul>
</div>

    
</div>
</div>
                  

           
<!--
<div class='control-group'><label class='control-label'>imagen5</label>

<div class='controls'><input type='file' name='imagen5' value='<?= $items['imagen5'] ?>'></div></div>
-->
</fieldset>

<legend>What skills are you looking for?</legend>
    <fieldset>
        <div class="row">
            <div class="col-lg-4">
                <div class="control-group"><input type="checkbox" string haystack, string needle) name="skills[]" value="Writing"> Writing</div>
                <div class='control-group'><input type="checkbox" name="skills[]" value="Music"> Music</div>
                <div class="control-group"><input name="skills[]" value="Art Works" type="checkbox" <? if (strstr($items['skills'],"Art Works")) echo "checked"; ?>> Art Works</div>
                <div class="control-group"><input name="skills[]" value="Social Media" type="checkbox" <? if (strstr($items['skills'],"Social Media")) echo "checked"; ?>> Social Media</div>
                <div class="control-group"><input name="skills[]" value="Web Developer" type="checkbox" <? if (strstr($items['skills'],"Web Developer")) echo "checked"; ?>> Web Developer</div>
                <div class="control-group"><input name="skills[]" value="Photography" type="checkbox" <? if (strstr($items['skills'],"Photography")) echo "checked"; ?>> Photography</div>
                <div class="control-group"><input name="skills[]" value="Underwater Photography" type="checkbox" <? if (strstr($items['skills'],"Underwater Photography")) echo "checked"; ?>> Underwater Photography</div>
                <div class="control-group"><input name="skills[]" value="Handyman" type="checkbox" <? if (strstr($items['skills'],"Handyman")) echo "checked"; ?>> Handyman</div>
                <div class="control-group"><input name="skills[]" value="Cleaning" type="checkbox" <? if (strstr($items['skills'],"Cleaning")) echo "checked"; ?>> Cleaning</div>
            </div>
            <div class="col-lg-4">
                <div class="control-group"><input name="skills[]" value="Fun Dives" type="checkbox" <? if (strstr($items['skills'],"Fun Dives")) echo "checked"; ?>> Fun Dives</div>

 <div class="control-group"><input name="skills[]" value="Freediving" type="checkbox" <? if (strstr($items['skills'],"Freediving")) echo "checked"; ?>> Freediving</div>
 
  <div class="control-group"><input name="skills[]" value="Course Specialties" type="checkbox" <? if (strstr($items['skills'],"Course Specialties")) echo "checked"; ?>> Course Specialties</div>
                <div class="control-group"><input name="skills[]" value="Video Making" type="checkbox" <? if (strstr($items['skills'],"Video Making")) echo "checked"; ?>> Video Making</div>
                
                
                <div class="control-group"><input name="skills[]" value="Reception" type="checkbox" <? if (strstr($items['skills'],"Reception")) echo "checked"; ?>> Reception</div>
                
                
                 <div class="control-group"><input name="skills[]" value="Administration" type="checkbox" <? if (strstr($items['skills'],"Administration")) echo "checked"; ?>> Administration</div>
                  
                  
                  <div class="control-group"><input name="skills[]" value="Promoter" type="checkbox" <? if (strstr($items['skills'],"Promoter")) echo "checked"; ?>> Promoter </div>


                   <div class="control-group"><input name="skills[]" value="Cooking" type="checkbox" <? if (strstr($items['skills'],"Cooking")) echo "checked"; ?>>Cooking</div>
                    <div class="control-group"><input name="skills[]" value="Bartending" type="checkbox" <? if (strstr($items['skills'],"Bartending")) echo "checked"; ?>> Bartending </div>
                     
                <div class="control-group"><input name="skills[]" value="Gardening" type="checkbox" <? if (strstr($items['skills'],"Gardening")) echo "checked"; ?>> Gardening</div>
                                
                                
            </div>
            <div class="col-lg-4">
                <div class="control-group"><input name="skills[]" value="Underwater Video Making" type="checkbox" <? if (strstr($items['skills'],"Underwater Video Making")) echo "checked"; ?>> Underwater Video Making</div>
                <div class="control-group"><input name="skills[]" value="Dive Orientated" type="checkbox" <? if (strstr($items['skills'],"Dive Orientated")) echo "checked"; ?>> Dive Orientated</div>
                <div class="control-group"><input name="skills[]" value="Marine Biology" type="checkbox" <? if (strstr($items['skills'],"Marine Biology")) echo "checked"; ?>> Marine Biology</div><div class="control-group"><input name="skills[]" value="Boat Handling" type="checkbox" <? if (strstr($items['skills'],"Boat Handling")) echo "checked"; ?>> Boat Handling</div>
                <div class="control-group"><input name="skills[]" value="Teaching none diving related sports &amp; activities" type="checkbox" <? if (strstr($items['skills'],"Teaching none diving related sports &amp; activities")) echo "checked"; ?>> Teaching none diving related sports &amp; activities</div>
                <div class="control-group"><input name="skills[]" value="Teaching Yoga Teaching Languages Social Work" type="checkbox" <? if (strstr($items['skills'],"Teaching Yoga Teaching Languages Social Work")) echo "checked"; ?>> Teaching Yoga Teaching Languages Social Work</div>
            </div>
       </div>
       </fieldset>




<legend>Working Conditions</legend>

<div class="row">
    <div class="col-lg-3">
        <strong>Working time you request?</strong>
        <div class='control-group'><label class='control-label'>Hours/day</label>
        <div class='controls'><input type='text' class="form-control"  name='working_hoursday' value='<?= $items['working_hoursday'] ?>'></div></div>
        <div class='control-group'><label class='control-label'>Days/week</label>
        <div class='controls'><input type='text' class="form-control"  name='working_daysweek' value='<?= $items['working_daysweek'] ?>'></div></div>
    </div>
    <div class="col-lg-3">
<!--         <strong></strong> -->
        <div class='control-group'><label class='control-label'>Minimun time of stay?</label>
        <div class='controls'><input type='text' class="form-control"  name='minimum_time' value='<?= $items['minimum_time'] ?>'></div></div>
<!--
        <div class='control-group'><label class='control-label'>minimum_time_type</label>
        <div class='controls'><input type='text' class="form-control"  name='minimum_time_type' value='<?= $items['minimum_time_type'] ?>'></div></div>
-->
    </div>    
    <div class="col-lg-3">
        <div class='control-group'><label class='control-label'>Availability</label>
        <div class='controls'><input type='text' class="form-control"  name='availability' value='<?= $items['availability'] ?>'></div></div>
    </div>    
    <div class="col-lg-3">
        <div class='control-group'><label class='control-label'>Languages</label>
        <div class='controls'><input type='text' class="form-control"  name='languages' value='<?= $items['languages'] ?>'></div></div>
    </div>
</div>
</fieldset>

<legend>What do you offer in exchange?</legend>
<fieldset>
    <div class='controls'>
        <strong>Select diving agencies you offer:</strong>
        <input type="checkbox" name="agencies[]" value="PADI"> PADI
        <input type="checkbox" name="agencies[]" value="SSI"> SSI
    </div>
    <hr>



<!-- <input type='text' class="form-control"  name='agencies' value='<?= $items['agencies'] ?>'> --></div></div>
<div class="row">
    <div class="col-lg-4">
         <div class="control-group"><input name="offers[]" value="Open Water" type="checkbox" <? if (strstr($items['offers'],"Open Water")) echo "checked"; ?>> Open Water</div>
        <div class="control-group"><input name="offers[]" value="Advanced Open water" type="checkbox" <? if (strstr($items['offers'],"Advanced Open Water")) echo "checked"; ?>> Advanced Open Water</div>
        <div class="control-group"><input name="offers[]" value="EFR Rescue" type="checkbox" <? if (strstr($items['offers'],"EFR + Rescue Diver")) echo "checked"; ?>> EFR + Rescue Diver</div>
    </div>
    <div class="col-lg-4">
        <div class="control-group"><input name="offers[]" value="Divemaster" type="checkbox" <? if (strstr($items['offers'],"Divemaster")) echo "checked"; ?>> Divemaster</div>
        <div class="control-group"><input name="offers[]" value="Assistant Instructor" type="checkbox" <? if (strstr($items['offers'],"Assistant Instructor")) echo "checked"; ?>> Assistant Instructor</div>
        <div class="control-group"><input name="offers[]" value="Instructor" type="checkbox" <? if (strstr($items['offers'],"Instructor")) echo "checked"; ?>> Instructor</div>
    </div>
    <div class="col-lg-4">
        <div class="control-group"><input name="offers[]" value="Fun Dives" type="checkbox" <? if (strstr($items['offers'],"Fun Dives")) echo "checked"; ?>> Fun Dives</div>
        <div class="control-group"><input name="offers[]" value="Freediving Course" type="checkbox" <? if (strstr($items['offers'],"Freediving Course")) echo "checked"; ?>> Freediving Course</div>
        <div class="control-group"><input name="offers[]" value="Specialties" type="checkbox" <? if (strstr($items['offers'],"Specialties")) echo "checked"; ?>> Specialties</div>
    </div>
</div>
<br>
<strong>Will you include agency fees in the trade?</strong><br>
<i>(Remember, the more you cover, the more people will see your dive center)</i>
<br>
<input type="radio" name="agency_fee_included" value="1"  <? if ($items['agency_fee_included'] == 1) echo "checked"; ?>> Yes <input type="radio" name="agency_fee_included" value="0" <? if ($items['agency_fee_included'] == 0) echo "checked"; ?>> No
<br>
<br>
<div class='control-group'><label class='control-label'>If not, please specify how much your future traders will have to pay for each course and agency.</label>
        <div class='controls'><textarea class="form-control" rows="8" name='offers_costs' value=''><?= $items['offers_costs'] ?></textarea>
</fieldset>


<legend>Do you include food, accommodation and/or transport?</legend>
<fieldset>
    <div class="row">
         <div class="col-lg-4">
         

         
            <div class="control-group"><input type="checkbox" name="things_included[]" value="Accommodation"          <? if (strstr($items['things_included'],"Accommodation")) echo "checked"; ?>> Accommodation</div>
            <div class="control-group"><input type="checkbox" name="things_included[]" value="Breakfast"          <? if (strstr($items['things_included'],"Breakfast")) echo "checked"; ?>> Breakfast</div>
         </div>
         <div class="col-lg-4">            
            <div class="control-group"><input type="checkbox" name="things_included[]" value="Lunch"          <? if (strstr($items['things_included'],"Lunch")) echo "checked"; ?>> Lunch</div>
            <div class="control-group"><input type="checkbox" name="things_included[]" value="Dinner"          <? if (strstr($items['things_included'],"Dinner")) echo "checked"; ?>> Dinner</div>
         </div>
         <div class="col-lg-4">
            <div class="control-group"><input type="checkbox" name="things_included[]" value="transport"          <? if (strstr($items['things_included'],"transport")) echo "checked"; ?>> Transport</div>

         </div>
    </div>

</fieldset>

<center>
<br><br>
<input type="submit" class="btn btn-success btn-large" name="savechanges"  value="Save Changes"></form>
</center>
<br><br><br>        	         	         	         	         	
             		
		</div>
	</div>
</div>

