<?php

namespace backend\controllers;

use Yii;
use common\models\Zonetogeozone;
use common\models\ZonetogeozoneSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ZonetogeozoneController implements the CRUD actions for Zonetogeozone model.
 */
class ZonetogeozoneController extends Controller
{
    public $layout = "inspinia/columns-2";
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
     * Lists all Zonetogeozone models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ZonetogeozoneSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Zonetogeozone model.
     * @param integer $id
     * @param integer $geo_zone_id
     * @return mixed
     */
    public function actionView($id, $geo_zone_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $geo_zone_id),
        ]);
    }

    /**
     * Creates a new Zonetogeozone model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Zonetogeozone();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'geo_zone_id' => $model->geo_zone_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Zonetogeozone model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $geo_zone_id
     * @return mixed
     */
    public function actionUpdate($id, $geo_zone_id)
    {
        $model = $this->findModel($id, $geo_zone_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'geo_zone_id' => $model->geo_zone_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Zonetogeozone model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $geo_zone_id
     * @return mixed
     */
    public function actionDelete($id, $geo_zone_id)
    {
        $this->findModel($id, $geo_zone_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Zonetogeozone model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $geo_zone_id
     * @return Zonetogeozone the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $geo_zone_id)
    {
        if (($model = Zonetogeozone::findOne(['id' => $id, 'geo_zone_id' => $geo_zone_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
