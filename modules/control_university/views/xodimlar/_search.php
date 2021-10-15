<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="xodimlar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'xodimID') ?>

    <?= $form->field($model, 'ismi') ?>

    <?= $form->field($model, 'tabel_nomer') ?>

    <?= $form->field($model, 'cardNo') ?>

    <?= $form->field($model, 'uy_manzil') ?>

    <?= $form->field($model, 'tel_raqam') ?>

    <div class="form-group">
        <?= Html::submitButton('Qidirish', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Qayta yuklash', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
