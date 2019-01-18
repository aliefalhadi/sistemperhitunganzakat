<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\InfoProgram */

$this->title = $model->infoProgramId;
$this->params['breadcrumbs'][] = ['label' => 'Info Programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-program-view">


    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->infoProgramId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->infoProgramId], [
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
            'infoProgramId',
            'infoProgramJenisProgramId',
            'infoProgramJudul',
            'infoProgramTanggal',
            'infoProgramIsi:ntext',
            'infoProgramFoto:ntext',
            'infoProgramStatus',
        ],
    ]) ?>

</div>
