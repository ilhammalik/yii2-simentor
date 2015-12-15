<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model common\models\Kehadiran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kehadiran-form">

    <?php $form = ActiveForm::begin(); ?>
	 <table class="table" width="100%">
	 <tr>
	 	<td>Nama Ustadz</td>
	 	<td>
	 		<?php
	 		$data =  ArrayHelper::map(\common\models\User::find()->where('status_pengguna = 1')->asArray()->all(), 'id','full_name');
	 		echo $form->field($model, 'mentor_id')->widget(Select2::classname(), [
   					 'data' => $data,
   					 'language' => 'id',
  				     'options' => ['placeholder' => 'Pilih Mentor'],
  				     'pluginOptions' => [
       				 'allowClear' => true
   					 ],
			])->label(false);
			?>
		</td>
	 </tr>
	 
 	<tr>
 		<td>No</td>
 		<td>Nama</td>
 		<td>NIM</td>
 		<td>Prodi</td>
 		<td>Status</td>
 		<td>Keterangan</td>
 	</tr>
    <?php
    $hadir = \common\models\User::find()->where('status_pengguna = 2')->all();
    $no = 1;
    foreach ($hadir as $key ) { ?>
   
    	<tr>
    		<td><?= $no ?></td>
    		<td>
    			<?= $key->full_name ?> 
    			<?= $form->field($model, "user_id[{$no}]")->hiddenInput(['id'=>$no,'value'=>$key->id])->label(false) ?>
    		</td>
    		<td><?= $key->nim ?></td>
    		<td><?= $key->prodi ?></td>
    		<td><?php echo $form->field($model, "status[{$no}]")->dropDownList(['1' => 'Hadir', '2' => 'Tidak Hadir'],['id'=>$no,'prompt'=>'Pilih Status Kehadiran'])->label(false); ?></td>
    		<td> <?= $form->field($model, "keterangan[{$no}]")->textInput(['maxlength' => true,'id'=>$no])->label(false) ?></td>
    	</tr>


		 <input  name="hitung[]" value="<?= $no ?>" type="hidden">

 	 <?php $no++;  } ?>
  
    </table>
   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
