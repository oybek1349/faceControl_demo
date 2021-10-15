<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\modules\control_university\assets\MainControlUniversityAssets as MainAsset;
use yii\helpers\Html;

MainAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" dir="ltr">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags(); ?>
    <title><?= Html::encode($this->title) ?></title>

    <?php $this->head() ?>
</head>
<body class="sidebar-white font-opensans">
<?php $this->beginBody() ?>

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>
<div id="main_content">

<?php $this->beginContent('@mcu/views/layouts/header-top.php'); ?>
<?php $this->endContent(); ?>

<?php $this->beginContent('@mcu/views/layouts/left-sidebar.php'); ?>
<?php $this->endContent(); ?>

<?php $this->beginContent('@mcu/views/layouts/right-sidebar.php'); ?>
<?php $this->endContent(); ?>

<?php $this->beginContent('@mcu/views/layouts/page-begin.php'); ?>
<?php $this->endContent(); ?>
 
<?= Html::tag('div', Html::tag('div', $content ,['class'=>'container-fluid'] ), ['class'=>'section-body mt-4'])  ?>

<?php $this->beginContent('@mcu/views/layouts/page-end.php'); ?>
<?php $this->endContent(); ?>

</div>

<?php $this->endBody() ?>
</body>
</html>

<?php $this->endPage() ?>
