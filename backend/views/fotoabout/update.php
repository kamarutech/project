<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fotoabout */

$this->title = 'Update Fotoabout: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Fotoabouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fotoabout-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
