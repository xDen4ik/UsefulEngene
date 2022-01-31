<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';
	public $css = [
		'css/site.css',
	];
	public $js = [
	];
	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapAsset',
	];

	public function init()
	{
		if (\yii::$app->request->url == \yii::$app->homeUrl) {
			$this->js[] = 'js/users_visited.js';
		}

		if (\yii::$app->request->url !== '/admin/login') {
			$this->js[] = 'js/time.js';
			$this->js[] = 'js/get_message.js';
		}
	}
}

