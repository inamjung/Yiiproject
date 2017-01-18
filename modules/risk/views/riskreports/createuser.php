<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\risk\models\Riskreports */

$this->title = 'Create Riskreports';
//$this->params['breadcrumbs'][] = ['label' => 'Riskreports', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riskreports-create">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <div class="panel panel-primary">
        <div class="panel-heading"> เขียนรายงานความเสี่ยง</div>
        <div class="panel-body">
          <?=
    $this->render('_formuser', [
        'model' => $model,
        'programe' => [],
        'risktype' => [],
        'userrisk' => [],
    ])
    ?>  
        </div>
    </div>
</div>
