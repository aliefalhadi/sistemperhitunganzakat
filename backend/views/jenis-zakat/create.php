<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\JenisZakat */

$this->title = 'Tambah Jenis Zakat';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Zakat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-zakat-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
