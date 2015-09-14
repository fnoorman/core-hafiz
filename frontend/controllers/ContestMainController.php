<?php

namespace frontend\controllers;

use Yii;
use frontend\models\ContestForm;
use common\models\Contest;
use common\models\ContestSearch;
use common\models\ContestMain;
use common\models\ContestMainSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;
use yii\web\UploadedFile;

/**
 * ContestmainController implements the CRUD actions for ContestMain model.
 */
class ContestmainController extends Controller
{
	public $layout = 'columns-2';
	public $connection;

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all ContestMain models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ContestMainSearch();
        $model = new ContestForm();
       
        

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

       // var_dump(Yii::$app->request->queryParams);

       // exit;

        
       

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            
        ]);

    	 
    }

    /**
     * Displays a single ContestMain model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
    	//$event = ""; 
    	//$model_main = new ContestMain();

    	//$query = ContestMain::find()->where(['user_id' => Yii::$app->user->id])->one();
    	 /*if($query) {
                $queryContest = $query->contest;           
                $event = \yii\helpers\Json::encode($queryContest);
            }*/

        $contestDetail = new Contest();
        if ($contestDetail->load(Yii::$app->request->post()) && $contestDetail->save()) {
           
        } 
        return $this->render('view', [
            'model' => $this->findModel($id),
            //'jsonData' => $event,
            'contestDetail' => $contestDetail,
        ]);
    }

    /**
     * Displays a single ContestMain model.
     * @param integer $id
     * @return mixed
     */
    public function actionGetjsoncontest()
    {

        if (!\Yii::$app->user->isGuest) 
        {

            //echo " user id -- >".Yii::$app->user->id; exit;
            //$cur_userID = $this->user->getId();
            $model = new Contest();
            $model_main = new ContestMain();

            $query = ContestMain::find()->where(['user_id' => Yii::$app->user->id])->one();

            echo "<pre>";
            print_r($query);
            echo "</pre>";
            exit;
            if($query) {

                $queryContest = $query->contest;
                $event = \yii\helpers\Json::encode($queryContest, 320); 
                echo '{"items":'. $event .'}';
            }
            

 
            //return $this->render('contestView', ['jsonData' => $event, 'cur_userID'=>Yii::$app->user->id]);
        } 
    }

    /**
     * Displays a single ContestMain model.
     * @param integer $id
     * @return mixed
     */
    public function actionGetjsoncontest_specific($contest_id)
    {

        if (!\Yii::$app->user->isGuest) 
        {
        	$this->connection = \Yii::$app->db;

            //echo " user id -- >".Yii::$app->user->id; exit;
            //$cur_userID = $this->user->getId();
            $model = new Contest();
            $model_main = new ContestMain();

            $query = ContestMain::find()->where(['user_id' => Yii::$app->user->id])->one();

            $model_contest = $this->connection->createCommand("SELECT * FROM contest where contest_id = $contest_id");

			$get_model_contest = $model_contest->queryAll();

			$event = \yii\helpers\Json::encode($get_model_contest, 320); 

                echo '{"items":'. $event .'}';

            /*echo "<pre>";
            print_r($query);
            echo "</pre>";*/
           /* exit;
            if($query) {

                $queryContest = $query->contest;
                $event = \yii\helpers\Json::encode($queryContest, 320); 
                echo '{"items":'. $event .'}';
            }*/
 
        } 
    }

    /**
     * Creates a new ContestMain model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ContestForm();

        if ($model->load(Yii::$app->request->post())) {

            $model->file_image = UploadedFile::getInstance($model, 'file_image');

            $model->upload();
          
                return $this->redirect(['view', 'id' => $model->_id]);
           
                //if ($model->upload()) {
                // file is uploaded successfully
                //return;
               // }

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ContestMain model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);


        if ($model->load(Yii::$app->request->post())) {
            return $this->redirect(['view', 'id' => $model->id]);
           // $model->file_image = UploadedFile::getInstance($model, 'file_image');

            //$model->upload();
          
               // return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ContestMain model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ContestMain model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ContestMain the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ContestMain::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
