<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
 <div class="images-form">

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
 
    <?= $form->field($model, 'foto')->fileInput() ?>
    <div class="form-group">

    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

 
 
<?php ActiveForm::end() ?>
</div>
