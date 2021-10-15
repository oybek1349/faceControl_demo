<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Xodim qo\'shish';
\Yii::$app->params['breadcrumbs'][] = ['label' => 'Xodimlar', 'url' => ['index']];
\Yii::$app->params['breadcrumbs'][] = $this->title;

?>

<div class="xodimlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
