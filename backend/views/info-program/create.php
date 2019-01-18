<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\InfoProgram */

$this->title = 'Tambah Info Program';
$this->params['breadcrumbs'][] = ['label' => 'Info Program', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="info-program-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
