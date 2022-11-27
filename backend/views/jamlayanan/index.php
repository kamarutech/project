<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JamlayananiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jamlayanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jamlayanan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jamlayanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'jambuka',
            'setiaphari',
            'jam',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Jamlayanan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>
