<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\data\ArrayDataProvider;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\widgets\Select2;
use miloschuman\highcharts\Highcharts;
?>
<?php 
    $form = ActiveForm::begin(['method'=>'get',
        'action'=> Url::to(['hosxpreport/opddiag'])
        ])
?>
<div class="well">
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
             <?php
        echo yii\jui\DatePicker::widget([
            'name' => 'date1',
            'value' => $date1,
            'language' => 'th',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ],
            'options'=>[
                'class'=>'form-control'
            ],
        ]);
        ?>        
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3">
             <?php
        echo yii\jui\DatePicker::widget([
            'name' => 'date2',
            'value' => $date2,
            'language' => 'th',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ],
            'options'=>[
                'class'=>'form-control'
            ],
        ]);
        ?>        
        </div>        
        <div class="col-xs-3 col-sm-3 col-md-3">
            <button class="btn btn-warning"> ประมวลผล</button>
        </div>        
    </div>
</div>
<?php ActiveForm::end()?>
<?php

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
        [
            'attribute' => 'pdx',
            'header'=>'รหัสโรค'
        ],
        [
            'attribute' => 'icdname',
             'header'=>'ชื่อโรค'
        ],
        [
            'attribute' => 'a',
             'header'=>'จำนวน',
            'format'=>'raw',
            'value'=> function($model)use($date1,$date2,$pdx){
                return Html::a(Html::encode($model['a']),[
                    '/report/hosxpreport/subopddiag',
                    'pdx'=>$model['pdx'],
                    'date1'=>$date1,
                    'date2'=>$date2
                    
                ]);
            }
        ],
        
];

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
    'columns' => $gridColumns,
    'responsive' => true,
    'hover' => true,
    'striped' => false,
    'panel' => ['']
]);
?>

<?php
    echo Highcharts::widget([
   'options' => [
      'title' => ['text' => '๑๐ อันดับโรค'],
      'xAxis' => [
         'categories' => $icdname
      ],
      'yAxis' => [
         'title' => ['text' => 'จำนวนผู้ป่วย']
      ],
      'series' => [
         [
           'type'=>'column',  
           'name' => 'จำนวน',
           'data' => $a,
            'dataLabels'=>[
                'enabled'=>true
            ] 
             ],
         
      ]
   ]
]);
?>