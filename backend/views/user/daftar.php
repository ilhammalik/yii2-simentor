<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Akun Simentor';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>
    <div class="pull-left">
            <button type="button" class="btn btn-primary">Daftar Mentor</button>
    </div>
      <div class="pull-right">
            <button type="button" class="btn btn-primary">Daftar Anggota</button>
    </div>

</div>
