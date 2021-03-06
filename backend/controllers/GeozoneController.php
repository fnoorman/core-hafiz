<?php

namespace backend\controllers;

use Yii;
use common\models\Geozone;
use common\models\GeozoneSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Country;
use common\models\Zonetogeozone;
/**
 * GeozoneController implements the CRUD actions for Geozone model.
 */
class GeozoneController extends Controller
{
    public $layout = 'inspinia/columns-2';
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
     * Lists all Geozone models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GeozoneSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Geozone model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $zoneModel = new Zonetogeozone();
        $allzonetogeozone = $model->zoneToGeozones;
        return $this->render('view', [
            'model' => $model,
            'zoneModel' => $zoneModel,
            'allzonetogeozone' => $allzonetogeozone,
        ]);
    }

    /**
     * Creates a new Geozone model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Geozone();
        if ($model->load(Yii::$app->request->post()) && $model->save())  {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Geozone model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Geozone model.
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
     * Finds the Geozone model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Geozone the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Geozone::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionAddZone()
    {

        $id = Yii::$app->request->post('zone')['id'];
        $zoneModel = new Zonetogeozone();
        if ($zoneModel->load(Yii::$app->request->post()) && $zoneModel->save()) {
            $zoneModel = new Zonetogeozone();
        }

        return $this->redirect(['view', 'id' => $id]);


    }

    public function actionDeleteZone($zone_to_geozone_id,$id)
    {
        Zonetogeozone::findOne($zone_to_geozone_id)->delete();
        return $this->redirect(['view', 'id' => $id]);

    }


}
