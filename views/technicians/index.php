<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TechniciansSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Technicians';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="technicians-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Technicians', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'speciallist',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
