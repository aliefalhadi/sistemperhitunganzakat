<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\JenisZakat */

$this->title = 'Jenis Zakat: ' . $model->jenisZakatId;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Zakat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jenisZakatId, 'url' => ['view', 'id' => $model->jenisZakatId]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="jenis-zakat-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
