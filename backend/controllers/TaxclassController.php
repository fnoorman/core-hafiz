<?php

namespace backend\controllers;

use Yii;
use common\models\Taxclass;
use common\models\TaxclassSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Taxrule;

/**
 * TaxclassController implements the CRUD actions for Taxclass model.
 */
class TaxclassController extends Controller
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
     * Lists all Taxclass models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TaxclassSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Taxclass model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $classtaxRule = new Taxrule;
        $alltaxrule = $model->taxRules;
        return $this->render('view', [
            'model' => $model,
            'classtaxRule' => $classtaxRule,
            'alltaxrule' => $alltaxrule,
        ]);
    }

    /**
     * Creates a new Taxclass model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Taxclass();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Taxclass model.
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
     * Deletes an existing Taxclass model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionAddRule()
    {
        $id = Yii::$app->request->post('tax')['id'];
        $classtaxRule = new Taxrule();
        if ($classtaxRule->load(Yii::$app->request->post()) && $classtaxRule->save()) {
            $classtaxRule = new Taxrule();
        }
        return $this->redirect(['view', 'id' => $id]);
    }

    public function actionDeleteRule($tax_class_id,$id)
    {
        Taxrule::findOne($tax_class_id)->delete();
        return $this->redirect(['view', 'id' => $id]);

    }

    /**
     * Finds the Taxclass model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Taxclass the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Taxclass::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
