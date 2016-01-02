<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\KehadiranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kehadirans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kehadiran-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Kehadiran', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
 
            'anggota.nim',
          
            'anggota.full_name',
            'anggota.prodi',
            'tanggal',
            //'status',
            //membuat fungsi anonymous
            [
            'attribute' => 'Status Hadir',
            'value' => function ($data) {
                return \common\models\Kehadiran::Status($data->status);
            }
            ],
            'keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
