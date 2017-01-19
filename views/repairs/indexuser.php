<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RepairsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Repairs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repairs-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-pencil"></i> เขียนส่งซ่อม', ['createuser'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-list"></i> รายการซ่อมของเรา</div>
        <div class="panel-body">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
                'hover' => true,
                'striped' => false,
                //'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    // 'id',
                    //'department_id',
                    //'datenotuse',
                    'satatus',
                    [
                        'attribute' => 'createDate',
                        'value' => function($model, $key) {
                            return DateThai($model->createDate);
                        }
                    ],                   
                    [
                        'attribute'=>'tool_id',
                        'value'=>'repairtool.name'
                    ],
                    'problem:ntext',
                    'remark:ntext',
                    'answer',
                    // 'stage',
                    // 'startdate',            
                    // 'dateplan',  
                    // 'enddate',
                    // 'user_id',
                    // 'createDate',
                    // 'updateDate',
                    // 'approve',
                    // 'engineer_id',
                   // ['class' => 'yii\grid\ActionColumn'],
                    [
                'class' => 'yii\grid\ActionColumn',
                'options'=>['style'=>'width:120px;'],
                'template'=>'<div class="btn-group btn-group-sm" role="group" aria-label="...">{view}{update}</div>',                
                'buttons'=>[                    
                    'view'=>function($url,$model,$key){
                        return Html::a('<i class="glyphicon glyphicon-search"></i> ',$url,['class'=>'btn btn-info']);
                    }, 
                    'update'=>function($url,$model,$key){
                        return Html::a('<i class="glyphicon glyphicon-edit"> </i>',['updateuser','id'=>$model->id],['class'=>'btn btn-info']);
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
            ]);
            ?>
        </div>
    </div>    
</div>
 <?php

        function DateThai($strDate) {
            $strYear = date("Y", strtotime($strDate)) + 543;
            $strMonth = date("n", strtotime($strDate));
            $strDay = date("j", strtotime($strDate));
            $strMonthCut = Array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
            $strMonthThai = $strMonthCut[$strMonth];
            $strYear = substr($strYear, 2, 2);
            return "$strDay $strMonthThai $strYear";
        }

        // echo DateThai(date('Y-m-d'));
        ?>     