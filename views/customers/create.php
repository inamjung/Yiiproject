<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Customers */

$this->title = 'Create Customers';
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-create">

   <div class="panel panel-primary">
        <div class="panel-heading"><h4><i class="glyphicon glyphicon-pencil"></i> บันทึกข้อมูลพนักงาน</h4></div>
        <div class="panel-body">
            <?=
            $this->render('_form', [
                'model' => $model,
                'ch'=>[],
                'am'=>[],
                'depart'=>[]
            ])
            ?>
        </div>
    </div>
</div>
