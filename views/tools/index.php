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
        'hover'=>true,
        'striped'=>false,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            
            [
               'attribute'=>'name',
               'contentOptions'=>['class'=>'text-left','style'=>'width:210px;']
            ],
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
             [
                    'class' => 'kartik\grid\BooleanColumn',
                    'attribute' => 'use',
                    'vAlign' => 'middle',                     
                ],     
             //'use',

            //['class' => 'yii\grid\ActionColumn'],
             [
                'class' => 'yii\grid\ActionColumn',
                'options'=>['style'=>'width:80px;'],
                'template'=>'<div class="btn-group btn-group-sm" role="group" aria-label="...">{view}{update}</div>',                
                'buttons'=>[                    
                    'view'=>function($url,$model,$key){
                        return Html::a('<i class="glyphicon glyphicon-search"></i> รายละเอียด',$url,['class'=>'btn btn-info']);
                    }, 
                    'update'=>function($url,$model,$key){
                        return Html::a('<i class="glyphicon glyphicon-edit"> แก้ไขข้อมูล</i>',$url,['class'=>'btn btn-warning']);
                    },
//                    'delete'=>function($url,$model,$key){
//                         return Html::a('<i class="glyphicon glyphicon-trash"></i>', $url,[
//                                'title' => Yii::t('yii', 'Delete'),
//                                'data-confirm' => Yii::t('yii', 'คุณต้องการลบไฟล์นี้?'),
//                                'data-method' => 'post',
//                                'data-pjax' => '0',
//                                'class'=>'btn btn-default'
//                                ]);
//                    }
                ]
            ],       
        ],
    ]); ?>
</div>
