<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\YiiAsset;


$this->title = $model->ish_grafigi;
\Yii::$app->params['breadcrumbs'][] = ['label' => 'Ish grafigi', 'url' => ['index']];
\Yii::$app->params['breadcrumbs'][] = $this->title;

YiiAsset::register($this);
?>

<?php $this->beginContent('@mcu/views/layouts/begin-tabcontent.php'); ?>
<?php $this->endContent(); ?>

<div class="ish_jadvallari-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('O\'zgartirish', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Siz bu ma\'lumotni o\'chirmoqchimisiz?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'ish_boshlanish_vaqti',
            'ish_tugash_vaqti',
            'ish_grafigi',
            'tarif',
            'qoshimcha',
        ],
    ]) ?>

</div>
<?php $this->beginContent('@mcu/views/layouts/end-tabcontent.php'); ?>
<?php $this->endContent(); ?>
