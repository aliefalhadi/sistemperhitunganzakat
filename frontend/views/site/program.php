    <div class="container p-4">
    <div class="section-heading">
            <h4 class="entry-title">Program Swadaya Ummah</h4>
            <p></p><p></p>
    </div>
        <?php foreach ($jenisProgram as $value) : ?>
        <h2><?= $value->jenisProgramNama?></h2>

        <?php $info = \common\models\InfoProgram::find()->where(['infoProgramJenisProgramId'=>$value->jenisProgramId])->all(); ?>
        
        <?php if(isset($info)): ?>
            <div class="row">
            <?php foreach ($info as $data) : ?>
                <div class="col-md-3">
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
                <?php endforeach;?>
            </div>

       
        <?php endif; ?>
        <?php endforeach;?>

        
    </div>


