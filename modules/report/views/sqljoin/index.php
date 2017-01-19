<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\report\models\SqljoinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sqljoins';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sqljoin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sqljoin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cid',
            'pass',
            'fcttype_id',
            'colour_id',
            // 'hn',
            // 'an',
            // 'ptname',
            // 'ptage',
            // 'diage',
            // 'pps',
            // 'pain',
            // 'painnote',
            // 'cc',
            // 'pi',
            // 'bt',
            // 'pr',
            // 'rr',
            // 'bp',
            // 'drugallergy',
            // 'admit',
            // 'dc',
            // 'or',
            // 'ordate',
            // 'disease',
            // 'receive',
            // 'address',
            // 'ptcate',
            // 'phone',
            // 'hossub',
            // 'tra',
            // 'retng',
            // 'retfo',
            // 'colobag',
            // 'lesion',
            // 'lesioncare',
            // 'recov',
            // 'recovcare',
            // 'oxygen',
            // 'lr01',
            // 'lr02',
            // 'lr03',
            // 'lr04',
            // 'lr05',
            // 'lr06',
            // 'lr07',
            // 'lr08',
            // 'lr09',
            // 'lr10',
            // 'lrl01',
            // 'lrl02',
            // 'lrl03',
            // 'lrl04',
            // 'lrl05',
            // 'lrl06',
            // 'lrl07',
            // 'lrl08',
            // 'lr',
            // 'lrl09',
            // 'lrl10',
            // 'lrl11',
            // 'lrl12',
            // 'lrl13',
            // 'other',
            // 'appdate',
            // 'doctorapp',
            // 'appdate2',
            // 'doctorapp2',
            // 'appdate3',
            // 'doctorapp3',
            // 'senddate',
            // 'windpipe',
            // 'insulin',
            // 'equip',
            // 'depart',
            // 'hosin',
            // 'officer',
            // 'confirm',
            // 'confirmfct',
            // 'send',
            // 'okcase',
            // 'birthday',
            // 'tmbpart',
            // 'sex',
            // 'bloodgrp',
            // 'pttype',
            // 'moopart',
            // 'bw',
            // 'height',
            // 'age',
            // 'vstdate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
