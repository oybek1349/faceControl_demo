<?php

use yii\helpers\Html;

$this->title = $model->ismi . ' ma\'lumotini o\'zgartirish.';
\Yii::$app->params['breadcrumbs'][] = ['label' => 'Xodimlar', 'url' => ['index']];
\Yii::$app->params['breadcrumbs'][] = ['label' => $model->ismi, 'url' => ['view', 'id' => $model->id]];
\Yii::$app->params['breadcrumbs'][] = 'O\'zgartirish';
?>

<div class="xodimlar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

