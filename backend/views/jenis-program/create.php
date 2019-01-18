<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\JenisProgram */

$this->title = 'Tambah Jenis Program';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Program', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-program-create">



    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
