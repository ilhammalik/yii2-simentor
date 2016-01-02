<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DafTugas */

$this->title = Yii::t('app', 'Create Daf Tugas');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daf Tugas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daf-tugas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
