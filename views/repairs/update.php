<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Repairs */

$this->title = 'Update Repairs: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Repairs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="repairs-update">

    <div class="panel panel-warning">
        <div class="panel-heading"><i class="glyphicon glyphicon-pencil"></i> บันทึกรับแจ้งซ่อม</div>
        <div class="panel-body">

            <?=
            $this->render('_form', [
                'model' => $model,
                'tool' => $tool
            ])
            ?>

        </div>
    </div>
</div>
