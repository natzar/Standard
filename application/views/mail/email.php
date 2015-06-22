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
            
            <!-- Tab panes -->
           
                
                <label>Reply Message</label><br>
                <label>Subject</label><br>
                <input type="text" name="subject" class="form-control"><br>
                <input type="hidden" name="toUsersId" value="<?= $mail['toUsersId'] ?>">
                <input type="hidden" name="author" value="<?= $_SESSION['author'] ?>">
                <input type="hidden" name="author_image" value="<?= $_SESSION['author_image'] ?>">
                <label>Message</label><br>
                <textarea class="form-control" rows="8" name="content"></textarea>
                <br><input type="submit" class="btn btn-primary" value="Send Message">
                <hr>
                
                <ul class="media-list">
<? foreach($items as $mail): ?>
  <li class="media" style="border-bottom:1px solid #e7e7e7">
    <div class="media-left">
        <img class="media-object img-circle circle" width="40" height="40" src="/data/img/thumbs/<?= $mail['author_image'] ?>" alt=".">
    </div>
    <div class="media-body">
      <h4 class="media-heading"><?= $mail['author'] ?></h4>
      <span class="badge"><?= $mail['fecha'] ?></span>
      <p>
      <?= $mail['content'] ?>
      </p>
    </div>
  </li>
<? endforeach; ?>
  </ul>

               </div>
</div>
