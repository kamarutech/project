<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jamlayanan */

$this->title = 'Update Jamlayanan: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Jamlayanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jamlayanan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
