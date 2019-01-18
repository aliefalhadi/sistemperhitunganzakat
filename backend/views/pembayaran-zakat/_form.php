<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\number\NumberControl;

/* @var $this yii\web\View */
/* @var $model common\models\PembayaranZakat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembayaran-zakat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pembayaranZakatUserId')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\User::find()->where(['role'=>'pengguna'])->all(), 'userId', 'nama'))  ?>

    <?= $form->field($model, 'pembayaranZakatJenisZakatId')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\JenisZakat::find()->all(), 'jenisZakatId', 'jenisZakatNama'))  ?>

    <?= $form->field($model, 'pembayaranZakatPegawaiId')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Pegawai::find()->all(), 'pegawaiId', 'pegawaiNama')) ?>
    <?php  $dispOptions = ['class' => 'form-control kv-monospace'];
 
 $saveOptions = [
     'type' => 'text', 
     'label'=>'<label>Saved Value: </label>', 
     'class' => 'kv-saved',
     'readonly' => true, 
     'tabindex' => 1000
 ];
  
 ?>
    <?= $form->field($model, 'pembayaranZakatJumlah')->widget(NumberControl::classname(), [
    'maskedInputOptions' => [
        'prefix' => 'Rp ',
        'allowMinus' => false,
        'rightAlign'=> false
    ],
    'displayOptions' =>[
      'class' => 'form-control ',
    ],
    'options' => [
      'style' => 'text-align : left'
    ]
    
    ]); ?>

 
    <?= $form->field($model, 'pembayaranZakatBukti')->fileInput(['class'=>'form-control']) ?>
    

    <?= $form->field($model, 'pembayaranZakatStatus')->dropDownList(['belum-konfirmasi' => 'Belum Konfirmasi', 'konfirmasi' => 'konfirmasi', 'berhasil' => 'Berhasil', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
