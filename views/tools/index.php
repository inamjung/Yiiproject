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
               'attribute'=> 'picture',  
              'format' => 'html',
                'value' => function($model) {
                    return html::img('toolpicture/' . $model->picture, ['class' => 'thumbnail-responsive',
                                'style' => 'width: 80px;']);
                }                    
            ],
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
            [
                'attribute'=>'buy_date',
                'value'=>function($model){
                    return DateThai($model->buy_date);
                }
            ],            
                      
//            [
//                'attribute'=>'exp_date',
//                'value'=>function($model){
//                    return DateThai($model->exp_date);
//                }
//            ],
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

<?php

function DateThai($strDate)
	
{
	//echo $strDate;
	if(empty($strDate) || $strDate=='0000-00-00'){
		$strDate=date('Y-m-d');

	}
	if(count(explode(" ",$strDate)) >1){
		$d = explode(" ",$strDate);
		$d2 = explode("-", $d['0']);

	}else{
		$d2 = explode("-", $strDate);
	}
	

	date_default_timezone_set('Asia/Bangkok');

	$strYear = date("Y",strtotime($strDate))+543;
	$strMonth= $d2[1];//date("n",strtotime($strDate));
	$strDay= $d2[2];//date("j",strtotime($strDate));

	$strMonthCut = Array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
	$strMonthThai=$strMonthCut[$strMonth-1];
	return "$strDay $strMonthThai $strYear";
}
       // echo DateThai(date('Y-m-d'));
?>             