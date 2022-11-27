<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Produk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fotoproduk')->fileinput() ?>

    <!-- <?= $form->field($model, 'path')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'jenisproduk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'namaproduk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hargaproduk')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
