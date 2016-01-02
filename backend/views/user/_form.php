<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

        </div>
        <div class="col-md-6">
        <?= $form->field($model, 'nim')->textInput() ?>
       <?php echo $form->field($model, 'prodi')->dropDownList(['1' => 'Teknik Informatika', '2' => 'Sistem Informasi']); ?>
        <?= $form->field($model, 'telepon')->textInput() ?>
        <?php echo $form->field($model, 'status_pengguna')->dropDownList(['1' => 'Mentor', '2' => 'Anggota']); ?>
        </div>
    </div>

    



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
