<?php

namespace common\models;
use yii\behaviors\TimestampBehavior;

use Yii;

/**
 * This is the model class for table "contest_main".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $contest_name
 * @property integer $status
 */
class ContestMain extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $layout = 'columns-2';
    
    public static function tableName()
    {
        return 'contest_main';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'contest_name'], 'required'],
            [['user_id', 'status'], 'integer'],
            [['contest_name'], 'string', 'max' => 31]
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
            'contest_name' => Yii::t('app', 'Contest Name'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @inheritdoc
     * @return ContestMainQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ContestMainQuery(get_called_class());
    }

    /**
     * @inheritdoc
     */
    public function getContest()
    {
        return $this->hasMany(Contest::className(), ['contest_id' => 'id']);
    }
}
