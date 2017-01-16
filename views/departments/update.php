<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Departments */

$this->title = 'Update Departments: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="departments-update">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->

    <div class="panel panel-warning">
        <div class="panel-heading"><h4><i class="glyphicon glyphicon-edit"></i> แก้ไขข้อมูลหน่วยงาน</h4></div>
        <div class="panel-body">
            <?=
            $this->render('_form', [
                'model' => $model,
            ])
            ?>
        </div>
    </div>
</div>
