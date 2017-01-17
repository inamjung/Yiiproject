<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Technicians */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="technicians-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->widget(kartik\widgets\Select2::className(),[
        'data'=>  \yii\helpers\ArrayHelper::map(\app\models\Customers::find()->all(), 'id', 'name'),
        'options'=>[
            'placeholder'=>'<--ระบุรายชื่อ--->'
        ],
        'pluginOptions'=>[
            'allowClear'=>true
        ]
    ]) ?>

    <?= $form->field($model, 'speciallist')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
