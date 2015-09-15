<?php
/**
 * Created by PhpStorm.
 * User: Fahmy
 * Date: 9/15/15
 * Time: 10:55 AM
 */

namespace common\modules\api\controllers;

use yii\rest\Controller;
use common\models\Package;

class CartController extends Controller
{
    public function actionAddPackage($id)
    {
        $package = Package::findOne($id);
        $session = \Yii::$app->session;
        $isLoggedIn = true;
        if(\Yii::$app->user->isGuest)
        {
            $isLoggedIn = false;
        }
        else
        {
            if(!$session->isActive)
            {
                $session->open();
            }

        }
        $result = ['session'=>$session,'data'=>$package,'isLoggedIn'=> $isLoggedIn];
        return $result;
    }
}