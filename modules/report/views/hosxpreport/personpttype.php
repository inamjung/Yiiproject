<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\data\ArrayDataProvider;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\widgets\Select2;
?>
<?php 
    $form = ActiveForm::begin(['method'=>'get',
        'action'=> Url::to(['hosxpreport/personpttype'])
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
            <?php
                $a = ['10'=>'จ่ายสด','89'=>'ทอง30บาท'];
                //$a = ArrayHelper::map(app\modules\risk\models\Clinics::find()->all(), 'id', 'name');
               echo kartik\widgets\Select2::widget([
                   'name'=>'pttype',
                   'data'=> $a,
                   'value'=>$pttype,
                   'size'=>  Select2::MEDIUM,
                   'options'=>[
                       'placeholder'=>'<--ระบุสิทธิ์-->'
                   ],
                   'pluginOptions'=>[
                       'allowClear'=>true
                   ]
               ])
                       
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
            'attribute' => 'hn',
            'header'=>'HN'
        ],
        [
            'attribute' => 'pname',
             'header'=>'คำนำหน้า'
        ],
        [
            'attribute' => 'fname',
             'header'=>'ชื่อ'
        ],
        [
            'attribute' => 'lname',
             'header'=>'นามสกุล'
        ],
        [
            'attribute' => 'pdx',
             'header'=>'รหัสโรค'
        ],
        [
            'attribute' => 'icdname',
             'header'=>'ชื่อโรค'
        ],
        [
            'attribute' => 'vstdate',
             'header'=>'วันที่รับบริการ'
        ],
        
        [
            'attribute' => 'pttype',
             'header'=>'สิทธิ์'
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
