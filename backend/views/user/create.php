<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\User */

<<<<<<< HEAD
$this->title = 'Tambah Pengguna';
=======
$this->title = 'Create User';
>>>>>>> origin/prod
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
