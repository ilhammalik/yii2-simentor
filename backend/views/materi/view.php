<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Materi */

$this->title = $model->id_materi;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Materis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id_materi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id_materi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_materi',
            'judul:ntext',
            'links:ntext',
            'tgl_input',
            'user_id',
            'status',
        ],
    ]) ?>

</div>
