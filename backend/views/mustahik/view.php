<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Mustahik */

$this->title = $model->mustahikId;
$this->params['breadcrumbs'][] = ['label' => 'Mustahik', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mustahik-view">


    <p>
        <?= Html::a('Edit', ['update', 'id' => $model->mustahikId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id' => $model->mustahikId], [
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
            'mustahikId',
            'mustahikNama',
            'mustahikNIK',
            'mustahikTempatLahir',
            'mustahikTanggalLahir',
            'mustahikJenisKelamin',
            'mustahikAlamat',
            'mustahhikTelepon',
            'mustahikEmail:email',
            'mustahikStatus',
        ],
    ]) ?>

</div>
