<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "admin_statistics".
 *
 * @property int $id
 * @property int $user_id
 * @property string $visit_time
 * @property string $last_visit
 */
class AdminStatistics extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin_statistics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['visit_time', 'last_visit'], 'required'],
            [['visit_time', 'last_visit'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'Id пользователя',
            'visit_time' => 'Время посещения',
            'last_visit' => 'Время последнего посещения',
        ];
    }
}
