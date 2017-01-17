<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Repairs */

$this->title = 'Create Repairs';
$this->params['breadcrumbs'][] = ['label' => 'Repairs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repairs-create">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <div class="panel panel-success">
        <div class="panel-heading"><i class="glyphicon glyphicon-pencil"></i> บันทึกส่งซ่อม</div>
        <div class="panel-body">
            <?=
            $this->render('_formuser', [
                'model' => $model,
                'tool'=>[]
            ])
            ?>
        </div>
    </div>
</div>
