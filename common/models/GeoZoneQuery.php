<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Geozone]].
 *
 * @see Geozone
 */
class GeoZoneQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Geozone[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Geozone|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}