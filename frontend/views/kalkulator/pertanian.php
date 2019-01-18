
    <div class="container">
    <p></p>
    <div class="section-heading">
            <h4 class="entry-title">kalkulator Zakat</h4>
    </div>
    <p>
    Keterangan:
    </p>
    <ul>
        <li>Tanaman sengaja ditanam, bukan tanaman liar.</li>
        <li>Nisab hasil pertanian sebanyak 5 wasaq atau sekitar 653 kg. Dikeluarkan setiap kali panen.</li>
        <li>Zakatnya sebesar 5% untuk lahan yang diairi dengan pengairan dan teknologi yang melibatkan modal kerja cukup banyak.
10% untuk lahan yang diairi dengan air hujan.</li>
        <li>Harta yang dikeluarkan adalah hasil bersih panen, artinya hasil panen dikurangi dengan biaya pengolahan lahan, ongkos buruh, pembelian bibit, pupuk, obat-obatan, dan sebagainya.</li>
    </ul>
    <hr>
    <p></p>
       <div class="row">
       
        <div class="col-md-3">
        <div class="list-group">
            <a href="<?= yii\helpers\Url::to(['kalkulator/index']) ?>" class="list-group-item list-group-item-action ">Zakat Emas</a>
            <a href="<?= yii\helpers\Url::to(['kalkulator/fitrah']) ?>" class="list-group-item list-group-item-action ">Zakat Fitrah</a>
            <a href="<?= yii\helpers\Url::to(['kalkulator/pertanian']) ?>" class="list-group-item list-group-item-action active">Zakat Pertanian</a>
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
        <form action="<?= yii\helpers\Url::to(['kalkulator/pertanian']) ?>" method="post">
        <input type="hidden" name="_csrf-frontend" value="<?= Yii::$app->request->getCsrfToken() ?>" />
        <h4> Jenis pengairan</h4>
        <div class="form-check-inline">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="metod" value="buatan">Buatan
        </label>
        </div>
        <div class="form-check-inline">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="metod" value="alami">Alami
        </label>
        </div>
        <p></p>
        <div class="form-group">
        <h4>Pendapatan hasil panen</h4>
        <input type="number" class="form-control" id="usr" name="pendapatan">
        </div>
        <input type="submit" value="Hitung" class="btn btn-primary" style='color:white; width:auto; border:none'>
        </form>
        </div>
       </div>
       <p></p>
    </div>
