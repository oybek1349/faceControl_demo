<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Lavozim qo\'shish';
\Yii::$app->params['breadcrumbs'][] = ['label' => 'Lavozimlar', 'url' => ['index']];
\Yii::$app->params['breadcrumbs'][] = $this->title;

?>
<div class="lavozimlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

