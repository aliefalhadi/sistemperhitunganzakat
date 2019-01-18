<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PegawaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pegawaiId') ?>

    <?= $form->field($model, 'pegawaiUserId') ?>

    <?= $form->field($model, 'pegawaiNama') ?>

    <?= $form->field($model, 'pegawaiJabatan') ?>

    <?= $form->field($model, 'pegawaiAlamat') ?>

    <?php // echo $form->field($model, 'pegawaitelepon') ?>

    <?php // echo $form->field($model, 'pegawaiEmail') ?>

    <?php // echo $form->field($model, 'pegawaiStatus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
