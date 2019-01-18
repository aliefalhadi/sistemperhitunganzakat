<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pegawai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pegawaiId',
            'pegawaiUserId',
            'pegawaiNama',
            'pegawaiJabatan',
            'pegawaiAlamat',
            //'pegawaitelepon',
            //'pegawaiEmail:email',
            //'pegawaiStatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
