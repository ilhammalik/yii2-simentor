<?php

namespace backend\controllers;

use Yii;
use common\models\Penilaian;
use common\models\PenilaianSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PenilaianController implements the CRUD actions for Penilaian model.
 */
class PenilaianController extends Controller
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
     * Lists all Penilaian models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PenilaianSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Penilaian model.
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
     * Creates a new Penilaian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Penilaian;

if (!empty($_POST)) {

        
      // print_r($_POST).'<br/>';
      // die();
            $count = count($_POST['hitung']);

            for ($i= 1; $i <= $count; $i++) { 
                $model = new Penilaian;
                  if (!empty($_POST)) {
                    $model->user_id = $_POST['Penilaian']['user_id'][$i];
                    $model->tugas = $_POST['Penilaian']['tugas'][$i];
                    $model->hafalan = $_POST['Penilaian']['hafalan'][$i];
                    $model->pemahaman = $_POST['Penilaian']['pemahaman'][$i];
                    $model->keaktifan = $_POST['Penilaian']['keaktifan'][$i];
                     $model->total_nilai = $_POST['Penilaian']['total_nilai'][$i];
                     $model->keterangan = $_POST['Penilaian']['keterangan'][$i];
                    $model->save();
                }
            }
//die();
        


       return $this->redirect(['view', 'id' => $model->penilaian_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Penilaian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->penilaian_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Penilaian model.
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
     * Finds the Penilaian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Penilaian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Penilaian::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
