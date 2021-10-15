<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $this->beginContent('@mcu/views/layouts/begin-tabcontent.php'); ?>
<?php $this->endContent(); ?>

<div class="ish_jadvallari-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ish_boshlanish_vaqti')->input('time') ?>

    <?= $form->field($model, 'ish_tugash_vaqti')->input('time') ?>

    <?= $form->field($model, 'ish_grafigi')->textInput() ?>

    <?= $form->field($model, 'tarif')->textInput() ?>

    <?= $form->field($model, 'qoshimcha')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php $this->beginContent('@mcu/views/layouts/end-tabcontent.php'); ?>
<?php $this->endContent(); ?>
