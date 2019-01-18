<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PembayaranZakatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembayaran-zakat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'pembayaranZakatId') ?>

    <?= $form->field($model, 'pembayaranZakatUserId') ?>

    <?= $form->field($model, 'pembayaranZakatJenisZakatId') ?>

    <?= $form->field($model, 'pembayaranZakatPegawaiId') ?>

    <?= $form->field($model, 'pembayaranZakatJumlah') ?>

    <?php // echo $form->field($model, 'pembayaranZakatBukti') ?>

    <?php // echo $form->field($model, 'pembayaranZakatStatus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
