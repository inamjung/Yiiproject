<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\data\ArrayDataProvider;
use kartik\grid\GridView;
?>
<div class="well">
    
</div>

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
