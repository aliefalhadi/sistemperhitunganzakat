<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Pegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pegawaiUserId')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\User::find()->all(), 'userId', 'nama'))  ?>

    <?= $form->field($model, 'pegawaiNama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pegawaiJabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pegawaiAlamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pegawaitelepon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pegawaiEmail')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
