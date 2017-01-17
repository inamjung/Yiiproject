<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tools */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tools', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tools-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'formatter'=>['class'=>'yii\i18n\Formatter','nullDisplay'=>'-'],
        'attributes' => [
            //'id',
            'name',
            
            [
                'attribute'=>'company_id',
                'value'=>$model->company->name
            ],
            [
                'attribute'=>'tooltype_id',
                'value'=>$model->tooltype->name
            ],
            [
                'attribute'=>'department_id',
                'value'=>$model->tooldep->name
            ],
            
            
            'price',
            'buy_date',
            'picture',
            'exp_date',
             [
                'attribute'=>'use',
                'format'=>'html',
                //'value'=>$model->use =='1' ? "ใช้งานอยู่" : "แทงจำหน่าย",
                'value'=>$model->use =='1' ? "<i class=\"glyphicon glyphicon-ok\"></i>" : "<i class=\"glyphicon glyphicon-remove\"></i>"
            ],
            
        ],
    ]) ?>

</div>
