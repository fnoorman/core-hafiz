<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "{{%geo_zone}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $updated_at
 * @property integer $created_at
 *
 * @property ZoneToGeozone[] $zoneToGeozones
 */
class Geozone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%geo_zone}}';
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
            [['name', 'description'], 'required'],
            [['updated_at', 'created_at'], 'integer'],
            [['name', 'description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getZoneToGeozones()
    {
        return $this->hasMany(ZoneToGeozone::className(), ['geo_zone_id' => 'id']);
    }

    

    /**
     * @inheritdoc
     * @return GeoZoneQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GeoZoneQuery(get_called_class());
    }


}
