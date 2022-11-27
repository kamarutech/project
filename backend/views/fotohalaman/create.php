<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fotohalaman */

$this->title = 'Create Fotohalaman';
$this->params['breadcrumbs'][] = ['label' => 'Fotohalamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fotohalaman-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
