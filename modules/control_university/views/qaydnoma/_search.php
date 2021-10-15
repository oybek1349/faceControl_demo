<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="qaydnoma-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'employeeID') ?>
    <?= $form->field($model, 'authDateTime') ?>    
    <?= $form->field($model, 'direction') ?>    
    <?= $form->field($model, 'personName') ?>
    <?= $form->field($model, 'cardNo') ?>

    <div class="form-group">
        <?= Html::submitButton('Qidirish', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Qayta yuklash', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
