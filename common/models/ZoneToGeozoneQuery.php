<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Zonetogeozone]].
 *
 * @see Zonetogeozone
 */
class ZoneToGeozoneQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Zonetogeozone[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Zonetogeozone|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}