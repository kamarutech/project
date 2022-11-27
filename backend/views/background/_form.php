<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Background */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="background-form">

    <?php $form = ActiveForm::begin(); ?>

    
    <?= $form->field($model, 'textutama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tomboltext')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
