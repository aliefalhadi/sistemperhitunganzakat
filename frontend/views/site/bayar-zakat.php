<div class="container">
    <p></p>
    <div class="section-heading">
            <h4 class="entry-title">Pembayaran Zakat</h4>
    </div>
    <p></p>
    <div class="row">
        <div class="col-md-12">
        <div class="card card-body printableArea">
                            <h3><b><?= $data['zakat'] ?></b></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                            <h3> &nbsp;<b class="text-danger"><?= $data['nama'] ?></b></h3>
                                            <p class="text-muted m-l-5"><?= $data['email'] ?>,
                                                <br> <?= $data['noHp'] ?>,
                                                <br> <?= $data['alamat'] ?>,
                                                </p>
                                        </address>
                                    </div>
                                    <div class="pull-right text-right">
                                        <address>
                                            <h3>Untuk</h3>
                                            <h4 class="font-bold">Lembaga Amil Zakat Swadaya Ummah,</h4>
                                            <p class="text-muted m-l-30">
                                                <br>Jalan Soekarno Hatta no 70A
                                                <br> 0761-565663
                                            <p class="m-t-30"><b>Date :</b> <i class="fa fa-calendar"></i> <?= date('d F Y') ?></p>
                                        </address>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        
                                        <hr>
                                        <h3><b>Total :</b> Rp <?= number_format($data['total'], 2, ',', '.'); ?></h3>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <h4><b>Metode Pembayaran</b></h4>
                                    <p>pilih metode yang tersedia</p>
                                    <form action="<?= yii\helpers\Url::to(['site/pembayaran']) ?>" method="post">
                                    <input type="hidden" name="_csrf-frontend" value="<?= Yii::$app->request->getCsrfToken() ?>" />
                                    <input type="hidden" name="user" value="<?= $data['user'] ?>" />
                                    <input type="hidden" name="email" value="<?= $data['email'] ?>" />
                                    <input type="hidden" name="noHp" value="<?= $data['noHp'] ?>" />
                                    <input type="hidden" name="alamat" value="<?= $data['alamat'] ?>" />
                                    <input type="hidden" name="zakat" value="<?= $data['zakatid'] ?>" />
                                    <input type="hidden" name="total" value="<?= $data['total'] ?>" />
                                    <div class="form-group">
                                    <select name="metode" class="form-control" id="sel1">
                                    <?php foreach ($metode as $value) { ?>
                                        <option value="<?= $value->id ?>"><?= $value->nama ?></option>
                                    <?php 
                                } ?>
                                    </select>
                                    </div>
                                        
                                    <hr>
                                    <div class="">
                                        <button class="btn btn-danger" type="submit" style="color:white; border:none;"> Proses Pembayaran </button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
        
    </div>
    <p></p>
</div>
