<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jamlayanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jamlayanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jambuka')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'setiaphari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jam')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
