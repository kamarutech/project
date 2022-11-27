<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fotohalaman */

$this->title = 'Update Fotohalaman: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Fotohalamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fotohalaman-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
