<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="ish_jadvallari-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ish_boshlanish_vaqti') ?>

    <?= $form->field($model, 'ish_tugash_vaqti') ?>

    <?= $form->field($model, 'ish_grafigi') ?>

    <?= $form->field($model, 'tarif') ?>

    <?= $form->field($model, 'qoshimcha') ?>

    <div class="form-group">
        <?= Html::submitButton('Qidirish', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Qayta yuklash', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
