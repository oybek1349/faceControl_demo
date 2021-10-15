<?php

use yii\helpers\Html;

$this->title = $model->employeeID . ' ma\'lumotini o\'zgartirish.';
\Yii::$app->params['breadcrumbs'][] = ['label' => 'Xodimlar', 'url' => ['index']];
\Yii::$app->params['breadcrumbs'][] = ['label' => $model->employeeID, 'url' => ['view', 'id' => $model->id]];
\Yii::$app->params['breadcrumbs'][] = 'O\'zgartirish';
?>

<div class="qaydnoma-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

