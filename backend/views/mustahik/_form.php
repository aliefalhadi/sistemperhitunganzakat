<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Mustahik */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mustahik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'mustahikNama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mustahikNIK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mustahikTempatLahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mustahikTanggalLahir')->textInput() ?>

    <?= $form->field($model, 'mustahikJenisKelamin')->dropDownList([ 'Laki-Laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'mustahikAlamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mustahhikTelepon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mustahikEmail')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
