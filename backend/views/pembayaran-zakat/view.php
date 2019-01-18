<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PembayaranZakat */

$this->title = $model->pembayaranZakatId;
$this->params['breadcrumbs'][] = ['label' => 'Pembayaran Zakat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembayaran-zakat-view">


    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->pembayaranZakatId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->pembayaranZakatId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda ingin menghapus data ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pembayaranZakatId',
            'pembayaranZakatUserId',
            'pembayaranZakatJenisZakatId',
            'pembayaranZakatPegawaiId',
            'pembayaranZakatJumlah',
            'pembayaranZakatBukti:ntext',
            'pembayaranZakatStatus',
        ],
    ]) ?>

</div>
