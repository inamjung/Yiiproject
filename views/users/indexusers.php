<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ข้อมูลส่วนตัว';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute'=>'avatar',
                'header'=>'รูปประจำตัว',
                'format'=>'html',
                'format' => 'html',
                'value' => function($model) {
                    return html::img('avatars/' . $model->avatar, ['class' => 'thumbnail-responsive',
                                'style' => 'width: 80px;']);
                }
            ],
            'username',
            'email:email',
//            'password_hash',
//            'auth_key',
            // 'confirmation_token',
            // 'confirmation_sent_at',
            // 'confirmed_at',
            // 'unconfirmed_email:email',
            // 'recovery_token',
            // 'recovery_sent_at',
            // 'blocked_at',
            // 'registered_from',
            // 'logged_in_from',
            // 'logged_in_at',
            // 'created_at',
            // 'updated_at',
            // 'registration_ip',
            // 'last_login_at',
             'name',
             'userdep.name',
             'userpos.name',
            // 'role',
            // 'status',
            // 'password_reset_token',            

            [
                'class' => 'yii\grid\ActionColumn',
                'options'=>['style'=>'width: 80px;'],
                'template'=>'<div class="btn-group btn-group-sm" role="group" aria-label="...">{update}</div>',
                'buttons'=>[
                    'update'=>function($url,$model,$key){
                        return Html::a('<i class="glyphicon glyphicon-edit"></i>',['updateusers','id'=>$model->id],['class'=>'btn btn-info']);
                    }
                ],
                
             ],
        ],
    ]); ?>
</div>
