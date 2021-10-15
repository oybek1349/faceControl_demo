<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $this->beginContent('@mcu/views/layouts/begin-tabcontent.php'); ?>
<?php $this->endContent(); ?>

<div class="lavozimlar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomlanishi')->textInput(['maxlength' => 64]) ?>

    <?= $form->field($model, 'tarif')->textInput(['maxlength' => 64]) ?>

    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php $this->beginContent('@mcu/views/layouts/end-tabcontent.php'); ?>
<?php $this->endContent(); ?>
