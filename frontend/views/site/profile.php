<div class="home-page-icon-boxes">
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="<?= Yii::$app->request->baseUrl . "/foto//" . Yii::$app->user->identity->foto ?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        <a href="" class="btn btn-primary" style="border:none;color:white">Edit Profil</a>
                                        
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">Nama : <?= Yii::$app->user->identity->nama ?></h2>
                                    <h6 class="d-block">Email : <?= Yii::$app->user->identity->email ?></h6>
                                    <h6 class="d-block">Alamat : <?= Yii::$app->user->identity->alamat ?></h6>
                                    <h6 class="d-block">No Telepon : <?= Yii::$app->user->identity->telepon ?></h6>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                    <h4>Riwayat Pembayaran Zakat</h4>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>No Pembayaran</th>
                                            <th>Nama Zakat</th>
                                            <th>Jumlah</th>
                                            <th>Metode Pembayaran</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($data as $value) :
                                        ?>
                                        <tr>
                                            <td><?= $value->pembayaranZakatId ?></td>
                                            <td><?= \common\models\JenisZakat::find()->where(['jenisZakatId' => $value->pembayaranZakatJenisZakatId])->one()['jenisZakatNama'] ?></td>
                                            <td><?= $value->pembayaranZakatJumlah ?></td>
                                            <td><?= \common\models\MetodePembayaran::find($value->pembayaranZakatMetode)->one()['nama'] ?></td>
                                            <td><?= $value->pembayaranZakatTgl ?></td>
                                            <td><?= $value->pembayaranZakatStatus ?></td>
                                            <?php if ($value->pembayaranZakatStatus == 'belum-konfirmasi') : ?>
                                            <td><a href="<?= yii\helpers\Url::to(['site/upload-pembayaran', 'id' => $value->pembayaranZakatId]) ?>">konfirmasi</a></td>
                                             <?php endif; ?>
                                            
                                        </tr>
                                        <?php endforeach; ?>
                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>