<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jamlayanan */

$this->title = 'Create Jamlayanan';
$this->params['breadcrumbs'][] = ['label' => 'Jamlayanans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jamlayanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
