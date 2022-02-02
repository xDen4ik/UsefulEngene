<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Visitors */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Посетители', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="visitors-view">

	<h1>Пользователь № <?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
		<?= Html::a('Удалить', ['delete', 'id' => $model->id], [
			'class' => 'btn btn-danger',
			'data' => [
				'confirm' => 'Удалить дату посещения?',
				'method' => 'post',
			],
		]) ?>
	</p>

	<?= DetailView::widget([
		'model' => $model,
		'attributes' => [
			/* 'id', */
			'ip',
			'country',
			'city',
			'region',
			'latitude',
			'longitude',
			'country_code',
		],
	]) ?>

</div>