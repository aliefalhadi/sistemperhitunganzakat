
    <div class="container">
    <p></p>
    <div class="section-heading">
            <h4 class="entry-title">kalkulator Zakat</h4>
    </div>
    <p></p>
       <div class="row">
       
        <div class="col-md-3">
        <div class="list-group">
            <a href="<?= yii\helpers\Url::to(['kalkulator/index']) ?>" class="list-group-item list-group-item-action ">Zakat Emas</a>
            <a href="<?= yii\helpers\Url::to(['kalkulator/fitrah']) ?>" class="list-group-item list-group-item-action active">Zakat Fitrah</a>
            <a href="<?= yii\helpers\Url::to(['kalkulator/pertanian']) ?>" class="list-group-item list-group-item-action">Zakat Pertanian</a>
            <a href="<?= yii\helpers\Url::to(['kalkulator/peternakan']) ?>" class="list-group-item list-group-item-action">Zakat Peternakan</a>
            <a href="<?= yii\helpers\Url::to(['kalkulator/rikaz']) ?>" class="list-group-item list-group-item-action">Zakat Rikaz</a>
            </div>
      
        </div>
        <div class="col-md-9">
       
        <div class="alert alert-success">
        <strong>Anda Wajib Membayar Zakat</strong> Zakat yang harus anda bayarkan Rp <?= $data['total'] ?> 
        <a href="<?= $data['link'] ?>"  class='btn btn-success' style=' color : white; width : auto;border : none'>
        Tunaikan Sekarang</a>
        </div>
       
        
        <div class="form-group">
        <h4>Harga Beras Saat ini</h4>
        <input type="text" class="form-control" id="usr" name="pendapatan" value="Rp <?= $data['model']->jenisZakatNisab ?>" readonly>
        </div>
        
        
        </div>
       </div>
       <p></p>
    </div>
       
