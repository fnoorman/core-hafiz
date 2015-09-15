<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%images}}".
 *
 * @property integer $id
 * @property string $filename
 * @property string $location
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%images}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['filename'], 'string', 'max' => 81],
            [['location'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'filename' => Yii::t('app', 'Filename'),
            'location' => Yii::t('app', 'Location'),
        ];
    }

    /**
     * @inheritdoc
     * @return ImagesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ImagesQuery(get_called_class());
    }
}
