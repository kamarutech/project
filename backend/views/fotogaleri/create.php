<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fotogaleri */

$this->title = 'Create Fotogaleri';
$this->params['breadcrumbs'][] = ['label' => 'Fotogaleris', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fotogaleri-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
