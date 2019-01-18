<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PembayaranZakat */

$this->title = 'Tambah Pembayaran Zakat';
$this->params['breadcrumbs'][] = ['label' => 'Pembayaran Zakat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembayaran-zakat-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
