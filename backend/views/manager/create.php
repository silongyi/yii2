<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ManagerModel */

$this->title = '添加管理员';
$this->params['breadcrumbs'][] = ['label' => 'Manager Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="manager-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
