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
use common\models\Topup;

class CartController extends Controller
{
    public function actionAddPackage($id,$modelClass)
    {
        if($modelClass === 'Package' )
            $package = Package::findOne($id);
        else
            $package = Topup::findOne($id);
        return $package;
    }
}