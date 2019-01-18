<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PembayaranZakat */

$this->title = 'Edit Pembayaran Zakat: ' . $model->pembayaranZakatId;
$this->params['breadcrumbs'][] = ['label' => 'Pembayaran Zakat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pembayaranZakatId, 'url' => ['view', 'id' => $model->pembayaranZakatId]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="pembayaran-zakat-update">


    <?= $this->render('_form-konfir', [
        'model' => $model,
    ]) ?>

</div>
