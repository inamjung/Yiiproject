<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\data\ArrayDataProvider;
use yii\helpers\ArrayHelper;
use kartik\grid\GridView;
?>

<?php

function filter($col) {
    $filterresult = Yii::$app->request->getQueryParam('filterresult', '');
    if (strlen($filterresult) > 0) {
        if (strpos($col['result'], $filterresult) !== false) {
            return true;
        } else {
            return false;
        }
    } else {
        return true;
    }
}

$filteredData = array_filter($rawData, 'filter');
$searchModel = ['result' => Yii::$app->request->getQueryParam('$filterresult')];
$dataProvider = new ArrayDataProvider([
    'allModels' => $filteredData
        ]);
?>

<?php
$gridColumns=[
    ['class'=>'kartik\grid\SerialColumn'],    
    [
        'attribute'=>'vstdate',
        'label'=>'วันที่',
        'headerOptions'=>['class'=>'text-center'],
        'contentOptions'=>['class'=>'text-center']
    ],
    [
        'attribute'=>'hn',
        'label'=>'HN',
        'headerOptions'=>['class'=>'text-center']
    ],    
    [
        'attribute'=>'pdx',
        'label'=>'โรค',
        'headerOptions'=>['class'=>'text-center'],
        'contentOptions'=>['class'=>'text-center']
    ], 
    
    
];
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
    'columns' => $gridColumns,
    'responsive' => true,
    'hover' => true,
    'striped' => false,
    'floatHeader' => FALSE,
    'export'=>FALSE,    
    'panel' => [
        'type' => GridView::TYPE_INFO,
        'heading' => 'รายชื่ออันดับโรค OPD',
        //'before'=>'โรค = '.$rawData[0]['icdname'],
    ],
]);
?>





