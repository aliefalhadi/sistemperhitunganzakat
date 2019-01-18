<div class="container">
    <p></p>
    
    <p></p>
    <div class="row">
        <div class="col-md-12">
        <div class="card card-body printableArea">
              <p>Konfirmasi Pembayaran Zakat:</p>
              <p><b>Zakat Emas</b></p> 

        
            <h4 style="color:grey">Donasi Via Transfer Bank Mandiri :</h4>   
            <div class="card">
                 <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">No Donasi</div>
                        <div class="col-md-3"><b>: 


<?= $data->pembayaranZakatId ?></b></div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">Nama</div>
                        <div class="col-md-3"><b>: <?= \common\models\User::find()->where(['userId' => $data->pembayaranZakatUserId])->one()['nama'] ?></b></div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">Bank</div>
                        <div class="col-md-3"><b>: <?= \common\models\MetodePembayaran::find($data->pembayaranZakatMetode)->one()['nama'] ?></b></div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">No Rekening:</div>
                        <div class="col-md-3"><b>: <?= \common\models\MetodePembayaran::find($data->pembayaranZakatMetode)->one()['norek'] ?></b></div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">Atas Nama</div>
                        <div class="col-md-5"><b>: Lembaga Amil Zakat Swadaya Ummah</b></div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">Jumlah Donasi</div>
                        <div class="col-md-5"><b>: Rp. <?= number_format($data->pembayaranZakatJumlah, 2, ',', '.'); ?></b></div>
                    </div>
                 </div>
            </div>   <p></p>
            <?php $form = \yii\bootstrap\ActiveForm::begin(); ?>


    <?= $form->field($model, 'file')->fileInput(['class' => 'form-control']) ?>
    
    <div class="form-group">
        <?= \yii\bootstrap\Html::submitButton('Save', ['class' => 'btn btn-success' ,'style'=>'color:white; border:none']) ?>
    </div>

    <?php \yii\bootstrap\ActiveForm::end(); ?>
<!--            <div class="text-center">-->
<!--            <p></p>-->
<!--                <a href="--><?//= yii\helpers\Url::to(['site/upload-pembayaran']) ?><!--" class="btn btn-success" style="color:white; border:none; border-radius:10px;">Upload Bukti Transfer</a>-->
<!--            </div>        -->
        </div>
        
    </div>
    <p></p>
</div>
<p></p>
</div>
