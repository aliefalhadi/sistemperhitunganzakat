<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\PembayaranZakatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pembayaran Zakat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembayaran-zakat-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Pembayaran Zakat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pembayaranZakatId',
            'pembayaranZakatUserId',
            'pembayaranZakatJenisZakatId',
            // 'pembayaranZakatPegawaiId',
            'pembayaranZakatJumlah',
            //'pembayaranZakatBukti:ntext',
            'pembayaranZakatStatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
