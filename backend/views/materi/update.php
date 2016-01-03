<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Materi */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Materi',
]) . ' ' . $model->id_materi;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Materis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_materi, 'url' => ['view', 'id' => $model->id_materi]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="materi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
