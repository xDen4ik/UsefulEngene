<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Создать пользователя';
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="user-form">

	<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($uploadImage, 'imgFile')->fileInput(['maxlength' => true])->label('Фото') ?>

	<?= $form->field($model, 'username')->textInput() ?>

	<?= $form->field($model, 'password')->textInput() ?>

	<?= $form->field($model, 'email')->textInput() ?>

	<?= $form->field($model, 'status')->textInput() ?>

	<?= $form->field($model, 'id_user_role')->textInput() ?>

	<div class="form-group">
		<?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
	</div>

	<?php ActiveForm::end(); ?>

</div>