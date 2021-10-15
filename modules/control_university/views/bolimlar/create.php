<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Bo\'lim qo\'shish';
\Yii::$app->params['breadcrumbs'][] = ['label' => 'Bo\'limlar', 'url' => ['index']];
\Yii::$app->params['breadcrumbs'][] = $this->title;

?>
<div class="bolim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

