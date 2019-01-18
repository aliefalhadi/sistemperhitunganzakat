<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Mustahik */

$this->title = 'Edit Mustahik: ' . $model->mustahikId;
$this->params['breadcrumbs'][] = ['label' => 'Mustahik', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->mustahikId, 'url' => ['view', 'id' => $model->mustahikId]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="mustahik-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
