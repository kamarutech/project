<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tentangkami */

$this->title = 'Update Tentangkami: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Tentangkamis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tentangkami-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
