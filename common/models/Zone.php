<?php

namespace common\models;

use Yii;
use common\models\Lookup;
use common\models\Country;
use yii\helpers\ArrayHelper;
use yii\behaviors\TimestampBehavior;
use yii\helpers\Html;

/**
 * This is the model class for table "zone".
 *
 * @property integer $id
 * @property integer $country_id
 * @property string $name
 * @property string $code
 * @property integer $status
 */
class Zone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zone';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_id', 'name', 'code'], 'required'],
            [['country_id', 'status'], 'integer'],
            [['name'], 'string', 'max' => 128],
            [['code'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'country_id' => Yii::t('app', 'Country ID'),
            'name' => Yii::t('app', 'Name'),
            'code' => Yii::t('app', 'Code'),
            'status' => Yii::t('app', 'Status'),
        ];
    }



    /**
     * @inheritdoc
     * @return ZoneQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ZoneQuery(get_called_class());
    }


    public function getCountryName()
    {
        $rs = Country::findOne($this->country_id);
        return $rs->name;
    }

    public function StatusText()
    {
        $statusLookup = Lookup::items('Status-Package');
        return $statusLookup[$this->status];
    }

    public function StatusDropDownOptions()
    {
        $statusLookup = Lookup::items('Status-Package');
        return $statusLookup;
        //return ArrayHelper::map($statusLookup,'code','name');
    }
}
