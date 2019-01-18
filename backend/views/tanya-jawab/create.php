<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TanyaJawab */

$this->title = 'Create Tanya Jawab';
$this->params['breadcrumbs'][] = ['label' => 'Tanya Jawabs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanya-jawab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
