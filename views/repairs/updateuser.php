<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Repairs */

$this->title = 'แก้ไขรายการ: ' . $model->repairtool->name;
$this->params['breadcrumbs'][] = ['label' => 'Repairs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="repairs-update">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <div class="panel panel-warning">
        <div class="panel-heading"><i class="glyphicon glyphicon-edit"></i> แก้ไขการส่งซ่อม</div>
        <div class="panel-body">
            <?=
            $this->render('_formuser', [
                'model' => $model,
                'tool' => $tool
            ])
            ?>
        </div>
    </div>
</div>
