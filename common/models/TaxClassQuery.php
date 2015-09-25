<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Taxclass]].
 *
 * @see Taxclass
 */
class TaxClassQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Taxclass[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Taxclass|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}