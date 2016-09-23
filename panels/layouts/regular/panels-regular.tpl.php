<?php if ($content['top']): ?>
    <div class="row">
        <div class="col-md-12 pt3rem pb3rem bc3 center">
            <?php print $content['top']; ?>
        </div>
    </div>
<?php endif ?>

<?php if ($content['line0']): ?>
    <div class="bc3">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 pt3rem pb3rem center">
                    <?php print $content['line0']; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>


<?php if ($content['line1'] || $content['line2']): ?>
    <div class="container bc4 pt2rem pb2rem">

        <div class="row">
            <?php if ($content['line1']): ?>
                <div class="col-md-12 specialHeadings">
                    <?php print $content['line1']; ?>
                </div>
            <?php endif ?>

            <?php if ($content['line2']): ?>
                <div class="col-md-12">
                    <?php print $content['line2']; ?>
                </div>
            <?php endif ?>


        </div>

    </div>
<?php endif ?>
