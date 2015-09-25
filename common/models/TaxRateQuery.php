<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Taxrate]].
 *
 * @see Taxrate
 */
class TaxRateQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Taxrate[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Taxrate|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}