<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = 'Update Users: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-update">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <div class="panel panel-info">
        <div class="panel-heading"> แก้ไขข้อมูลส่วนตัว</div>
        <div class="panel-body">
            <?=
            $this->render('_formusers', [
                'model' => $model,
            ])
            ?>
        </div>
    </div>
</div>
