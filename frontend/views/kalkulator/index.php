<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\number\NumberControl;

/* @var $this yii\web\View */
/* @var $model common\models\PembayaranZakat */
/* @var $form yii\widgets\ActiveForm */
?>
    <div class="container">
    <p></p>
    <div class="section-heading">
            <h4 class="entry-title">kalkulator Zakat</h4>
    </div>
    <p></p>
       <div class="row">
       
        <div class="col-md-3">
            <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">Zakat Emas</a>
            <a href="<?= yii\helpers\Url::to(['kalkulator/fitrah']) ?>" class="list-group-item list-group-item-action">Zakat Fitrah</a>
            <a href="<?= yii\helpers\Url::to(['kalkulator/pertanian']) ?>" class="list-group-item list-group-item-action">Zakat Pertanian</a>
            <a href="<?= yii\helpers\Url::to(['kalkulator/peternakan']) ?>" class="list-group-item list-group-item-action">Zakat Peternakan</a>
            <a href="<?= yii\helpers\Url::to(['kalkulator/rikaz']) ?>" class="list-group-item list-group-item-action">Zakat Rikaz</a>
            </div>
        </div>

        <div class="col-md-9">
        <?php if (Yii::$app->session->hasFlash('success')) : ?>
        <div class="alert alert-success">
         <?= Yii::$app->session->getFlash('success') ?>
             
        </div>
        <?php endif; ?>
        
        <?php $form = yii\widgets\ActiveForm::begin(); ?>

         <?= $form->field($model, 'emas_dimiliki')->input('number', ['maxlength' => true])->label('Jumlah Emas yang Dimiliki dalam Gram') ?>

         <?= $form->field($model, 'harga_emas')->widget(NumberControl::classname(), [
             
            'maskedInputOptions' => [
                'prefix' => 'Rp ',
                'allowMinus' => false,
                'rightAlign' => false,
                
            ],
            'displayOptions' => [
                'class' => 'form-control ',
                
            ],
            'options' => [
                'style' => 'text-align : left',
                'value' => $harga->jenisZakatNisab,
            ]

        ]); ?>
         <?= $form->field($model, 'nishab_emas')->input('number', ['value' => $harga->jenisZakatNisab * 85, 'readonly' => true])->label('NISHAB (85 gram)') ?>

         <div class="form-group">
        <?= yii\helpers\Html::submitButton('Hitung Zakat', ['class' => 'btn btn-primary', 'style' => 'color:white; width:auto; border:none']) ?>
             </div>

    <?php yii\widgets\ActiveForm::end(); ?>
        </div>
       </div>
    </div>
