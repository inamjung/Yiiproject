<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\data\ArrayDataProvider;
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

$b = $dataProvider->getModels();
?>
<?php 
    $form = ActiveForm::begin(['method'=>'get',
        'action'=> Url::to(['hosxpreport/ptname'])
        ])
?>
<div class="well">
    <div class="row">
        <form method="POST">       
        <div class="row">
            <div class="col-xs-4 col-sm-4 col-md-4">            
                <input type="text" name="cid"  class="form-control" placeholder="...ระบุเลขประชาชน..">
            </div> 
            <div class="col-xs-2 col-sm-2 col-md-2">
                <button class='btn btn-danger'>ประมวลผล</button>
            </div>
        </div>
    </form>       
    </div>
</div>
<?php ActiveForm::end()?>

<?php
if (count($b) == 0) {
    echo "<div class='alert alert-success'>ยังไม่มีผลลัพธ์จากการค้นหาข้อมูล</div>";
    return;
}
?>

<?php

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    [
            'attribute' => 'cid',
             'header'=>'CID',
            'format'=>'raw',
            'value'=> function($model)use($cid){
                return Html::a(Html::encode($model['cid']),[
                    '/report/hosxpreport/insertptname',
                    'cid'=>$model['cid'],
                    'hn'=>$model['hn'],
                    'ptname'=>$model['ptname'],       
                ]);
            }
        ],
        [
            'attribute' => 'hn',
            'header'=>'HN'
        ],
        [
            'attribute' => 'ptname',
             'header'=>'ชื่อผู้ป่วย'
        ],
        
        
];

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
    'columns' => $gridColumns,
    'responsive' => true,
    'hover' => true,
    'striped' => false,
    'toolbar'=>[],
    'panel' => ['']
]);
?>
