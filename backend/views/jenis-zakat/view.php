<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\JenisZakat */

$this->title = $model->jenisZakatId;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Zakat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-zakat-view">


    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->jenisZakatId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->jenisZakatId], [
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
            'jenisZakatId',
            'jenisZakatNama',
            'jenisZakatNisab',
            'jenisZakatStatus',
        ],
    ]) ?>

</div>
