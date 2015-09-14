<?php
namespace frontend\models;

use common\models\ContestMain;
use yii\base\Model;
use yii\web\UploadedFile;
use Yii;

/**
 * Signup form
 */
class ContestForm extends Model
{
    public $user_id;
    public $contest_name;
    public $file_image;
    public $status;
    public $created_at;
    public $updated_at;
    public $_id;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'contest_name'], 'required'],
            [['user_id', 'status','created_at','updated_at'], 'integer'],
            [['contest_name'], 'string', 'max' => 31],
            [['file_image'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    /*public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }*/

    public function upload()
    {
        if ($this->validate()) {
            $contest = new ContestMain();

            $contest->user_id = $this->user_id;
            $contest->contest_name = $this->contest_name;
            $contest->contest_image = Yii::getAlias('@frontend').'/web/uploads/'.Yii::$app->user->id.'-'.$this->file_image->baseName . '.'. $this->file_image->extension;


           // $this->file_image = UploadedFile::getInstance($contest, 'file_image');

            $this->file_image->saveAs($contest->contest_image);
            $contest->save();
            $this->_id = $contest->id;
           // if ($contest->save()) {
            //    return true;
           // }
            //return true;
        } else {
            return false;
        }
    }
}
