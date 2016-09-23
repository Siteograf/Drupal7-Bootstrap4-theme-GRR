<div class="bc4">
    <div class="container">
        <div class="row pt2rem">
            <?php if ($content['top']): ?>
                <div class="col-sm-12">
                    <?php print $content['top']; ?>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>

<?php if ($content['full1']): ?>
    <div class="bc3">
        <div class="container">
            <div class="row">
                <div class="col-md-12-">
                    <?php print $content['full1']; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<?php if ($content['full2']): ?>
    <div class="colorfull center">
        <?php print $content['full2']; ?>
    </div>
<?php endif ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 bc4">
            <div class="row pt3rem">
                <div class="col-md-4 tc c1">
                    <?php print $content['left_icon']; ?>
                </div>
                <div class="col-md-8">
                    <?php print $content['left']; ?>
                </div>
            </div>
        </div>

        <div class="col-md-6 bc3">
            <div class="row pt3rem">
                <div class="col-md-4 tc c1">
                    <?php print $content['right_icon']; ?>
                </div>
                <div class="col-md-8">
                    <?php print $content['right']; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ($content['full3']): ?>
    <div class="colorfull center">
        <?php print $content['full3']; ?>
    </div>
<?php endif ?>


</div>

  
