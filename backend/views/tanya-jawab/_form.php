<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TanyaJawab */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tanya-jawab-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanyaJawabUserId')->textInput() ?>

    <?= $form->field($model, 'tanyaJawabPertanyaan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tanyaJawabJawaban')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
