<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Pegawai */

$this->title = 'Tambah Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
