<? include "application/views/layout/top-content.php"; ?>

<div class="container" style="padding.top:0px;margin-top:0px">
	<div class="row">
        <div class="col-lg-12">
        	<h1>Diver Profile</h1> 
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
                    <? if ($items['imagen1'] != ""): ?>
                        <img src="/data/img/thumbs/<?= $items['imagen1'] ?>">
                    <? else: ?>
                        <div style="display:block;background:#e7e7e7;height:300px">  </div>
                    <? endif; ?>
                    <div class='control-group'><label class='control-label'>Profile Image</label>
    
                    <div class='controls'><input type='file'   name='imagen1' value=''></div></div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                
                    <div class='control-group'><label class='control-label'>Name</label>                    
                    <div class='controls'><input type='text' class="form-control"  name='title' value='<?= $items['title'] ?>'></div></div>
                    <div class='control-group'><label class='control-label'>Nationality</label> 
                    <div class='controls'><input type='text' class="form-control"  name='nationality' value='<?= $items['nationality'] ?>'></div></div>
                    <div class='control-group'><label class='control-label'>Birthdate</label>
                    <div class='controls'><input type='text' class="form-control"  name='birthdate' value='<?= $items['birthdate'] ?>'></div></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class='control-group'><label class='control-label'>Surname</label>                    
                    <div class='controls'><input type='text' class="form-control"  name='surname' value='<?= $items['surname'] ?>'></div></div>                                        
                    <div class='control-group'><label class='control-label'>Country of Residence</label> <small>Or just "on the road"</small>                    
                    <div class='controls'><input type='text' class="form-control"  name='country_residence' value='<?= $items['country_residence'] ?>'></div></div>                                        
                    <div class='control-group'><label class='control-label'>Email</label>                    
                    <div class='controls'><input type='text' class="form-control"  name='email' value='<?= $items['email'] ?>'></div></div>                    
                    <div class='control-group'><label class='control-label'>Password</label>  <small>You will overwrite your password</small>                   
                    <div class='controls'><input type='text' class="form-control"  name='password' value='<?= $items['password'] ?>'></div></div>
                </div>                                
            </div>
            </fieldset>
            <legend>Diver Information</legend>
            <p>Better defined profiles are more usefull to dive centers when it comes to candidate selection.</p>
            <fieldset>            
            <div class="row">
                <div class="col-lg-6">
                    <div class='control-group'>
                        <label class='control-label'>Actual Dive Level</label>
                        <div class='controls'>
                            <input type='text' class="form-control"  name='dive_level' value='<?= $items['dive_level'] ?>'>
                        </div>
                    </div>
                    <div class='control-group'>
                        <label class='control-label'>How many logged dives do you have?</label>
                        <div class='controls'>
                            <input type='text' class="form-control"  name='dives_logged' value='<?= $items['dives_logged'] ?>'>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class='control-group'>
                        <label class='control-label'>Certified by which dive agency?</label>
                        <div class='controls'>
                            <input type='text' class="form-control"  name='certified_agency' value='<?= $items['certified_agency'] ?>'>
                        </div>
                    </div>
                    <div class='control-group'>
                        <label class='control-label'>What specialties do you have?</label>
                        <div class='controls'>
                            <input type='text' class="form-control"  name='specialties' value='<?= $items['specialties'] ?>'>
                        </div>
                    </div>
                </div>
            </div>
            <div class='control-group'>
                <label class='control-label'>Where have you dived?</label>
                <div class='controls'>
                    <textarea class="form-control"  name='where_dived' value=''><?= $items['where_dived'] ?></textarea>
                </div>
            </div>
            </fieldset>
            <legend>Languages</legend>
            <fieldset>
                <div class="row">
                    <div class="col-lg-3">
                        <div class='control-group'><label class='control-label'>First Language</label>
                            <div class='controls'>
                                <input type='text' class="form-control"  name='language1' value='<?= $items['language1'] ?>'>
                            </div>
                        </div>
                        <div class='control-group'><label class='control-label'>Second Language</label> 
                            <div class='controls'>
                                <input type='text' class="form-control"  name='language2' value='<?= $items['language2'] ?>'>
                            </div>
                        </div>
                        <div class='control-group'><label class='control-label'>Third Language</label>
                            <div class='controls'>
                                <input type='text' class="form-control"  name='language3' value='<?= $items['language3'] ?>'>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class='control-group'><label class='control-label'>Select Level</label>
                            <div class='controls'>
                            <select name="level_language1" class="form-control">
                                <option value="native" <? if ($items['level_language1'] == "native") echo "selected"; ?>>Native</option>
                                <option value="intermediate" <? if ($items['level_language1'] == "intermediate") echo "selected"; ?>>Intermediate</option>
                                <option value="basic" <? if ($items['level_language1'] == "basic") echo "selected"; ?>>Basic</option>
                            </select>
                            </div>
                        </div>
                       <div class='control-group'><label class='control-label'>Select Level</label>
                            <div class='controls'>
                            <select name="level_language2" class="form-control">
                                <option value="native" <? if ($items['level_language2'] == "native") echo "selected"; ?>>Native</option>
                                <option value="intermediate" <? if ($items['level_language2'] == "intermediate") echo "selected"; ?>>Intermediate</option>
                                <option value="basic" <? if ($items['level_language2'] == "basic") echo "selected"; ?>>Basic</option>
                            </select>
                            </div>
                        </div>
                       <div class='control-group'><label class='control-label'>Select Level</label>
                            <div class='controls'>
                            <select name="level_language3" class="form-control">
                                <option value="native" <? if ($items['level_language3'] == "native") echo "selected"; ?>>Native</option>
                                <option value="intermediate" <? if ($items['level_language3'] == "intermediate") echo "selected"; ?>>Intermediate</option>
                                <option value="basic" <? if ($items['level_language3'] == "basic") echo "selected"; ?>>Basic</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            
            <legend>About yourself</legend>
            <fieldset>
                <textarea class="form-control" rows="8" name="description_knowledge"><?= $items['description_knowledge'] ?></textarea>
            </fieldset>
    
            <legend>What skills do you posses?</legend>
            <fieldset>     
                <div class="row">
                    <div class="col-lg-2">
                    <?
                    $aux = "Reception\nMusic\nBartending\nWeb Developer\nAdministration\nArt Works\nHandyman\nPhotography\nPromoter\nWriting\nGardening\nUnderwater Photography\nTeaching none diving related sports & activities\nTeaching Yoga\nCleaning\nSocial Work\nVideo Making\nBoat Handling\nTeaching languages\nCooking\nSocial Media\nUnderwater Video Making\nDivemaster\nMarine Biology";
                $aux = explode("\n",$aux);
                $i = 1;
                foreach($aux as $skill):
                    echo '<br><label>'.$skill.'</label><br>';
                    $checked_expert = $checked_intermediate = $checked_basic = "";
                    if (strstr($items['skills'],$skill."_expert")){
                        $checked_expert ="checked";
                    }
                    if (strstr($items['skills'],$skill."_intermediate")){
                        $checked_intermediate ="checked";
                    }
                    if (strstr($items['skills'],$skill."_basic")){
                        $checked_basic ="checked";
                    }
                    echo '<input  type="radio" name="_'.$skill.'" value="'.$skill.'_expert" '.$checked_expert.'> Expert<br>
                    <input type="radio" name="_'.$skill.'" value="'.$skill.'_intermediate" '.$checked_intermediate.'> Intermediate<br><input type="radio" name="_'.$skill.'" value="'.$skill.'_basic" '.$checked_basic.'> Basic<br>';
                    if ($i % 5 == 0){
                        echo '</div><div class="col-lg-2">';
                    }
                    $i++;
                endforeach;
            ?>
                    </div>
                </div>
            </fieldset>
            <legend>Describe your background and working experience</legend>
            <fieldset>
                <textarea class="form-control" rows="8" name='description_background'><?= $items['description_background'] ?></textarea>
            </fieldset>
<!--


<div class='control-group'><label class='control-label'>image2</label>

<div class='controls'><input type='text' class="form-control"  name='image2' value='<?= $items['image2'] ?>'></div></div>


<div class='control-group'><label class='control-label'>image3</label>

<div class='controls'><input type='text' class="form-control"  name='image3' value='<?= $items['image3'] ?>'></div></div>


<div class='control-group'><label class='control-label'>image4</label>

<div class='controls'><input type='text' class="form-control"  name='image4' value='<?= $items['image4'] ?>'></div></div>
-->
                <hr>
                <br>
                <center>
                <input type="submit" class="btn btn-success btn-large" name="savechanges"  value="Save Changes">
                </center>
                <br><br>
                
                
                </form>