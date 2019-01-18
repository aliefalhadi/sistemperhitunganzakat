<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\TanyaJawabSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tanya Jawabs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanya-jawab-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tanya Jawab', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tanyaJawanId',
            'tanyaJawabUserId',
            'tanyaJawabPertanyaan:ntext',
            'tanyaJawabJawaban:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
