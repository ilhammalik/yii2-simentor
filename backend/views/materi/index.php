<?php

use yii\helpers\Html;
use fedemotta\datatables\DataTables;
/* @var $this yii\web\View */
/* @var $searchModel common\models\MateriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Daftar Materi');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Tambah Materi'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


<?php
    $searchModel = new \common\models\MateriSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
?>
<?= DataTables::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

            'judul:ntext',
            'links:ntext',
            'tgl_input',
            'user_id',
             'status',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]);?>

</div>
