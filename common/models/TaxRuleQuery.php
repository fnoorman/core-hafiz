<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Taxrule]].
 *
 * @see Taxrule
 */
class TaxRuleQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Taxrule[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Taxrule|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}