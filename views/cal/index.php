<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cal_no',
            'date',
            'description',
            'next',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
