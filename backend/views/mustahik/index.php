<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\MustahikSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mustahik';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mustahik-index">


    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Mustahik', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'mustahikId',
            'mustahikNama',
            'mustahikNIK',
            'mustahikTempatLahir',
            'mustahikTanggalLahir',
            //'mustahikJenisKelamin',
            //'mustahikAlamat',
            //'mustahhikTelepon',
            //'mustahikEmail:email',
            'mustahikStatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
