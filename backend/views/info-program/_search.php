<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\InfoProgramSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="info-program-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'infoProgramId') ?>

    <?= $form->field($model, 'infoProgramJenisProgramId') ?>

    <?= $form->field($model, 'infoProgramJudul') ?>

    <?= $form->field($model, 'infoProgramTanggal') ?>

    <?= $form->field($model, 'infoProgramIsi') ?>

    <?php // echo $form->field($model, 'infoProgramFoto') ?>

    <?php // echo $form->field($model, 'infoProgramStatus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
