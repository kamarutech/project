<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BackgroundSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Backgrounds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="background-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Background', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'fotodepan',
            'path',
            'textutama',
            'tomboltext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Background $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>
