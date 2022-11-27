<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FotoaboutiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'hapus foto terlebih dahulu jika ingin mengganti foto';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="fotoabout-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create Fotoabout', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'ID',
            'fotoabout',
            // 'path',
            [
                 //filter rule
                 'template'=>' {delete}',
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Fotoabout $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>
