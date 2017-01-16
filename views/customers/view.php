<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Customers */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-view">

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
        'attributes' => [
            'id',
            'name',
            'addr', 
            [
                'attribute'=>'c',
                'value'=>$model->cuschw->name
            ],
            [
                'attribute'=>'a',
                'value'=>$model->cusamp->name
            ],
            [
                'attribute'=>'t',
                'value'=>$model->custmb->name
            ],            
            'birthday',
            'cid',
            'p',
            'tel',
            'work',
             [
                'attribute'=>'group_id',
                'value'=>$model->cusdep->depgroup->name
            ],
            [
                'attribute'=>'department_id',
                'value'=>$model->cusdep->name
            ],
            [
                'attribute'=>'position_id',
                'value'=>$model->pos->name
            ],
            
            
            'position_id',
            'interest',
            'avatar',
            'fb',
            'line',
            'email:email',
            'createdate',
            'updatedate',
        ],
    ]) ?>

</div>
