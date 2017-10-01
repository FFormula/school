<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>VideoSchool</title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <h1>VideoSchool</h1>
        <div class="container" style="margin-top: 80px">
            <?= $content ?>
        </div>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>