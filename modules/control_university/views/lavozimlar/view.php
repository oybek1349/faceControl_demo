<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\YiiAsset;


$this->title = $model->nomlanishi;
\Yii::$app->params['breadcrumbs'][] = ['label' => 'Lavozimlar', 'url' => ['index']];
\Yii::$app->params['breadcrumbs'][] = $this->title;

YiiAsset::register($this);
?>

<?php $this->beginContent('@mcu/views/layouts/begin-tabcontent.php'); ?>
<?php $this->endContent(); ?>

<div class="lavozimlar-view">

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
            'nomlanishi',
            'tarif',
        ],
    ]) ?>

</div>
<?php $this->beginContent('@mcu/views/layouts/end-tabcontent.php'); ?>
<?php $this->endContent(); ?>
