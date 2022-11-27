<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProfiliSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profils';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!-- <?= Html::a('Create Profil', ['create'], ['class' => 'btn btn-success']) ?> -->
        <!-- <?= Html::a('fotoprofil', ['fotoprofil'], ['class' => 'btn btn-success']) ?> -->
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'Fotoprofil',
            'Deskripsiprofil',
            'path',
            [
                //MENYEMBUNYIKAN LOGO TER TERTENTU
                'template'=>' {update}',
                //MENYEMBUNYIKAN LOGO TER TERTENTU
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Profil $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>
