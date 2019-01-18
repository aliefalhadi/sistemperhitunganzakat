<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\JenisProgram */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenis-program-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenisProgramNama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenisProgramStatus')->dropDownList([ 'Tidak Aktif' => 'Tidak Aktif', 'Aktif' => 'Aktif', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
