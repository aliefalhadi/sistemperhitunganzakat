<div class="container">
    <p></p>
    
    <p></p>
    <div class="row">
        <div class="col-md-12">
        <div class="card card-body printableArea">
              <p>Anda akan berdonasi untuk:</p>
              <p><b><?= \common\models\JenisZakat::find($daftar->pembayaranZakatJenisZakatId)->one()['jenisZakatNama'] ?></b></p> 

              <h4 style="color:grey">Batas Pembayaran</h4>   
              <div class="card">
                 <div class="card-body">Segera lakukan pembayaran sebelum <b><?= date('d F Y H:i:s', strtotime($daftar->pembayaranZakatTgl . ' +1 day')) ?></b> </div>
            </div>
            <p></p>
            <h4 style="color:grey">Donasi Via Transfer Bank Mandiri :</h4>   
              <div class="card">
                 <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">No Donasi:</div>
                        <div class="col-md-3"><b>: <?= $daftar->pembayaranZakatId ?></b></div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">Bank</div>
                        <div class="col-md-3"><b>: <?= \common\models\MetodePembayaran::find($daftar->pembayaranZakatMetode)->one()['nama'] ?></b></div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">No Rekening:</div>
                        <div class="col-md-3"><b>: <?= \common\models\MetodePembayaran::find($daftar->pembayaranZakatMetode)->one()['norek'] ?></b></div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">Atas Nama</div>
                        <div class="col-md-5"><b>: Lembaga Amil Zakat Swadaya Ummah</b></div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">Jumlah Donasi</div>
                        <div class="col-md-5"><b>: Rp. <?= number_format($daftar->pembayaranZakatJumlah, 2, ',', '.'); ?></b></div>
                    </div>
                 </div>
            </div>  
            <div class="text-center">
            <p></p>
                <a href="<?= yii\helpers\Url::to(['site/upload-pembayaran', 'id' => $daftar->pembayaranZakatId]) ?>" class="btn btn-success" style="color:white; border:none; border-radius:10px;">Konfirmasi Pembayaran</a>
            </div>        
        </div>
        
    </div>
    <p></p>
</div>
<p></p>
</div>
