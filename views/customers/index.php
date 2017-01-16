<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i> เพิ่มข้อมูล', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-user"></i> ทะเบียนพนักงาน</div>
        <div class="panel-body">
            <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            [
                'attribute' => 'avatar',
                'format' => 'html',
                'value' => function($model) {
                    return html::img('avatars/' . $model->avatar, ['class' => 'thumbnail-responsive',
                                'style' => 'width: 80px;']);
                }
                    ],
                    'name',
                    'addr',
                    [
                        'attribute' => 'c',
                        'value' => 'cuschw.name',
                    ],
                    [
                        'attribute' => 'a',
                        'value' => 'cusamp.name',
                    ],
                    [
                        'attribute' => 't',
                        'value' => 'custmb.name',
                    ],
//             'birthday',
//             'cid',
//             'p',
//             'tel',
//             'work',
                    [
                        'attribute' => 'department_id',
                        'value' => 'cusdep.name',
                    ],
                    [
                        'attribute' => 'group_id',
                        'value' => function($model) {
                            return $model->cusdep->depgroup->name;
                        }
                    ],
                    [
                        'attribute' => 'position_id',
                        'value' => 'pos.name',
                    ],
//             'interest',
//             'avatar',
//             'fb',
//             'line',
//             'email:email',
//             'createdate',
//             'updatedate',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
            ?>
        </div>
    </div>    
</div>
