<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Deksripsifooter */

$this->title = 'Create Deksripsifooter';
$this->params['breadcrumbs'][] = ['label' => 'Deksripsifooters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deksripsifooter-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
