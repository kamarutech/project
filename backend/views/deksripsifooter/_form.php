<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Deksripsifooter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="deksripsifooter-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'deskripsifooter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsifooterbawah')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
