<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "campaign_tracker".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $uuid
 * @property string $code
 * @property integer $total_view
 */
class CampaignTracker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign_tracker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uuid', 'code'], 'required'],
            [['user_id', 'total_view'], 'integer'],
            [['uuid'], 'string', 'max' => 121],
            [['code'], 'string', 'max' => 11]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'uuid' => Yii::t('app', 'Uuid'),
            'code' => Yii::t('app', 'Code'),
            'total_view' => Yii::t('app', 'Total View'),
        ];
    }

    /**
     * @inheritdoc
     * @return CampaignTrackerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CampaignTrackerQuery(get_called_class());
    }
}
