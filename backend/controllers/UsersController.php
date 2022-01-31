<?php

namespace backend\controllers;

use Yii;
use common\models\User;
use common\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\UploadFiles;
use yii\web\UploadedFile;
use yii\base\InvalidArgumentException;

/**
 * UsersController implements the CRUD actions for User model.
 */
class UsersController extends Controller
{
	/**
	 * {@inheritdoc}
	 */
	public function behaviors()
	{
		return [
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'delete' => ['POST'],
				],
			],
		];
	}

	/**
	 * Lists all User models.
	 * @return mixed
	 */
	public function actionIndex()
	{
		$searchModel = new UserSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);

		return $this->render('index', [
			'searchModel' => $searchModel,
			'dataProvider' => $dataProvider,
		]);
	}

	/**
	 * Displays a single User model.
	 * @param integer $id
	 * @return mixed
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	public function actionView($id)
	{
		return $this->render('view', [
			'model' => $this->findModel($id),
		]);
	}

	/**
	 * Creates a new User model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate()
	{
		$model = new User();
		$uploadImage = new UploadFiles();
		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			if ($model->validate() === true) {
				return $this->redirect(['view', 'id' => $model->id]);
			} else {
				throw new InvalidArgumentException('Password reset token cannot be blank.');
			}
		}

		return $this->render('create', [
			'model' => $model,
			'uploadImage' => $uploadImage
		]);
	}

	/**
	 * Updates an existing User model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	public function actionUpdate($id)
	{
		$model = $this->findModel($id);
		$uploadImage = new UploadFiles();

		$date = new \DateTime();
		$model->updated_at = intval($date->format('U'));

		if ($model->load(Yii::$app->request->post()) && $uploadImage->load(Yii::$app->request->post())) {
			$uploadImage->imgFile = UploadedFile::getInstances($uploadImage, 'imgFile');
			if ($uploadImage->imgFile === NULL || empty($uploadImage->imgFile)) {
				$model->img = $model->img;
			} else {
				$img_name = $uploadImage->uploadUserAvatar();
				if ($img_name) {
					$uploadImage->deleteUserAvatar($model->img);
					$model->img = $img_name;
				} else {
					$model->img = $model->img;
				}
			}
			$model->save();

			return $this->redirect([
				'view',
				'id' => $model->id,
				'uploadImage' => $uploadImage,
			]);
		}

		return $this->render('update', [
			'model' => $model,
			'uploadImage' => $uploadImage,
		]);
	}

	/**
	 * Deletes an existing User model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id
	 * @return mixed
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	public function actionDelete($id)
	{
		$this->findModel($id)->delete();

		return $this->redirect(['index']);
	}

	/**
	 * Finds the User model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return User the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if (($model = User::findOne($id)) !== null) {
			return $model;
		}

		throw new NotFoundHttpException('The requested page does not exist.');
	}
}
