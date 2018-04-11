<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ManagerModel */

$this->title = 'Update Manager Model: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Manager Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="manager-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
