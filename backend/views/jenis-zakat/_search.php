<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\JenisZakatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenis-zakat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'jenisZakatId') ?>

    <?= $form->field($model, 'jenisZakatNama') ?>

    <?= $form->field($model, 'jenisZakatNisab') ?>

    <?= $form->field($model, 'jenisZakatStatus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
