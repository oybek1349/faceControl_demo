<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="lavozimlar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nomlanishi') ?>

    <?= $form->field($model, 'tarif') ?>

    <div class="form-group">
        <?= Html::submitButton('Qidirish', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Qayta yuklash', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
