<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use common\models\Geozone;
use common\models\Lookup;

/**
 * This is the model class for table "tax_rate".
 *
 * @property integer $id
 * @property integer $geoZoneId
 * @property string $name
 * @property string $rate
 * @property string $type
 * @property integer $created_at
 * @property integer $updated_at
 */
class Taxrate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tax_rate';
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
            [['geoZoneId'], 'integer'],
            [['type'], 'required'],
            [['rate'], 'number'],
            [['name'], 'string', 'max' => 32],
            [['type'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'geoZoneId' => Yii::t('app', 'Geo Zone'),
            'name' => Yii::t('app', 'Name'),
            'rate' => Yii::t('app', 'Rate'),
            'type' => Yii::t('app', 'Type'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    public function getGeozoneName()
    {
        $gz = Geozone::findOne($this->geoZoneId);
        return $gz->name;
    }

    public function StatusTax()
    {
        $statusLookup = Lookup::items('taxrate');
        return $statusLookup[$this->type];
    }


    /**
     * @inheritdoc
     * @return TaxRateQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TaxRateQuery(get_called_class());
    }






}
