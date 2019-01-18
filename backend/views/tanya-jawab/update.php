<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TanyaJawab */

$this->title = 'Update Tanya Jawab: ' . $model->tanyaJawanId;
$this->params['breadcrumbs'][] = ['label' => 'Tanya Jawabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tanyaJawanId, 'url' => ['view', 'id' => $model->tanyaJawanId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tanya-jawab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
