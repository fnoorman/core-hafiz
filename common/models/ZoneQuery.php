<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Zone]].
 *
 * @see Zone
 */
class ZoneQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Zone[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Zone|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}