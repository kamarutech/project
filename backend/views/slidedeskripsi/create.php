<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Slidedeskripsi */

$this->title = 'Create Slidedeskripsi';
$this->params['breadcrumbs'][] = ['label' => 'Slidedeskripsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slidedeskripsi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
