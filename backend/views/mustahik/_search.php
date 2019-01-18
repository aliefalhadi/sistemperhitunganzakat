<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MustahikSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mustahik-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'mustahikId') ?>

    <?= $form->field($model, 'mustahikNama') ?>

    <?= $form->field($model, 'mustahikNIK') ?>

    <?= $form->field($model, 'mustahikTempatLahir') ?>

    <?= $form->field($model, 'mustahikTanggalLahir') ?>

    <?php // echo $form->field($model, 'mustahikJenisKelamin') ?>

    <?php // echo $form->field($model, 'mustahikAlamat') ?>

    <?php // echo $form->field($model, 'mustahhikTelepon') ?>

    <?php // echo $form->field($model, 'mustahikEmail') ?>

    <?php // echo $form->field($model, 'mustahikStatus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
