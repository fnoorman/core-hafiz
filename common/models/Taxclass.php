<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tax_class".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $tax_rate_id
 * @property string $type
 * @property integer $priority
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property TaxRule[] $taxRules
 */
class Taxclass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tax_class';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['tax_rate_id', 'priority', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'string', 'max' => 32],
            [['description'], 'string', 'max' => 255],
            [['based'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'tax_rate_id' => Yii::t('app', 'Tax Rate'),
            'type' => Yii::t('app', 'Type'),
            'priority' => Yii::t('app', 'Priority'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxRules()
    {
        return $this->hasMany(TaxRule::className(), ['tax_class_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return TaxClassQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TaxClassQuery(get_called_class());
    }
}
