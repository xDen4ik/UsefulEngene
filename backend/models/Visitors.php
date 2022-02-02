<?php

namespace backend\models;

use Yii;
use GeoIp2\Database\Reader;
use GeoIp2\Exception\AddressNotFoundException;

/**
 * This is the model class for table "Visitors".
 *
 * @property int $id
 * @property string|null $ip
 * @property string|null $country
 * @property string|null $city
 * @property string|null $region
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $country_code
 */
class Visitors extends \yii\db\ActiveRecord
{
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'Visitors';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
			[['ip', 'country', 'city', 'region', 'latitude', 'longitude'], 'string', 'max' => 255],
			[['country_code'], 'string', 'max' => 10],
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
			'ip' => 'Ip',
			'country' => 'Страна',
			'city' => 'Город',
			'region' => 'Область',
			'latitude' => 'Ширина',
			'longitude' => 'Долгота',
			'country_code' => 'Код страны',
			'created_at' => 'Дата посещения',
		];
	}

	public function saveVisitorInfo()
	{
		$ip = $_SERVER['REMOTE_ADDR'];

		// check localhost ip
		if ($_SERVER['REMOTE_ADDR'] == "127.0.0.1") {
			$ip = "91.218.33.201";
		}

		$find_user = Visitors::find()->where(['ip' => $ip])->one();

		// update exist user date visit
		if (!empty($find_user)) {
			$find_user->created_at = date("Y-m-d H:i:s");
			$find_user->save();
			return;
		}

		// save user info
		try {
			$readerCity = new Reader($_SERVER['DOCUMENT_ROOT'] . '/GeoLite2-City.mmdb');
			$readerCity->city($ip);
			$record = $readerCity->city($ip);

			$this->ip = $ip;
			$this->country  = $record->country->names['ru'];
			$this->city = $record->city->names['ru'];
			$this->region = $record->mostSpecificSubdivision->names['ru'];
			$this->latitude = strval($record->location->latitude);
			$this->longitude = strval($record->location->longitude);
			$this->country_code = $record->country->isoCode;
			if ($this->validate()) {
				$this->save();
			}
		} catch (AddressNotFoundException $e) {
			return;
		}
	}
}
