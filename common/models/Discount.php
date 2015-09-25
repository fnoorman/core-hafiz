<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "discount".
 *
 * @property integer $id
 * @property integer $product_id
 * @property integer $customerGroupId
 * @property integer $quantity
 * @property integer $priority
 * @property string $price
 * @property integer $startDate
 * @property integer $endDate
 */
class Discount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'discount';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'customerGroupId', 'startDate', 'endDate'], 'required'],
            [['product_id', 'customerGroupId', 'quantity', 'priority', 'startDate', 'endDate'], 'integer'],
            [['price'], 'number']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'customerGroupId' => Yii::t('app', 'Customer Group ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'priority' => Yii::t('app', 'Priority'),
            'price' => Yii::t('app', 'Price'),
            'startDate' => Yii::t('app', 'Start Date'),
            'endDate' => Yii::t('app', 'End Date'),
        ];
    }

    /**
     * @inheritdoc
     * @return DiscountQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DiscountQuery(get_called_class());
    }
}
