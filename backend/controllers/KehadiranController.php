<?php

namespace backend\controllers;

use Yii;
use common\models\Kehadiran;
use common\models\KehadiranSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KehadiranController implements the CRUD actions for Kehadiran model.
 */
class KehadiranController extends Controller
{
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
     * Lists all Kehadiran models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KehadiranSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kehadiran model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Kehadiran model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Kehadiran;


        if (!empty($_POST)) {

        
            $count = count($_POST['hitung']);

            for ($i= 1; $i <= $count; $i++) { 
                $model = new Kehadiran;
                  if (!empty($_POST)) {
                    $model->user_id = $_POST['Kehadiran']['user_id'][$i];
                    $model->status = $_POST['Kehadiran']['status'][$i];
                    $model->keterangan = $_POST['Kehadiran']['keterangan'][$i];
                    $model->tanggal = date('Y-m-d H:i:s');
                    $model->mentor_id = $_POST['Kehadiran']['mentor_id'];
                    $model->save();
                }
            }
//die();
        


       return $this->redirect(['view', 'id' => $model->kehadiran_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Kehadiran model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kehadiran_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Kehadiran model.
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
     * Finds the Kehadiran model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Kehadiran the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kehadiran::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
