<?php
namespace frontend\models;

use common\models\CampaignTracker;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class NewCampaignTracker extends Model
{
    public $uuid;
    public $code;
    public $user_id;
    public $total_view;

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
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function createnew()
    {
        if ($this->validate()) {
            $user = new CampaignTracker();
            $user->uuid = $this->uuid;
            $user->code = $this->code;
            $user->user_id = $this->user_id;
            $user->total_view = $this->total_view;
            if ($user->save()) {
                //return $user;
            }
        }

        return null;
    }
}
