<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Datakaryawan */

$this->title = 'Update Datakaryawan: ' . $model->idkaryawan;
$this->params['breadcrumbs'][] = ['label' => 'Datakaryawan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idkaryawan, 'url' => ['view', 'idkaryawan' => $model->idkaryawan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="datakaryawan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
