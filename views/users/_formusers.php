<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\UploadedFile;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(['options'=>[
        'enctype'=>'multipart/form-data'
    ]]); ?>

    <?= $form->field($model, 'username')->label('ชื่อเข้าใช้งาน')->textInput(['readonly'=>true,'maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['readonly'=>true,'maxlength' => true]) ?>

   

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department_id')->widget(\kartik\widgets\Select2::className(),[
        'data'=> yii\helpers\ArrayHelper::map(\app\models\Departments::find()->all(), 'id', 'name'),
        'options'=>[
            'placeholder'=>'<--ระบุแผนก-->'
        ],
        'pluginOptions'=>[
            'allowClear'=>true
        ]
    ])?>

    <?= $form->field($model, 'position_id')->widget(\kartik\widgets\Select2::className(),[
        'data'=> yii\helpers\ArrayHelper::map(\app\models\Positions::find()->all(), 'id', 'name'),
        'options'=>[
            'placeholder'=>'<--ระบุตำแหน่ง-->'
        ],
        'pluginOptions'=>[
            'allowClear'=>true
        ]
    ])?>

    <?= $form->field($model, 'role')->dropDownList(['10'=>'admin','20'=>'editor','30'=>'user'])?>

    <hr>
    <?= $form->field($model, 'avatar_img')->label('รูปประจำตัว')->fileInput()?>
    <?php if ($model->avatar) { ?>
        <?= Html::img('avatars/' . $model->avatar, ['class' => 'img-responsive img-circle', 'width' => '150px;']); ?>
    <?php } ?> 

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : '<i class="glyphicon glyphicon-ok"></i> บันทึกการแก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
