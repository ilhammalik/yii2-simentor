<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Materi */

$this->title = Yii::t('app', 'Tambah Materi');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Daftar Materi'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materi-create">
 <div class="row">
        <div class="col-md-2">
       
        	<?= $this->render('nav'); ?>
        </div>
        <div class="col-md-10">
        <h1><?= Html::encode($this->title) ?></h1>

		    <?= $this->render('_form', [
		        'model' => $model,
		        'model' => $model,
		        'file' => $file
		    ]) ?>

        </div>
    </div>
        
    </div>
    
</div>
