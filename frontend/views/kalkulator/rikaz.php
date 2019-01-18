
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
            <a href="<?= yii\helpers\Url::to(['kalkulator/fitrah']) ?>" class="list-group-item list-group-item-action ">Zakat Fitrah</a>
            <a href="<?= yii\helpers\Url::to(['kalkulator/pertanian']) ?>" class="list-group-item list-group-item-action ">Zakat Pertanian</a>
            <a href="<?= yii\helpers\Url::to(['kalkulator/peternakan']) ?>" class="list-group-item list-group-item-action ">Zakat Peternakan</a>
            <a href="<?= yii\helpers\Url::to(['kalkulator/rikaz']) ?>" class="list-group-item list-group-item-action active">Zakat Rikaz</a>
            </div>
        </div>

        <div class="col-md-9">
        <?php if (Yii::$app->session->hasFlash('success')) : ?>
        <div class="alert alert-success">
         <?= Yii::$app->session->getFlash('success') ?>
             
        </div>
        <?php endif; ?>
        <form action="<?= yii\helpers\Url::to(['kalkulator/rikaz']) ?>" method="post">
        <input type="hidden" name="_csrf-frontend" value="<?= Yii::$app->request->getCsrfToken() ?>" />
        
        <div class="form-group">
        <label for="">Nominal Barang Temuan (dalam rupiah)</label>
        <input type="number" class="form-control" id="usr" name="rikaz">
        </div>
        <input type="submit" value="Hitung" class="btn btn-primary" style='color:white; width:auto; border:none'>
        </form>
        </div>
       </div>
       <p></p>
    </div>
