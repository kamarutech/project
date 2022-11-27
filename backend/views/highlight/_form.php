<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Highlight */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="highlight-form">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'fotohighlight')->fileinput() ?>

    <!-- <?= $form->field($model, 'path')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'namaproduk')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
