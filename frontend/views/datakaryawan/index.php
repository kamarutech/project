<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DatakaryawanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Datakaryawan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datakaryawan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Datakaryawan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idkaryawan',
            'nama',
            'alamat',
            'no_telpon',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, frontend\controllers\Datakaryawan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idkaryawan' => $model->idkaryawan]);
                 }
            ],
        ],
    ]); ?>


</div>
