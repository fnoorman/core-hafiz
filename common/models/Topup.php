<?php

namespace common\models;


use Yii;
use yii\behaviors\TimestampBehavior;
/**
 * This is the model class for table "{{%topup}}".
 *
 * @property integer $id
 * @property string $name
 * @property double $unitPrice
 * @property integer $maxCallOut
 * @property integer $updated_at
 * @property integer $created_at
 * @property integer $update_by
 * @property integer $created_by
 * @property integer $position
 * @property integer enable
 */
class Topup extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),

        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%topup}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['unitPrice','price'], 'number'],
            [['maxCallOut', 'updated_at', 'created_at', 'update_by', 'created_by','position','enable'], 'integer'],
            [['name'], 'string', 'max' => 80]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'        => Yii::t('app', 'ID'),
            'name'      => Yii::t('app', 'Name'),
            'unitPrice' => Yii::t('app', 'Unit Price'),
            'maxCallOut'=> Yii::t('app', 'Max Call Out'),
            'updated_at'=> Yii::t('app', 'Updated At'),
            'created_at'=> Yii::t('app', 'Created At'),
            'update_by' => Yii::t('app', 'Update By'),
            'created_by'=> Yii::t('app', 'Created By'),
            'position'  => Yii::t('app', 'Position'),
            'enable'    => Yii::t('app', 'Enable'),
            'price'    => Yii::t('app', 'Price'),
        ];
    }

    /**
     * @inheritdoc
     * @return TopupQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TopupQuery(get_called_class());
    }
}
