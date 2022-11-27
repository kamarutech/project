<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Textfooter */

$this->title = 'Update Textfooter: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Textfooters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="textfooter-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
