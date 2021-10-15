<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $this->beginContent('@mcu/views/layouts/begin-tabcontent.php'); ?>
<?php $this->endContent(); ?>

<div class="qaydnoma-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'employeeID')->textInput(['maxlength' => 50]) ?>
    <?= $form->field($model, 'authDateTime')->input('datetime') ?>
    <?= $form->field($model, 'authDate')->input('date') ?>
    <?= $form->field($model, 'authTime')->input('time') ?>
    <?= $form->field($model, 'direction')->textInput(['maxlength' => 50]) ?>
    <?= $form->field($model, 'divaceName')->textInput(['maxlength' => 50]) ?>
    <?= $form->field($model, 'divaceSN')->textInput(['maxlength' => 50]) ?>
    <?= $form->field($model, 'personName')->textInput(['maxlength' => 50]) ?>
    <?= $form->field($model, 'cardNo')->textInput(['maxlength' => 64]) ?>


    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php $this->beginContent('@mcu/views/layouts/end-tabcontent.php'); ?>
<?php $this->endContent(); ?>
