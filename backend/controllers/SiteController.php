<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\User;
use backend\models\Visitors;
use backend\models\AdminStatistics;
use backend\models\Feedback;

/**
 * Site controller
 */
class SiteController extends Controller
{
	/**
	 * {@inheritdoc}
	 */
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'actions' => ['login', 'error', 'get-message'],
						'allow' => true,
					],
					[
						'actions' => ['logout', 'index', 'get-message'],
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'logout' => ['post'],
					'get-messages' => ['get'],
				],
			],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function actions()
	{
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
			],
		];
	}

	/**
	 * Displays homepage.
	 *
	 * @return string
	 */
	public function actionIndex()
	{
		// Set page title
		Yii::$app->view->title = "Панель администратора";

		$users_count = Visitors::find()->count();
		$users_visit = Visitors::find()->Where('created_at >= CURDATE()')->count();

		return $this->render('index', [
			'users_count' => $users_count,
			'users_visit' => $users_visit
		]);
	}

	/**
	 * Login action.
	 *
	 * @return string
	 */
	public function actionLogin()
	{
		if (!Yii::$app->user->isGuest) {
			return $this->goHome();
		}

		$this->layout = 'blank';

		$model = new LoginForm();
		if ($model->load(Yii::$app->request->post()) && $model->login()) {
			return $this->goBack();
		} else {
			$model->password = '';

			return $this->render('login', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Logout action.
	 *
	 * @return string
	 */
	public function actionLogout()
	{
		Yii::$app->user->logout();

		return $this->redirect('/');
	}

	/**
	 * Get message action.
	 *
	 * @return string
	 */
	public function actionGetMessage()
	{
		$feedback = Feedback::find()->orderBy(['created_at' => SORT_DESC])->limit(5)->asArray()->all();
		$feedback['total_count'] =	Feedback::find()->count();
		return $this->asJson($feedback);
	}
}
