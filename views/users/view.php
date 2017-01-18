<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'email:email',
            'password_hash',
            'auth_key',
            'confirmation_token',
            'confirmation_sent_at',
            'confirmed_at',
            'unconfirmed_email:email',
            'recovery_token',
            'recovery_sent_at',
            'blocked_at',
            'registered_from',
            'logged_in_from',
            'logged_in_at',
            'created_at',
            'updated_at',
            'registration_ip',
            'last_login_at',
            'name',
            'department_id',
            'position_id',
            'role',
            'status',
            'password_reset_token',
        ],
    ]) ?>

</div>
