<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PembayaranZakat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pembayaran-zakat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pembayaranZakatUserId')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\User::find()->all(), 'userId', 'nama'), ['disabled'=>true])  ?>

    <?= $form->field($model, 'pembayaranZakatJenisZakatId')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\JenisZakat::find()->all(), 'jenisZakatId', 'jenisZakatNama'), ['disabled'=>true])  ?>

    <?= $form->field($model, 'pembayaranZakatPegawaiId')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\Pegawai::find()->all(), 'pegawaiId', 'pegawaiNama')) ?>

    <?= $form->field($model, 'pembayaranZakatJumlah')->textInput(['readonly'=>true]) ?>

    
    <?= $form->field($model, 'pembayaranZakatBukti')->hiddenInput([]) ?>
    <button type="button" class="btn btn-default"
            data-toggle="modal"
            data-target="#foto-<?= $model->pembayaranZakatId ?>"><img src="foto/<?= $model->pembayaranZakatBukti ?>" width="60px" height="60px"/></button>

      <div class="modal fade " id="foto-<?= $model->pembayaranZakatId ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h2 class="modal-title text-center" id="exampleModalLabel">Bukti</h2>
            </div>
            <div class="modal-body text-center">
                  <img src="foto/<?= $model->pembayaranZakatBukti ?>" width="800px"/>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
              </div>
              </div>
              </div>
   
    <?= $form->field($model, 'pembayaranZakatStatus')->dropDownList(['belum-konfirmasi' => 'Belum Konfirmasi', 'konfirmasi' => 'konfirmasi', 'berhasil' => 'Berhasil', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
