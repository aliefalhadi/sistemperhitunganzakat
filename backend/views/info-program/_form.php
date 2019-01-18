<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\InfoProgram */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="info-program-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'infoProgramJenisProgramId')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\JenisProgram::find()->all(), 'jenisProgramId', 'jenisProgramNama')) ?>

    <?= $form->field($model, 'infoProgramJudul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'infoProgramIsi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'infoProgramFoto')->fileInput(['class' => 'form-control']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
