<?php

use yii\helpers\Html;

$this->title = $model->ish_grafigi . ' ma\'lumotini o\'zgartirish.';
\Yii::$app->params['breadcrumbs'][] = ['label' => 'Ish grafigi', 'url' => ['index']];
\Yii::$app->params['breadcrumbs'][] = ['label' => $model->ish_grafigi, 'url' => ['view', 'id' => $model->id]];
\Yii::$app->params['breadcrumbs'][] = 'O\'zgartirish';
?>
<div class="ish_jadvallari-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
