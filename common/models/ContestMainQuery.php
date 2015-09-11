<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[ContestMain]].
 *
 * @see ContestMain
 */
class ContestMainQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return ContestMain[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ContestMain|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}