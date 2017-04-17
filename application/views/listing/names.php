<div id="grid" class="container-fluid">
    <div id="posts">
<?php foreach ($data as $row) { ?>
        <div class="post">
            <a href="<?=BASE_URL?>Awardees/<?=$row->year_awarded?>/<?=str_replace(' ', '_', $row->name)?>" title="View Awardee">
                <div class="fixOverlayDiv">
                    <img class="img-responsive" src="<?=$viewHelper->includeThumbnail($row->name,$row->year_awarded)?>">
                    <div class="OverlayText"><small><?= $row->sal?> <?= $row->name?></small></div>
                </div>
            </a>
        </div>
<?php } ?>
    </div>
    <div class="col-md-2 sidebar"><?php require_once('application/views/generalSidebar.php');?></div>
</div>