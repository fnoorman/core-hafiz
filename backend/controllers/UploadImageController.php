<?php

namespace backend\controllers;

use Yii;
use yii\web\UploadedFile;
use backend\models\UploadForm;

class UploadImageController extends \yii\web\Controller
{
    public $layout = 'inspinia/columns-2';
    public function actionUpload()
    {
        $upload = new UploadForm();
        if (Yii::$app->request->isPost) {
            $upload->imageFile = UploadedFile::getInstance($upload, 'imageFile');
            if ($upload->upload()) {
                // file is uploaded successfully
                return;
            }
        }

        return $this->render('upload',['model'=>$upload]);
    }

}
