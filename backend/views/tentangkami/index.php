<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TentangkamiiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tentangkamis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tentangkami-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tentangkami', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'fototentangkami',
            'juduldeskripsi',
            'deskripsitentangkami',
            'path',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Tentangkami $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>
