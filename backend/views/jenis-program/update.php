<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\JenisProgram */

$this->title = 'Tambah Jenis Program: ' . $model->jenisProgramId;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Program', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jenisProgramId, 'url' => ['view', 'id' => $model->jenisProgramId]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="jenis-program-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
