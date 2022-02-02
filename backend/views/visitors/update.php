<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Visitors */

$this->title = 'Обновить посетителя № ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Посетитель', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="visitors-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
