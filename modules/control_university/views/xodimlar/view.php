<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\YiiAsset;


$this->title = $model->ismi;
\Yii::$app->params['breadcrumbs'][] = ['label' => 'Xodimlar', 'url' => ['index']];
\Yii::$app->params['breadcrumbs'][] = $this->title;

YiiAsset::register($this);
?>

<?php $this->beginContent('@mcu/views/layouts/begin-tabcontent.php'); ?>
<?php $this->endContent(); ?>

<div class="xodimlar-view">

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
            'xodimID',
            'ismi',        
            'tabel_nomer', 
            'cardNo', 
            'uy_manzil', 
            'tel_raqam',                                           
        ],
    ]) ?>

</div>
<?php $this->beginContent('@mcu/views/layouts/end-tabcontent.php'); ?>
<?php $this->endContent(); ?>
