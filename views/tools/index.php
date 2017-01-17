<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ToolsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tools';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tools-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tools', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'formatter'=>['class'=>'yii\i18n\Formatter','nullDisplay'=>'-'],
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'name',
            
            [
                'attribute'=>'company_id',
                'value'=>'company.name'
            ],
            [
                'attribute'=>'tooltype_id',
                'value'=>'tooltype.name'
            ],
            [
                'attribute'=>'department_id',
                'value'=>'tooldep.name'
            ],
            
            
            
             'price',
             'buy_date',
             'picture',
             'exp_date',
             'use',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
