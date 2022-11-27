<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Maps */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="maps-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'linkmaps')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
