<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\InfoProgram */

$this->title = 'Edit Info Program: ' . $model->infoProgramId;
$this->params['breadcrumbs'][] = ['label' => 'Info Program', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->infoProgramId, 'url' => ['view', 'id' => $model->infoProgramId]];
$this->params['breadcrumbs'][] = 'Edit';
?>
<div class="info-program-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
