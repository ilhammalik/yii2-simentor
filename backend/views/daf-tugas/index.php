<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DafTugasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Daf Tugas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daf-tugas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Daf Tugas'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
 <div class="row">
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' =>'daftar',
    ]) ?>

</div>
</div>
