<!DOCTYPE html>
<html>
<head>
    <title> <?= $this->siteTitle() ?></title>
    <link rel="stylesheet" href="<?=PROOT?>css/bootstrap4.css">

    <?= $this->content('head') ?>
</head>
<body>

    <?= $this->content('body') ?>

<script src="<?=PROOT?>js/bootstrap4.js"></script>
<script src="<?=PROOT?>js/jquery.js"></script>
</body>
</html>
