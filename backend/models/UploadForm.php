<?php
/**
 * Created by PhpStorm.
 * User: Fahmy
 * Date: 9/14/15
 * Time: 4:04 PM
 */
namespace backend\models;

use yii\base\Model;
use yii\web\UploadedFile;
use common\models\Images;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;
    public $contestName;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['contestName'],'required']
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $image = new Images();
            $image->filename = \Yii::$app->user->id.'-'. $this->imageFile->baseName . '.' . $this->imageFile->extension;
            $image->location = \Yii::getAlias('@backend').'/web/images/';
            $this->imageFile->saveAs($image->location . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            $image->save();
            return true;
        } else {
            return false;
        }
    }
}


