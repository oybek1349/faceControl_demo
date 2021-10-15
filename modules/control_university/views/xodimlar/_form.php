<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\control_university\models\Bolimlar;
use app\modules\control_university\models\Lavozimlar;
use app\modules\control_university\models\IshJadvallari;

?>
<?php $this->beginContent('@mcu/views/layouts/begin-tabcontent.php'); ?>
<?php $this->endContent(); ?>

<div class="lavozimlar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'xodimID')->textInput(['maxlength' => 50]) ?>
    <?= $form->field($model, 'ismi')->textInput(['maxlength' => 64]) ?>
    <?= $form->field($model, 'tabel_nomer')->textInput(['maxlength' => 16]) ?>

    <?= $form->field($model, 'bolimlar_id')->dropDownList( ArrayHelper::map( Bolimlar::find()->all(), 'id', 'nomlanishi') ) ?>
    <?= $form->field($model, 'lavozimlar_id')->dropDownList(ArrayHelper::map( Lavozimlar::find()->all(), 'id', 'nomlanishi')) ?>
    <?= $form->field($model, 'ish_jadvallari_id')->dropDownList(ArrayHelper::map( IshJadvallari::find()->all(), 'id', 'ish_grafigi')) ?>

    <?= $form->field($model, 'uy_manzil')->textInput(['maxlength' => 64]) ?>
    <?= $form->field($model, 'cardNo')->textInput(['maxlength' => 64]) ?>
    <?= $form->field($model, 'tel_raqam')->textInput(['maxlength' => 20]) ?>


    <div class="form-group">
        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php $this->beginContent('@mcu/views/layouts/end-tabcontent.php'); ?>
<?php $this->endContent(); ?>
