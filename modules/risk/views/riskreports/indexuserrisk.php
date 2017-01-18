<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\risk\models\RiskreportsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Riskreports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riskreports-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('เขียนความเสี่ยง', ['createuser'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date',
            'clinic_id',
            'programe_id',
            'risktype_id',
            // 'name:ntext',
            // 'description:ntext',
            // 'namecode',
            // 'sufferer',
            // 'edit',
            // 'user_id_report',
            // 'department_id',
            // 'department_id_risk',
            // 'edit_begin:ntext',
            // 'money',
            // 'moneydetail',
            // 'how',
            // 'review',
            // 'reviewdate',
            // 'reviewdetail:ntext',
            // 'reviewteam',
            // 'approve',
            // 'qaapprove',
            // 'review_in',
            // 'review_by',
            // 'review_dateline',
            // 'qateam',
            // 'username',
            // 'covenant',
            // 'docs:ntext',
            // 'ref',
            // 'complete',
            // 'createDate',
            // 'updateDate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
