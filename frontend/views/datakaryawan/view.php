<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Datakaryawan */

$this->title = $model->idkaryawan;
$this->params['breadcrumbs'][] = ['label' => 'Datakaryawan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="datakaryawan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idkaryawan' => $model->idkaryawan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idkaryawan' => $model->idkaryawan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idkaryawan',
            'nama',
            'alamat',
            'no_telpon',
        ],
    ]) ?>

</div>
