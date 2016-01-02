<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DafTugas */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Daf Tugas',
]) . ' ' . $model->id_tugas;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daf Tugas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tugas, 'url' => ['view', 'id' => $model->id_tugas]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="daf-tugas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
