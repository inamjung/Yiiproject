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

<!--    <p>
    <?= Html::a('Create Repairs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
    <div class="panel panel-danger">
        <div class="panel-heading"><i class="glyphicon glyphicon-list"></i> รายการซ่อมมาใหม่</div>
        <div class="panel-body">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                //'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'id',
                    //'createDate',
                    [
                        'attribute' => 'createDate',
                        'value' => function($model, $key) {
                            return DateThai($model->createDate);
                        }
                    ],
                    'repairdep.name',
                    //'datenotuse',
                    'repairtool.name',
                    'problem:ntext',
                    // 'stage',
                    // 'startdate',
                    // 'satatus',
                    // 'dateplan',
                    // 'remark:ntext',
                    // 'answer',
                    // 'enddate',
                    // 'user_id',                    
                    // 'updateDate',
                    // 'approve',
                    // 'engineer_id',
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'options' => ['style' => 'width:80px;'],
                        'template' => '<div class="btn-group btn-group-sm" role="group" aria-label="...">{update}</div>',
                        'buttons' => [
//                            'view' => function($url, $model, $key) {
//                                return Html::a('<i class="glyphicon glyphicon-search"></i> ', $url);
//                            },
                            'update' => function($url, $model, $key) {
                                return Html::a('<i class="glyphicon glyphicon-edit"></i> รับซ่อม', ['update', 'id' => $model->id],['class'=>'btn btn-info']);
                            },
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