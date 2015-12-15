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
            echo $form->field($model, 'user_id')->widget(Select2::classname(), [
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
        <td>NIM</td>
        <td>Nilai Tugas</td>
        <td>Nilai Hafalan</td>
        <td>Nilai Pemahaman</td>
        <td>Nilai Keaktifan</td>
        <td>Nilai Total</td>
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

            <td> <?= $form->field($model, "tugas[{$no}]")->textInput(['maxlength' => true,'id'=>'tugas'.$no])->label(false) ?></td>
            <td> <?= $form->field($model, "hafalan[{$no}]")->textInput(['maxlength' => true,'id'=>'hafalan'.$no])->label(false) ?></td>
            <td> <?= $form->field($model, "pemahaman[{$no}]")->textInput(['maxlength' => true,'id'=>'paham'.$no])->label(false) ?></td>
            <td> <?= $form->field($model, "keaktifan[{$no}]")->textInput(['maxlength' => true,'id'=>'aktif'.$no])->label(false) ?></td>
            <td> <?= $form->field($model, "total_nilai[{$no}]")->textInput(['maxlength' => true,'id'=>'total'.$no])->label(false) ?></td>
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

// <script type="text/javascript">

// var data = <?php json_encode(ArrayHelper::map(\common\models\penilaian::find()->asArray()->all(), 'penilaian_id','user_id','tugas','hafalan','pemahaman','keaktifan','total_nilai','keterangan'))  ?>
// JQuery.each(arr, function(i, val){

// });
//     $('#aktif').on('keyup', function(){

// //membuat variabel penjumlahan
//     var dat1 = parseInt($('#aktif').val());

// });

// </script>
<?php

$js = <<<js
//fungsi untuk nilai
$('#aktif1').on('keyup',function(){

    //membuat variabel penjumlahan
    var dat1 = parseFloat($('#tugas1').val()*0.15);
    var dat2 = parseFloat($('#hafalan1').val()*0.15);
    var dat3 = parseFloat($('#paham1').val()*0.50);
    var dat4 = parseFloat($('#aktif1').val()*0.20);

    var hasil = parseFloat(dat1+dat2+dat3+dat4);

    $('#total1').val(hasil);
});

$('#aktif2').on('keyup',function(){

    //membuat variabel penjumlahan
    var dat1 = parseFloat($('#tugas2').val()*0.15);
    var dat2 = parseFloat($('#hafalan2').val()*0.15);
    var dat3 = parseFloat($('#paham2').val()*0.50);
    var dat4 = parseFloat($('#aktif2').val()*0.20);

    var hasil = parseFloat(dat1+dat2+dat3+dat4);

    $('#total2').val(hasil);
});

$('#aktif3').on('keyup',function(){

    //membuat variabel penjumlahan
    var dat1 = parseFloat($('#tugas3').val()*0.15);
    var dat2 = parseFloat($('#hafalan3').val()*0.15);
    var dat3 = parseFloat($('#paham3').val()*0.50);
    var dat4 = parseFloat($('#aktif3').val()*0.20);

    var hasil = parseFloat(dat1+dat2+dat3+dat4);

    $('#total3').val(hasil);
});

$('#aktif4').on('keyup',function(){

    //membuat variabel penjumlahan
    var dat1 = parseFloat($('#tugas4').val()*0.15);
    var dat2 = parseFloat($('#hafalan4').val()*0.15);
    var dat3 = parseFloat($('#paham4').val()*0.50);
    var dat4 = parseFloat($('#aktif4').val()*0.20);

    var hasil = parseFloat(dat1+dat2+dat3+dat4);

    $('#total4').val(hasil);
});

$('#aktif5').on('keyup',function(){

    //membuat variabel penjumlahan
    var dat1 = parseFloat($('#tugas5').val()*0.15);
    var dat2 = parseFloat($('#hafalan5').val()*0.15);
    var dat3 = parseFloat($('#paham5').val()*0.50);
    var dat4 = parseFloat($('#aktif5').val()*0.20);

    var hasil = parseFloat(dat1+dat2+dat3+dat4);

    $('#total5').val(hasil);
});

$('#aktif6').on('keyup',function(){

    //membuat variabel penjumlahan
    var dat1 = parseFloat($('#tugas6').val()*0.15);
    var dat2 = parseFloat($('#hafalan6').val()*0.15);
    var dat3 = parseFloat($('#paham6').val()*0.50);
    var dat4 = parseFloat($('#aktif6').val()*0.20);

    var hasil = parseFloat(dat1+dat2+dat3+dat4);

    $('#total6').val(hasil);
});

$('#aktif7').on('keyup',function(){

    //membuat variabel penjumlahan
    var dat1 = parseFloat($('#tugas7').val()*0.15);
    var dat2 = parseFloat($('#hafalan7').val()*0.15);
    var dat3 = parseFloat($('#paham7').val()*0.50);
    var dat4 = parseFloat($('#aktif7').val()*0.20);

    var hasil = parseFloat(dat1+dat2+dat3+dat4);

    $('#total7').val(hasil);
});

$('#aktif8').on('keyup',function(){

    //membuat variabel penjumlahan
    var dat1 = parseFloat($('#tugas8').val()*0.15);
    var dat2 = parseFloat($('#hafalan8').val()*0.15);
    var dat3 = parseFloat($('#paham8').val()*0.50);
    var dat4 = parseFloat($('#aktif8').val()*0.20);

    var hasil = parseFloat(dat1+dat2+dat3+dat4);

    $('#total8').val(hasil);
});

$('#aktif9').on('keyup',function(){

    //membuat variabel penjumlahan
    var dat1 = parseFloat($('#tugas9').val()*0.15);
    var dat2 = parseFloat($('#hafalan9').val()*0.15);
    var dat3 = parseFloat($('#paham9').val()*0.50);
    var dat4 = parseFloat($('#aktif9').val()*0.20);

    var hasil = parseFloat(dat1+dat2+dat3+dat4);

    $('#total9').val(hasil);
});

$('#aktif10').on('keyup',function(){

    //membuat variabel penjumlahan
    var dat1 = parseFloat($('#tugas10').val()*0.15);
    var dat2 = parseFloat($('#hafalan10').val()*0.15);
    var dat3 = parseFloat($('#paham10').val()*0.50);
    var dat4 = parseFloat($('#aktif10').val()*0.20);

    var hasil = parseFloat(dat1+dat2+dat3+dat4);

    $('#total10').val(hasil);
});

$('#aktif11').on('keyup',function(){

    //membuat variabel penjumlahan
    var dat1 = parseFloat($('#tugas11').val()*0.15);
    var dat2 = parseFloat($('#hafalan11').val()*0.15);
    var dat3 = parseFloat($('#paham11').val()*0.50);
    var dat4 = parseFloat($('#aktif11').val()*0.20);

    var hasil = parseFloat(dat1+dat2+dat3+dat4);

    $('#total11').val(hasil);
});

$('#aktif12').on('keyup',function(){

    //membuat variabel penjumlahan
    var dat1 = parseFloat($('#tugas12').val()*0.15);
    var dat2 = parseFloat($('#hafalan12').val()*0.15);
    var dat3 = parseFloat($('#paham12').val()*0.50);
    var dat4 = parseFloat($('#aktif12').val()*0.20);

    var hasil = parseFloat(dat1+dat2+dat3+dat4);

    $('#total12').val(hasil);
});

$('#aktif13').on('keyup',function(){

    //membuat variabel penjumlahan
    var dat1 = parseFloat($('#tugas13').val()*0.15);
    var dat2 = parseFloat($('#hafalan13').val()*0.15);
    var dat3 = parseFloat($('#paham13').val()*0.50);
    var dat4 = parseFloat($('#aktif13').val()*0.20);

    var hasil = parseFloat(dat1+dat2+dat3+dat4);

    $('#total13').val(hasil);
});

$('#aktif14').on('keyup',function(){

    //membuat variabel penjumlahan
    var dat1 = parseFloat($('#tugas14').val()*0.15);
    var dat2 = parseFloat($('#hafalan14').val()*0.15);
    var dat3 = parseFloat($('#paham14').val()*0.50);
    var dat4 = parseFloat($('#aktif14').val()*0.20);

    var hasil = parseFloat(dat1+dat2+dat3+dat4);

    $('#total14').val(hasil);
});

$('#aktif15').on('keyup',function(){

    //membuat variabel penjumlahan
    var dat1 = parseFloat($('#tugas15').val()*0.15);
    var dat2 = parseFloat($('#hafalan15').val()*0.15);
    var dat3 = parseFloat($('#paham15').val()*0.50);
    var dat4 = parseFloat($('#aktif15').val()*0.20);

    var hasil = parseFloat(dat1+dat2+dat3+dat4);

    $('#total15').val(hasil);
});



js;
$this->registerJs($js);
?>