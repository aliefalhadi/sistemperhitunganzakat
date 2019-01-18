<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\InfoProgramSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Info Program';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-program-index">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tambah Info Program', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'infoProgramId',
            'infoProgramJenisProgramId',
            'infoProgramJudul',
            'infoProgramTanggal',
            'infoProgramIsi:ntext',
            //'infoProgramFoto:ntext',
            //'infoProgramStatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
