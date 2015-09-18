<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tax_rule".
 *
 * @property integer $id
 * @property integer $tax_class_id
 * @property integer $tax_rate_id
 * @property string $based
 * @property integer $priority
 */
class Taxrule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tax_rule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tax_class_id', 'tax_rate_id', 'based'], 'required'],
            [['tax_class_id', 'tax_rate_id', 'priority'], 'integer'],
            [['based'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tax_class_id' => Yii::t('app', 'Tax Class ID'),
            'tax_rate_id' => Yii::t('app', 'Tax Rate ID'),
            'based' => Yii::t('app', 'Based'),
            'priority' => Yii::t('app', 'Priority'),
        ];
    }

    /**
     * @inheritdoc
     * @return TaxRuleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TaxRuleQuery(get_called_class());
    }
}
