<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\Profil */

$this->title = 'fotoprofil: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Profils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profil-update">
 <!-- <?= Html::a('Create Profil', ['create'], ['class' => 'btn btn-success']) ?>
 <?= Html::a('fotoprofil', ['fotoprofil'], ['class' => 'btn btn-success']) ?> -->
    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
