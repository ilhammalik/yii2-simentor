<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Penilaian */

$this->title = 'Update Penilaian: ' . ' ' . $model->penilaian_id;
$this->params['breadcrumbs'][] = ['label' => 'Penilaians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->penilaian_id, 'url' => ['view', 'id' => $model->penilaian_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penilaian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
