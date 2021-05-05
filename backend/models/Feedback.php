<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $message
 * @property string $created_at
 */
class Feedback extends \yii\db\ActiveRecord
{
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'feedback';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['name', 'email', 'message'], 'required', 'message' => '{attribute} нужно заполнить! '],
			[['name', 'email'], 'string', 'max' => 60, 'message' => 'Длина {attribute} 255 символов!'],
			[['name'], 'string', 'message' => '{attribute} должно быть текстовое!'],
			['email', 'email', 'message' => '{attribute} указан не верно!'],
			[['created_at'], 'safe'],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'name' => 'Имя',
			'email' => 'Email',
			'message' => 'Сообщение',
			'created_at' => 'Дата создания',
		];
	}

	public function beforeSave($insert)
	{
		return parent::beforeSave($insert);
	}
}
