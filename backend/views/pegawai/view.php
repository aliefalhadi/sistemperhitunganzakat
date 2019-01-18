<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Pegawai */

$this->title = $model->pegawaiId;
$this->params['breadcrumbs'][] = ['label' => 'Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-view">


    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->pegawaiId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->pegawaiId], [
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
            'pegawaiId',
            'pegawaiUserId',
            'pegawaiNama',
            'pegawaiJabatan',
            'pegawaiAlamat',
            'pegawaitelepon',
            'pegawaiEmail:email',
            'pegawaiStatus',
        ],
    ]) ?>

</div>
