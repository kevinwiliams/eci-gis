<?php

namespace backend\controllers;

use Yii;
use backend\models\Gis;
use backend\models\GisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;

/**
 * GisController implements the CRUD actions for Gis model.
 */
class GisController extends Controller
{
    //var global $region = NULL;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Gis models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GisSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionRegion1()
    {
        $region = 1;
        $searchModel = new GisSearch();
        $query = (new Query())->from('ecc_gis_data')->where(['region' => 1, 'latlng'=>NULL]); 
            
        $dataProvider = $searchModel->searchregion(Yii::$app->request->queryParams, $region);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'region'=> $region,
        ]);
    }

    public function actionRegion2()
    {
        $region = 2; 
        $searchModel = new GisSearch();            
        $dataProvider = $searchModel->searchregion(Yii::$app->request->queryParams, $region);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'region'=>$region,
        ]);
    }
    public function actionRegion3()
    {
        $region = 3; 
        $searchModel = new GisSearch();            
        $dataProvider = $searchModel->searchregion(Yii::$app->request->queryParams, $region);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'region'=>$region,
        ]);
    }
    public function actionRegion4()
    {
        $region = 4; 
        $searchModel = new GisSearch();            
        $dataProvider = $searchModel->searchregion(Yii::$app->request->queryParams, $region);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'region'=>$region,
        ]);
    }
    public function actionRegion5()
    {
        $region = 5; 
        $searchModel = new GisSearch();            
        $dataProvider = $searchModel->searchregion(Yii::$app->request->queryParams,$region);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'region'=>$region,
        ]);
    }
    public function actionRegion6()
    {
        $region = 6; 
        $searchModel = new GisSearch();            
        $dataProvider = $searchModel->searchregion(Yii::$app->request->queryParams, $region);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'region'=>$region,
        ]);
    }

    /**
     * Displays a single Gis model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
            //'region'=>$region,
        ]);
    }

    /**
     * Creates a new Gis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Gis();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->gis_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Gis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->gis_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'region'=>$region,
            ]);
        }
    }

    /**
     * Deletes an existing Gis model.
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
     * Finds the Gis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Gis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Gis::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
