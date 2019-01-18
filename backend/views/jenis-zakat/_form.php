<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\JenisZakat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenis-zakat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenisZakatNama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenisZakatNisab')->textInput() ?>

    <?= $form->field($model, 'jenisZakatStatus')->dropDownList(['Aktif' => 'Aktif', 'Tidak Aktif' => 'Tidak Aktif', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
