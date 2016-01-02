<?php

namespace backend\controllers;

use Yii;
use backend\models\User;
use common\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Kehadiran;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('daftar');
    }
    public function actionMentor()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionAnggota()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->anggota(Yii::$app->request->queryParams);

        return $this->render('anggota', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model2 = $this->findModel($id);
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
                    $model->mentor_id = $model2->id;
                    $model->save();
                }
            }
         return $this->redirect(['view', 'id' => $model->kehadiran_id]);
        } else {
            return $this->render('view', [
                'model' => $model,
                'model2' => $model2,
            ]);
        }
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model =new  User();

        if ($model->load(Yii::$app->request->post()) && $model->validate() ) {
            // print_r($_POST);
            // die();
            $pass = Yii::$app->security->generatePasswordHash($_POST['User']['password']);
            $model->password_hash = $pass ;
            $content = '
                    <center><img src="http://i.imgur.com/rkxzCKf.png"/></center><br/>
                    <h4 align="center">Sekolah Tinggi Terpadu Nurul Fikri ' . date('Y') . '</h4>
                    <hr/>
                    <p>Yth ' . $model->username . ',<br/>  
                    Dengan ini kami sampaikan password telah direset  sebagai berikut:<br/> 
                    Username : ' . $model->username . ' <br/>
                    Password :<b>' . $_POST['User']['password'] . '</b><br/>
                    Mohon lakukan penggantian password Anda setelah melakukan login. <hr/>
                    <h5 align="center">Developer By Hendra Aditya Wijaya Mentor Ilham Malik Ibrahim' . date('Y') . '</h5><br/>';
                    Yii::$app->mailer->compose("@common/mail/layouts/html", ["content" => $content])
                            ->setTo($_POST['User']['email'])
                            ->setFrom([$_POST['User']['email'] => 'Aplikasi Simpel Bapeten'])
                            ->setSubject('Ubah Kata Sandi')
                            ->setTextBody($_POST['User']['password'])
                            ->send();
                    $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

        public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->validate() ) {
            // print_r($_POST);
            // die();
            if(!empty($_POST['User']['password'])){
            $pass = Yii::$app->security->generatePasswordHash($_POST['User']['password']);
            $model->password_hash = $pass ;
            $content = '
                    <center><img src="http://i.imgur.com/rkxzCKf.png"/></center><br/>
                    <h4 align="center">Sekolah Tinggi Terpadu Nurul Fikri ' . date('Y') . '</h4>
                    <hr/>
                    <p>Yth ' . $model->username . ',<br/>  
                    Dengan ini kami sampaikan password telah direset  sebagai berikut:<br/> 
                    Username : ' . $model->username . ' <br/>
                    Password :<b>' . $_POST['User']['password'] . '</b><br/>
                    Mohon lakukan penggantian password Anda setelah melakukan login. <hr/>
                    <h5 align="center">Developer By Hendra Aditya Wijaya Mentor Ilham Malik Ibrahim' . date('Y') . '</h5><br/>';
                    Yii::$app->mailer->compose("@common/mail/layouts/html", ["content" => $content])
                            ->setTo($_POST['User']['email'])
                            ->setFrom([$_POST['User']['email'] => 'Aplikasi Simpel Bapeten'])
                            ->setSubject('Ubah Kata Sandi')
                            ->setTextBody($_POST['User']['password'])
                            ->send();
            }else{
                $model->password_hash = $model->password_hash; 
            }
                    $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    // public function actionUpdate($id)
    // {
    //     $model = $this->findModel($id);

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id]);
    //     } else {
    //         return $this->render('update', [
    //             'model' => $model,
    //         ]);
    //     }
    // }

    /**
     * Deletes an existing User model.
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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
