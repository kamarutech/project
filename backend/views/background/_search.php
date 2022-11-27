<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BackgroundSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="background-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'fotodepan') ?>

    <?= $form->field($model, 'path') ?>

    <?= $form->field($model, 'textutama') ?>

    <?= $form->field($model, 'tomboltext') ?>

    <?php // echo $form->field($model, 'intro') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
