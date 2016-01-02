<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PenilaianSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penilaians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penilaian-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Penilaian', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'penilaian_id',
            'user_id',
            'anggota.nim',
          
            'anggota.full_name',
            'anggota.prodi',
            'tugas',
            'hafalan',
            'pemahaman',
            // 'keaktifan',
            // 'total_nilai',
            // 'keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
