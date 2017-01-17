<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Repairs */

$this->title = $model->repairtool->name;
$this->params['breadcrumbs'][] = ['label' => 'Repairs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repairs-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['updateuser', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
            'department_id',
            'datenotuse',
            'tool_id',
            'problem:ntext',
            'stage',
            'startdate',
            'satatus',
            'dateplan',
            'remark:ntext',
            'answer',
            'enddate',
            'user_id',
            'createDate',
            'updateDate',
            'approve',
            'engineer_id',
        ],
    ]) ?>

</div>
