<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Textfooter */

// $this->title = 'Create Textfooter';
$this->params['breadcrumbs'][] = ['label' => 'Textfooters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="textfooter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
