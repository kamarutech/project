<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tentangkami */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tentangkami-form">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'fototentangkami')->fileinput() ?>

    <!-- <?= $form->field($model, 'juduldeskripsi')->textInput(['maxlength' => true]) ?> -->

    <!-- <?= $form->field($model, 'deskripsitentangkami')->textInput(['maxlength' => true]) ?> -->

    <!-- <?= $form->field($model, 'path')->textInput(['maxlength' => true]) ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
