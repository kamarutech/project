<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fotoslider */

$this->title = 'Create Fotoslider';
$this->params['breadcrumbs'][] = ['label' => 'Fotosliders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fotoslider-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
