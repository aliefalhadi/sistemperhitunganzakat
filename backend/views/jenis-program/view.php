<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\JenisProgram */

$this->title = $model->jenisProgramId;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-program-view">

    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->jenisProgramId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->jenisProgramId], [
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
            'jenisProgramId',
            'jenisProgramNama',
            'jenisProgramStatus',
        ],
    ]) ?>

</div>
