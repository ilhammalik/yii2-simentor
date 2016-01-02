<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DafTugas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="daf-tugas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'desc')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'url')->textInput(['rows' => 6]) ?>
    
	<?= $form->field($model, 'tgl_max')->widget(\yii\jui\DatePicker::classname(), [
	    //'language' => 'ru',
	    'dateFormat' => 'yyyy-MM-dd',
	]) ?>
    <?php echo $form->field($model, 'status')->dropDownList(['1' => 'Tugas ', '2' => 'Kuisoner']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
