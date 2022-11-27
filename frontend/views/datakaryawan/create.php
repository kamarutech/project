<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Datakaryawan */

$this->title = 'Create Datakaryawan';
$this->params['breadcrumbs'][] = ['label' => 'Datakaryawan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="datakaryawan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
