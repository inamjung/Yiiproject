<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\risk\models\Riskreports */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Riskreports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riskreports-view">

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
//            'id',
            'date',
            'clinic_id',
            'programe_id',
            'risktype_id',
            'name:ntext',
            'description:ntext',
            'namecode',
            'sufferer',
            'edit',
            'user_id_report',
            'department_id',
            'department_id_risk',
            'edit_begin:ntext',
            'money',
            'moneydetail',
            'how',
            'review',
            'reviewdate',
            'reviewdetail:ntext',
            'reviewteam',
            'approve',
            'qaapprove',
            'review_in',
            'review_by',
            'review_dateline',
            'qateam',
//            'username',
//            'covenant',
//            'docs:ntext',
//            'ref',
//            'complete',
            'createDate',
//            'updateDate',
        ],
    ]) ?>

</div>
