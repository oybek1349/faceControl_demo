<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Ish grafigi qo\'shish';
\Yii::$app->params['breadcrumbs'][] = ['label' => 'Ish grafigi', 'url' => ['index']];
\Yii::$app->params['breadcrumbs'][] = $this->title;

?>
<div class="ish_jadvallari-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

