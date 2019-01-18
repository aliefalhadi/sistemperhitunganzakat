<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TanyaJawabSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tanya-jawab-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'tanyaJawanId') ?>

    <?= $form->field($model, 'tanyaJawabUserId') ?>

    <?= $form->field($model, 'tanyaJawabPertanyaan') ?>

    <?= $form->field($model, 'tanyaJawabJawaban') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
