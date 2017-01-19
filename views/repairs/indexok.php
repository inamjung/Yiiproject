<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
    <div class="panel panel-success">
        <div class="panel-heading"><i class="glyphicon glyphicon-list"></i> รายการซ่อมเสร็จแล้ว</div>
        <div class="panel-body">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                //'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    //'id',
                    'answer',
                    'repairdep.name',
                    //'datenotuse',
                    'repairtool.name',
                    'problem:ntext',
                    // 'stage',
                    // 'startdate',
                    // 'satatus',
                    // 'dateplan',
                    // 'remark:ntext',
                    // 'enddate',
                    // 'user_id',
                    // 'createDate',
                    // 'updateDate',
                    // 'approve',
                    // 'engineer_id',
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'options'=>['stype'=>'width: 80px;'],
                        'template'=>'<div class="btn btn-group btn group-sm role="group" aria-label="...">{view}</div>',
                        'buttons'=>[
                            'view'=> function($url,$model,$key){
                                return Html::a('<i class="glyphicon glyphicon-search"></i>',$url,['class'=>'btn btn-success']);
                            }
                        ]
                        ],
                ],
            ]);
            ?>
        </div>
    </div>
</div>
