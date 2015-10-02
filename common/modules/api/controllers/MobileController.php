<?php
/**
 * Created by PhpStorm.
 * User: Fahmy
 * Date: 9/15/15
 * Time: 10:55 AM
 */

namespace common\modules\api\controllers;

use yii\rest\Controller;
use frontend\models\SignupForm;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use common\models\Contest;
use common\models\ContestMain;
use common\models\Review;
use common\models\CampaignTracker;
use frontend\models\NewCampaignTracker;
use yii\db\Query;

class MobileController extends Controller
{

     //public $enableCsrfValidation = true;
    public $connection;
    
    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup($username,$email,$password,$confirmPassword)
    {
        $model = new SignupForm();
        $model->username = $username;
        $model->email = $email;
        $model->password = $password;
        $model->confirmPassword = $confirmPassword;

            if ($model->signup()) {
                return ['signup' => 'OK'];
            }else {
                return ['signup' => 'NOT OK'];
            }

    }

    /**
     * Signs user in.
     *
     * @return mixed
     */
    public function actionSignin($email,$password)
    {
        if (!\Yii::$app->user->isGuest) {
            return ['login' => 'OK'];
        }

        $model = new LoginForm();
        $model->email = $email;
        $model->password = $password;

        if ($model->login()) {
                    $userID = \Yii::$app->user->id;
                    $usernamez = \Yii::$app->user->identity->username;
                 return ['login' => 'OK', 'ID' => $userID, 'name'=> $usernamez];
            }else {
                return ['login' => 'NOT OK'];
            }

    }

    /**
     * Signs user out.
     *
     * @return mixed
     */
    public function actionSignout()
    {
        if (!\Yii::$app->user->isGuest) {
            \Yii::$app->user->logout();
            return ['logout' => 'OK'];
        }else {
            return ['logout' => 'NOOOOOOOOOO'];
        }

    }

    /**
     * check is guest?.
     *
     * @return mixed
     */
    public function actionGuest()
    {
        if (!\Yii::$app->user->isGuest) { 
            return ['guest' => \Yii::$app->user->identity->username, 'ID' => \Yii::$app->user->identity->id];
        }else {
            return ['guest' => 'Guest'];
        }

    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionPasswordreset($email)
    {
        $model = new PasswordResetRequestForm();
        $model->email = $email;

        if ($model->validate()) {
            if ($model->sendEmail()) {
                //Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return ['resetPassword' => 'Please check your email and follow the instructions to reset password.'];

            } else {
                //Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
                return ['resetPassword' => 'Its failed to send new password to this email.'];
            }
        }
        return ['resetPassword' => 'This email address failed to recognize.'];
    }

    /**
     * code digestion.
     *
     * @return mixed
     */
    public function actionCode($code)
    {
        if ($code === '1234') { 
            return ['status' => 'true','code' => 'contest','id'=> 133];
        }else if ($code === '123A') {
            return ['status' => 'true','code' => 'review','id'=> 8];
        }else if ($code === '1239') {
            return ['status' => 'true','code' => 'review','id'=> 9];
        }else {
            return ['status' => 'false','code' => 'no'];
        }

    }

        /**
     * Displays a single ContestMain model.
     * @param integer $id
     * @return mixed
     */
    public function actionGetjsoncontest_specific($contest_id)
    {
 
            $this->connection = \Yii::$app->db;
 
            $model = new Contest();
            $model_main = new ContestMain();

            $query = ContestMain::find()->where(['user_id' => \Yii::$app->user->id])->one();

            $model_contest = $this->connection->createCommand("SELECT contest.*, contest_main.contest_name, contest_main.contest_image FROM contest LEFT JOIN contest_main ON contest.contest_id = contest_main.id where contest.contest_id = $contest_id");

            $get_model_contest = $model_contest->queryAll();

            $event = \yii\helpers\Json::encode($get_model_contest, 320); 

                echo '{"items":'. $event .'}';
  
    }  

        /**
     * Displays a single ContestMain model.
     * @param integer $id
     * @return mixed
     */
    public function actionGetjsonreview_specific($review_id)
    {
 
            $this->connection = \Yii::$app->db;
 
            $model = new Review();

            $model_review = $this->connection->createCommand("SELECT * FROM review where id = $review_id");

            $get_model_review = $model_review->queryAll();

            $event = \yii\helpers\Json::encode($get_model_review, 320); 

                echo '{"items":'. $event .'}';
  
    } 

   /*
            CAMPAIGN USER TRACKER 
   */ 


     /**
     * Displays a single ContestMain model.
     * @param integer $id
     * @return mixed
     */
    public function actionIs_exist($uuid, $code)
    {
 
            $this->connection = \Yii::$app->db;
 
            $model = new CampaignTracker();

            $model_review = $this->connection->createCommand("SELECT COUNT(*) AS total FROM campaign_tracker WHERE uuid = '$uuid' AND code = '$code'");

            $get_model_review = $model_review->queryAll();

            $event = \yii\helpers\Json::encode($get_model_review, 320); 
            
                echo '{"items":'. $event .'}';

             
  
    }
        
    /**
     * Displays a single ContestMain model.
     * @param integer $id
     * @return mixed
     */
    public function actionGetjsontracker($uuid, $code)
    {
 
            $this->connection = \Yii::$app->db;
 
            $model = new CampaignTracker();

            $model_review = $this->connection->createCommand("SELECT * FROM campaign_tracker WHERE uuid = '$uuid' AND code = '$code'");

            $get_model_review = $model_review->queryAll();

            $event = \yii\helpers\Json::encode($get_model_review, 320); 

                echo '{"items":'. $event .'}';

             
  
    } 

            /**
     * Displays a single ContestMain model.
     * @param integer $id
     * @return mixed
     */
    public function actionCreatenewtracker($uuid, $code, $user_id)
    {
 
            $this->connection = \Yii::$app->db;
 
            $model = new NewCampaignTracker();

            $model->uuid = $uuid;
            $model->code = $code;
            $model->user_id = $user_id;
            $model->total_view = 1;

                if ($model->createnew()) {
                    return ['newTracker' => 'OK'];
                }else {
                    return ['newTracker' => 'NOT OK'];
            }

             
  
    } 

    /**
     * Displays a single ContestMain model.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdatetrackercounter($row_id,$totalView)
    {
 
            $this->connection = \Yii::$app->db;
 
            $model = new CampaignTracker();

            $command = $this->connection->createCommand("UPDATE campaign_tracker SET total_view = $totalView WHERE id = $row_id");

            $command->execute();

         return ['updateCounter' => 'OK'];  

             
  
    }             


   /* public function beforeAction($action)
    {
        if ($action->id === 'signup') {
            $this->enableCsrfValidation = false;
        }else {
             $this->enableCsrfValidation = true;
        }

        return parent::beforeAction($action);
    }*/
 

}