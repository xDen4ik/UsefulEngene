<?php

namespace common\models;

use yii\base\Model;

class UploadFiles extends Model
{
    public $imgFile;
    public $documentFile;
    public $videoFile;

    public function rules()
    {
        return [
            [['imgFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif', 'maxSize' => 3 * 1024 * 1024, 'message' => 'Ограничение загрузки файла 3MB'],
            [['videoFile'], 'file', 'extensions' => 'mp4, wmv', 'maxFiles' => 1],
            [['documentFile'], 'file', 'extensions' => 'pdf'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'imgFile' => 'Изображение',
        ];
    }

    public function uploadImg()
    {
        if ($this->validate()) {
            if (!empty($this->imgFile)) {
                $file_name_g = substr(md5(microtime() . rand(0, 9999)), 0, 20) . '-' . $this->imgFile->baseName . '.' . $this->imgFile->extension;

                $path = $_SERVER['DOCUMENT_ROOT'] . '/frontend/web/img/dishes/';
                if (file_exists($path)) {
                } else {
                    mkdir($path, 0777, true);
                }
                $path = $_SERVER['DOCUMENT_ROOT'] . '/frontend/web/img/dishes/' . $file_name_g;
                $this->imgFile->saveAs($path);
                return $file_name_g;
            }
        }
        return false;
    }

    public function uploadAvatar()
    {
        if ($this->validate()) {
            if (!empty($this->imgFile)) {
                $file_name_g = substr(md5(microtime() . rand(0, 9999)), 0, 20) . '-' . $this->imgFile->baseName . '.' . $this->imgFile->extension;
                $path = $_SERVER['DOCUMENT_ROOT'] . '/frontend/web/img/users/' . $file_name_g;
                $this->imgFile->saveAs($path);
                return $file_name_g;
            }
        }
        return false;
    }

    public function uploadSlider()
    {
        if (!empty($this->imgFile)) {
            $file_name_g = substr(md5(microtime() . rand(0, 9999)), 0, 20) . '-' . $this->imgFile->baseName . '.' . $this->imgFile->extension;
            $path = $_SERVER['DOCUMENT_ROOT'] . '/frontend/web/img/slider/' . $file_name_g;
            $this->imgFile->saveAs($path);
            return $file_name_g;
        }
    }

    public function uploadDocument($file)
    {
        $file_name_g = substr(md5(microtime() . rand(0, 9999)), 0, 20) . '-' . $file->baseName . '.' . $file->extension;
        $path = '../../common/uploads/document/' . $file_name_g;
        $file->saveAs($path);
        return $file_name_g;
    }

    public function uploadVideo($file)
    {
        $file_name_g = substr(md5(microtime() . rand(0, 9999)), 0, 20) . '-' . $file->baseName . '.' . $file->extension;
        $path = '../../common/uploads/video/' . $file_name_g;
        $file->saveAs($path);
        return $file_name_g;
    }
}
