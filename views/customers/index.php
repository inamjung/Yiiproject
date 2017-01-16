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

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'addr',
            't',
            'a',
            // 'c',
            // 'birthday',
            // 'cid',
            // 'p',
            // 'tel',
            // 'work',
            // 'department_id',
            // 'group_id',
            // 'position_id',
            // 'interest',
            // 'avatar',
            // 'fb',
            // 'line',
            // 'email:email',
            // 'createdate',
            // 'updatedate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
