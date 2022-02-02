<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Visitors;

/**
 * SearchVisitors represents the model behind the search form of `backend\models\Visitors`.
 */
class SearchVisitors extends Visitors
{
	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['id'], 'integer'],
			[['ip', 'country', 'city', 'region', 'latitude', 'longitude', 'country_code', 'created_at'], 'safe'],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function scenarios()
	{
		// bypass scenarios() implementation in the parent class
		return Model::scenarios();
	}

	/**
	 * Creates data provider instance with search query applied
	 *
	 * @param array $params
	 *
	 * @return ActiveDataProvider
	 */
	public function search($params)
	{
		$query = Visitors::find()->orderBy(['created_at' => SORT_DESC]);

		// add conditions that should always apply here

		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		$this->load($params);

		if (!$this->validate()) {
			// uncomment the following line if you do not want to return any records when validation fails
			// $query->where('0=1');
			return $dataProvider;
		}

		// grid filtering conditions
		$query->andFilterWhere([
			'id' => $this->id,
		]);

		$query->andFilterWhere(['like', 'ip', $this->ip])
			->andFilterWhere(['like', 'country', $this->country])
			->andFilterWhere(['like', 'city', $this->city])
			->andFilterWhere(['like', 'region', $this->region])
			->andFilterWhere(['like', 'latitude', $this->latitude])
			->andFilterWhere(['like', 'longitude', $this->longitude])
			->andFilterWhere(['like', 'country_code', $this->country_code])
			->andFilterWhere(['like', 'created_at', $this->created_at]);

		return $dataProvider;
	}
}
