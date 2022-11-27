<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HighlightSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'setelah upload foto mohon masukkan nama produk dengan menekan tombol edit';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="highlight-index">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?= Html::a('Create Highlight', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'ID',
            'fotohighlight',
            // 'path',
            'namaproduk',
            [
                // 'template'=>' {delete}',

                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, app\models\Highlight $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ID' => $model->ID]);
                 }
            ],
        ],
    ]); ?>


</div>
