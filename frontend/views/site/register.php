<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    
    <p></p>
  
    <div class="row">

        <div class="col-md-8  offset-2">
        <div class="card p-4">
        <h2 class="text-center">REGISTER</h2>

        <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telepon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->fileInput(['class' => 'form-control']) ?>

    <div class="form-group">
        <?= Html::submitButton('Register', ['class' => 'btn btn-success', 'style'=>'border:none;color:white']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>    
        </div>
    
    </div>
    <p></p>
    
</div>
