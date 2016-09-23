<?php if ($content['top']): ?>
    <div class="col-sm-12">
        <?php print $content['top']; ?>
    </div>
<?php endif ?>

<div class="row">
    <div class="col-md-7 mb2rem">
        <?php print $content['left']; ?>
    </div>

    <div class="col-md-5 mb2rem">
        <?php print $content['right']; ?>
    </div>
</div>


<div class="row bt bb">
    <div class="col-md-7 pl1rem">
        <?php print $content['middle']; ?>
    </div>

    <div class="col-md-5 pl2rem">
        <?php print $content['middle_right']; ?>
    </div>
</div>

<div class="row pt2rem">
    <div class="col-sm-7">
        <?php if ($content['bottom']): ?>
            <?php print $content['bottom']; ?>
        <?php endif ?>
    </div>

    <div class="col-sm-5">
        <?php if ($content['bottom_right']): ?>
            <?php print $content['bottom_right']; ?>
        <?php endif ?>
    </div>
</div>

<div class="row bb">
    <div class="col-sm-12">
        <?php if ($content['bot1']): ?>
            <?php print $content['bot1']; ?>
        <?php endif ?>
    </div>
</div>

<div class="bottomcols clearfix">

    <?php if ($content['bot2']): ?>
        <div class="col-sm-3">
            <?php print $content['bot2']; ?>
        </div>
    <?php endif ?>


    <?php if ($content['bot3']): ?>
        <div class="col-sm-3">
            <?php print $content['bot3']; ?>
        </div>
    <?php endif ?>


    <?php if ($content['bot4']): ?>
        <div class="col-sm-3">
            <?php print $content['bot4']; ?>
        </div>
    <?php endif ?>

</div>  
  
