<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\checkbox\CheckboxX;
use yii\web\UploadedFile;

/* @var $this yii\web\View */
/* @var $model app\models\Tools */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tools-form">

    <?php $form = ActiveForm::begin(
            ['options'=>[
        'enctype'=>'multipart/form-data'
    ]]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_id')->widget(kartik\widgets\Select2::className(),[
        'data'=>  \yii\helpers\ArrayHelper::map(app\models\Companys::find()->all(), 'id', 'name'),
        'options'=>[
            'placeholder'=>'<--ระบุชื่อบริษัท--->'
        ],
        'pluginOptions'=>[
            'allowClear'=>true
        ]
    ]) ?>

    <?= $form->field($model, 'tooltype_id')->widget(kartik\widgets\Select2::className(),[
        'data'=>  \yii\helpers\ArrayHelper::map(app\models\Tooltypes::find()->all(), 'id', 'name'),
        'options'=>[
            'placeholder'=>'<--ระบุประเภท--->'
        ],
        'pluginOptions'=>[
            'allowClear'=>true
        ]
    ]) ?>

    <?= $form->field($model, 'department_id')->widget(kartik\widgets\Select2::className(),[
        'data'=>  \yii\helpers\ArrayHelper::map(\app\models\Departments::find()->all(), 'id', 'name'),
        'options'=>[
            'placeholder'=>'<--ระบุหน่วยงาน--->'
        ],
        'pluginOptions'=>[
            'allowClear'=>true
        ]
    ]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    
    <?= $form->field($model, 'buy_date')->widget(yii\jui\DatePicker::className(),[
                 'language'=>'th',
                 'dateFormat'=>'yyyy-MM-dd',
                 'clientOptions'=>[
                     'changeMonth'=>true,
                     'changeYear'=>true
                 ],
                 'options'=>['class'=>'form-control']
             ]) ?>

    <?= $form->field($model, 'picture')->textInput(['maxlength' => true]) ?>

    
    <?= $form->field($model, 'exp_date')->widget(yii\jui\DatePicker::className(),[
                 'language'=>'th',
                 'dateFormat'=>'yyyy-MM-dd',
                 'clientOptions'=>[
                     'changeMonth'=>true,
                     'changeYear'=>true
                 ],
                 'options'=>['class'=>'form-control']
             ]) ?>
    <?= $form->field($model, 'use')->widget(CheckboxX::classname(), [
                                'pluginOptions' => ['threeState' => false],
                            ]); ?>
   
     <hr>
            <?= $form->field($model, 'tool_img')->label('รูปภาพ')->fileInput() ?>       
       
       
    <?php if ($model->picture) { ?>
        <?= Html::img('toolpicture/' . $model->picture, ['class' => 'img-responsive img-circle', 'width' => '150px;']); ?>
    <?php } ?> 
    
   

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
