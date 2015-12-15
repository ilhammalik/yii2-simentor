<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PenilaianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penilaian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'penilaian_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'tugas') ?>

    <?= $form->field($model, 'hafalan') ?>

    <?= $form->field($model, 'pemahaman') ?>

    <?php // echo $form->field($model, 'keaktifan') ?>

    <?php // echo $form->field($model, 'total_nilai') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
