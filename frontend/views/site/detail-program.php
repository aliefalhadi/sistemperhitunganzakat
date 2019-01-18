<div class="home-page-events">
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="card">
                        <img class="card-img-top" src="<?= Yii::$app->request->baseUrl . "/images//" . $data->infoProgramFoto ?>" alt="Card image" />
                        <div class="card-body">
                            <div class="card-text">
                                <p class="card-text"><?= date_format(new DateTime($data->infoProgramTanggal), 'd F Y')?></p>
                                <h4>
                                    <a href="<?= \yii\helpers\Url::to(['site/detail-program', 'id'=>$data->infoProgramId])?>">
                                    <?= $data->infoProgramJudul?>
                                    </a>
                                </h4>
                                <p><?= $data->infoProgramIsi?></p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>