<? include "application/views/layout/top-content.php"; ?>
<div class="container" style="padding-top:50px">
        <div class="row">
        <div class="col-sm-3 col-md-2">
          <!--
  <a href="#" class="btn btn-danger btn-sm btn-block" role="button">COMPOSE</a>
            <hr />
-->
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="/<?= $_SESSION['lang'] ?>/mail"><? if ($SIDEDATA['notification'] > 0): ?><span class="badge pull-right"><?= $SIDEDATA['notification'] ?></span><? endif; ?> Inbox </a>
                </li>

            </ul>
        </div>
        <div class="col-sm-9 col-md-10">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#home" data-toggle="tab"><span class="glyphicon glyphicon-inbox">
                </span>Conversations</a></li>
<!--
                <li><a href="#profile" data-toggle="tab"><span class="glyphicon glyphicon-user"></span>
                    </a></li>
                <li><a href="#messages" data-toggle="tab"><span class="glyphicon glyphicon-tags"></span>
                    Promotions</a></li>
                <li><a href="#settings" data-toggle="tab"><span class="glyphicon glyphicon-plus no-margin">
                </span></a></li>
-->
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="list-group">
                    <? if(count($items) < 1): ?>
                        <div class="alert alert-warning">You don't have any mail</div>
                    <? endif; ?>
                    <? foreach($items as $item): ?>
                        <a href="/<?=$_SESSION['lang']?>/mail/detail/<?= $item['mailId'] ?>" class="list-group-item <? if($item['read'] ==0) echo 'list-group-item-success'; ?>">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                </label>
                            </div>
                            <img width="50" height="50" src="/data/img/thumbs/<?= $item['author_image'] ?>" class="img circular img-circle">
                            <span class="name" style="min-width: 120px;
                                display: inline-block;"><?= $item['author'] ?></span> <span class=""><?= $item['subject'] ?></span>
                            <span class="text-muted" style="font-size: 11px;">- <?= substr($item['content'],0,45) ?>...</span> <span
                                class="badge"><?= $item['fecha'] ?></span> <span class="pull-right"><span class="glyphicon glyphicon-paperclip">
                                </span></span></a>
                                        
                        <? endforeach; ?>                                        
                    </div>
                </div>
                <div class="tab-pane fade in" id="profile">
                    <div class="list-group">
                        <div class="list-group-item">
                            <span class="text-center">This tab is empty.</span>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade in" id="messages">
                    ...</div>
                <div class="tab-pane fade in" id="settings">
                    This tab is empty.</div>
            </div>
            <!-- Ad -->
            
        </div>
    </div>
</div>
