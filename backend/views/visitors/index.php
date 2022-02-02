<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchVisitors */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Посетители';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="visitors-index">

	<h1><?= Html::encode($this->title) ?></h1>

	<p>
		<?= Html::a('Создать посетителя', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?php // echo $this->render('_search', ['model' => $searchModel]); 
	?>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],

			'id',
			'ip',
			'country',
			'city',
			'region',
			'latitude',
			'longitude',
			'country_code',
			'created_at',

			['class' => 'yii\grid\ActionColumn'],
		],
	]); ?>


</div>