<?php

namespace common\models;
use yii\behaviors\TimestampBehavior;

use Yii;

/**
 * This is the model class for table "contest".
 *
 * @property integer $id
 * @property integer $contest_id
 * @property integer $question_id
 * @property integer $question_type
 * @property string $question
 * @property string $answer
 * @property integer $status
 * @property integer $updated_at
 * @property integer $created_at
 */
class Contest extends \yii\db\ActiveRecord
{

    public $A;
    public $B;
    public $C;
    public $D;
    public $Correct;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contest';
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
            [['contest_id', 'question_id', 'question', 'answer'], 'required'],
            [['contest_id', 'question_id', 'question_type', 'status','created_at','updated_at'], 'integer'],
            [['question', 'answer'], 'string'],
            [['A', 'B', 'C', 'D', 'Correct'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'contest_id' => Yii::t('app', 'Contest ID'),
            'question_id' => Yii::t('app', 'Question ID'),
            'question_type' => Yii::t('app', 'Question Type'),
            'question' => Yii::t('app', 'Question'),
            'answer' => Yii::t('app', 'Answer'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @inheritdoc
     * @return ContestQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ContestQuery(get_called_class());
    }
}
