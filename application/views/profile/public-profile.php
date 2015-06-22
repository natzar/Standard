<? include "application/views/layout/top-content.php"; ?>

<div class="container" style="padding.top:0px;margin-top:0px">
	<div class="row">
        <div class="col-lg-12">
            <h1><?= ucfirst($items['title']) ?> <?= ucfirst($items['surname']) ?></h1>  
            <? 
                //if userid is owner show a button to EDIT =>
            ?>              
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-3">
            <img class="img img-circle" width="100" height="100" src="/data/img/thumbs/<?= $items['imagen1'] ?>"><br><br>
            Nationality: <?= $items['nationality'] ?><br>
            Country of Residence: <?= $items['country_residence'] ?><br>
            <strong>Birthdate:</strong> <?= $items['birthdate'] ?>
        </div>
        <div class="col-lg-9 col-md-9">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Dive Level: <?= $items['dive_level'] ?> by <?= $items['certified_agency'] ?><br>
                    Number of Logged Dives: <?= $items['dives_logged'] ?><br>
                    Dived in <?= $items['where_dived'] ?>
                </div>                
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    LANGUAGES
                </div>
                <div class="panel-body">
                <? for ($i=1;$i< 4;$i++): ?>
                    <? if ($items['language'.$i] !=""): ?>
                        <?= $items['language'.$i] ?> <?= $items['level_language'.$i] ?><br>
                    <? endif; ?>
                <? endfor; ?>
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">ABOUT ME</div>
                <div class="panel-body">
                <?= $items['description_background'] ?>
                </div>
            </div>                    
            <div class="panel panel-info">
               <div class="panel-heading">SKILLS I OFFER</div>
               <div class="panel-body">
                    <div class="row">
                    <? $aux = explode(",",$items['skills']); 
                        $i = 0;
                        foreach($aux as $skill):
                            if ($i % 6 == 0) echo '</div><div class="row">';                           
                            $skill = strtolower($skill); 
                            $skname = substr($skill,0,strpos($skill,"_"));
                            $level = substr($skill,strpos($skill,"_"));
                            echo '<div class="col-lg-2 col-md-2 col-sm-4" style="text-align:center"><img src="public/png/SKILLS/'.str_replace(" ","",strtolower($skname)).'.png"><br>';
                            echo '<strong>'.ucfirst($skname).'</strong><br>';
                            echo substr($level,1);
                            echo '</div>';
                            $i++;
                        endforeach;                
                    ?>
                    </div>
                </div>
            </div>
            <div class="panel panel-info">
               <div class="panel-heading">ABOUT MY BACKGROUND AND WORKING EXPERIENCE</div>
               <div class="panel-body">
                   <?= $items['description_background'] ?>
               </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">WHAT DO THEY SAY ABOUT ME?</div>
                <div class="panel-body">
                <? if($items['comments']): ?>
                <? else: ?>
                    No comments yet
                <? endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>