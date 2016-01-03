<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;

?>

<div class="customer-form">
    <?php $form = ActiveForm::begin([
        'enableClientValidation' => false,
        'enableAjaxValidation' => true,
        'validateOnChange' => true,
        'validateOnBlur' => false,
        'options' => [
            'enctype' => 'multipart/form-data',
            'id' => 'dynamic-form'
        ]
    ]); ?>

<div class="materi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'links')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'user_id')->hiddenInput(['value'=>Yii::$app->user->id])->label(false) ?>
    <?= $form->field($model, 'tgl_input')->hiddenInput(['value'=>date('Y-m-d')])->label(false) ?>

     <?php echo $form->field($model, 'status')->dropDownList(['1' => 'Aktif ', '2' => 'Draf']); ?>
<div class="padding-v-md">
        <div class="line line-dashed"></div>
    </div>

    <?= $this->render('_form_file', [
        'form' => $form,
        'model' => $model,
        'file' => $file
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
