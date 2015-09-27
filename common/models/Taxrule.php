<?php

namespace common\models;

use Yii;
use common\models\Taxrate;
use common\models\Lookup;

/**
 * This is the model class for table "tax_rule".
 *
 * @property integer $id
 * @property integer $tax_rate_id
 * @property string $based
 * @property integer $priority
 * @property integer $tax_class_id
 *
 * @property TaxClass $taxClass
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
            [['tax_rate_id', 'based', 'tax_class_id'], 'required'],
            [['tax_rate_id', 'priority', 'tax_class_id'], 'integer'],
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
            'tax_rate_id' => Yii::t('app', 'Tax Rate ID'),
            'based' => Yii::t('app', 'Based'),
            'priority' => Yii::t('app', 'Priority'),
            'tax_class_id' => Yii::t('app', 'Tax Class ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaxClass()
    {
        return $this->hasOne(TaxClass::className(), ['id' => 'tax_class_id']);
    }

    public function getTaxRateName()
    {
        $tr = Taxrate::findOne($this->tax_rate_id);
        return $tr->name;
    }

    public function StatusTaxText()
    {
        $statusTax = Lookup::items('Tax-Rules');
        return $statusTax[$this->based];
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
