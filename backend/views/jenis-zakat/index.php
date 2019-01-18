<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\JenisZakatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jenis Zakat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-zakat-index">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Jenis Zakat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'jenisZakatId',
            'jenisZakatNama',
            // 'jenisZakatNisab',
            [
                'label' => 'jenisZakatNisab',
                'value' => function ($model) {
                    return "Rp " . number_format($model->jenisZakatNisab, 2, ',', '.');
                }
            ],
            'jenisZakatStatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
