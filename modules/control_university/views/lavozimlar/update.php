<?php

use yii\helpers\Html;

$this->title = $model->nomlanishi . ' ma\'lumotini o\'zgartirish.';
\Yii::$app->params['breadcrumbs'][] = ['label' => 'Lavozimlar', 'url' => ['index']];
\Yii::$app->params['breadcrumbs'][] = ['label' => $model->nomlanishi, 'url' => ['view', 'id' => $model->id]];
\Yii::$app->params['breadcrumbs'][] = 'O\'zgartirish';
?>
<div class="lavozimlar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
