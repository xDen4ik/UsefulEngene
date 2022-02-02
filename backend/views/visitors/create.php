<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Visitors */

$this->title = 'Создать Посетителя';
$this->params['breadcrumbs'][] = ['label' => 'Посетитель', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visitors-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
