<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SocialmediaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Socialmedia';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="socialmedia-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Socialmedia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'facebbok',
            'twitter',
            'linkedin',
            'instagram',
            //'path',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Socialmedia $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>
