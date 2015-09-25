<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use common\models\Country;
use common\models\Zone;
use common\models\Geozone;

/**
 * This is the model class for table "{{%zone_to_geozone}}".
 *
 * @property integer $id
 * @property integer $country_id
 * @property integer $zone_id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $geo_zone_id
 *
 * @property GeoZone $geoZone
 */
class Zonetogeozone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%zone_to_geozone}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),

        ];
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id', 'zone_id'], 'required'],
            [['country_id', 'zone_id', 'created_at', 'updated_at', 'geo_zone_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'country_id' => Yii::t('app', 'Country'),
            'zone_id' => Yii::t('app', 'Zone'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'geo_zone_id' => Yii::t('app', 'Geo Zone'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGeoZone()
    {
        return $this->hasOne(GeoZone::className(), ['id' => 'geo_zone_id']);
    }

    public function getCountryName()
    {
        $rs = Country::findOne($this->country_id);
        return $rs->name;
    }

    public function getZoneName()
    {
        $zs = Zone::findOne($this->zone_id);
        return $zs->name;
    }

    public function getGeozoneName()
    {
        $gz = Geozone::findOne($this->geo_zone_id);
        return $gz->name;
    }

    /**
     * @inheritdoc
     * @return ZoneToGeozoneQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ZoneToGeozoneQuery(get_called_class());
    }
}
