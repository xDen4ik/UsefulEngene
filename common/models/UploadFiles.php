<?php

namespace common\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadFiles extends Model
{
    public $imgFile;
    public $documentFile;
    public $videoFile;

    public function rules()
    {
        return [
            [['imgFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 4],
            [['imgFile'], 'default', 'value' => '/frontend/web/img/users/default.png']
        ];
    }

    public function attributeLabels()
    {
        return [
            'imgFile' => 'Изображение',
        ];
    }

    public function uploadUserAvatar()
    {
        if ($this->validate()) {
            foreach ($this->imgFile as $file) {
                $file_name = \Yii::$app->security->generateRandomString(12);;
                $file->saveAs($_SERVER['DOCUMENT_ROOT'] . '/frontend/web/img/users/' . $file_name . '.' . $file->extension);
            }
            return'/frontend/web/img/users/' . $file_name . '.' . $file->extension;
        } else {
            return false;
        }
    }

    public function deleteUserAvatar($img_path)
    {
		if(empty($img_path)) {
			return;
		}
        try {
            unlink($_SERVER['DOCUMENT_ROOT'] . $img_path);
        } catch(CDbException $e){
		}
    }
}
