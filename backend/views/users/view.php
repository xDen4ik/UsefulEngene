<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Пользователь ' .$model->username;
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы точно хотите удалить пользователя?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    
    <? $date_created_at = new DateTime(); ?>
    <? $date_created_at->setTimestamp($model->created_at); ?>
    <? $date_updated_at = new DateTime(); ?>
    <? $date_updated_at->setTimestamp($model->updated_at); ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'email:email',
            'status',
            'id_user_role',
            'updated_at',
            [
                'label' => 'Дата регистрации',
                'value' => $date_created_at->format('Y-m-d H:i:s'),
            ],
            [
                'label' => 'Последняя дата редактирования',
                'value' => $date_updated_at->format('Y-m-d H:i:s'),
            ],
        ],
    ]) ?>

</div>
