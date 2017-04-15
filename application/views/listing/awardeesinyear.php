<div id="grid" class="container">
    <div id="row">
<?php foreach ($data as $row) { ?>
        <div class="col-md-2">
            <a href="<?=BASE_URL?>Awardees/<?=$row->year_awarded?>/<?=str_replace(' ', '_', $row->name)?>" title="View Awardee">
                <div class="fixOverlayDiv">
                    <img class="img-responsive" src="<?=$viewHelper->includeThumbnail($row->name,$row->year_awarded)?>">
                    <div class="OverlayText"><small><?= $row->sal?> <?= $row->name?></small></div>
                </div>
            </a>
        </div>
<?php } ?>
    </div>
</div>
