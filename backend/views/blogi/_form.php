<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blog-form">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'fotoblog')->fileinput() ?>

    <!-- <?= $form->field($model, 'path')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'dateblog')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'judulblog')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'textblog')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
