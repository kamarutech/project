<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Slidedeskripsi */

$this->title = 'Update Slidedeskripsi: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Slidedeskripsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="slidedeskripsi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
