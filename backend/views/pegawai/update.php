<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Pegawai */

$this->title = 'Update Pegawai: ' . $model->pegawaiId;
$this->params['breadcrumbs'][] = ['label' => 'Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pegawaiId, 'url' => ['view', 'id' => $model->pegawaiId]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="pegawai-update">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
