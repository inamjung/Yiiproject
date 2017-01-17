<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DepDrop;
/* @var $this yii\web\View */
/* @var $model app\models\Repairs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="repairs-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'createDate')->widget(yii\jui\DatePicker::className(),[
                 'language'=>'th',
                 'dateFormat'=>'yyyy-MM-dd',
                 'clientOptions'=>[
                     'changeMonth'=>true,
                     'changeYear'=>true
                 ],
                 'options'=>['class'=>'form-control',
                     'disabled'=>true
                     ]
             ]) ?>

    <?= $form->field($model, 'datenotuse')->widget(yii\jui\DatePicker::className(),[
                 'language'=>'th',
                 'dateFormat'=>'yyyy-MM-dd',
                 'clientOptions'=>[
                     'changeMonth'=>true,
                     'changeYear'=>true
                 ],
                 'options'=>['class'=>'form-control',
                     'disabled'=>true
                     ]
             ]) ?>

    <?= $form->field($model, 'department_id')->widget(kartik\widgets\Select2::className(),[
                'data'=>  \yii\helpers\ArrayHelper::map(\app\models\Departments::find()->all(), 'id', 'name'),
                'options'=>[
                    'placeholder'=>'<-- ระบุหน่วยงาน -->',
                    'disabled'=>true
                ],
                'pluginOptions'=>[
                    'allowClear'=>true
                ]
            ]) ?>   
    <?=
            $form->field($model, 'tool_id')->widget(DepDrop::className(), [
                        'data' => [$tool],
                        'options' => ['placeholder' => '<--เลือกรายการ-->','disabled'=>true],
                        'type' => DepDrop::TYPE_SELECT2,
                        'select2Options' => ['pluginOptions' => ['allowClear' => true]],
                        'pluginOptions' => [
                            'depends' => ['repairs-department_id'],            
                            'url' => yii\helpers\Url::to(['/repairs/get-tool']),
                            'loadingText' => 'Loading1...',
                        ],
                    ]);
            ?>

    <?= $form->field($model, 'problem')->textarea(['readonly'=>true,'rows' => 6]) ?>

    <?= $form->field($model, 'stage')->dropDownList([ 'รอได้ภายใน 3 วัน' => 'รอได้ภายใน 3 วัน', 'รอได้ภายใน 7 วัน' => 'รอได้ภายใน 7 วัน', 'รอได้ภายใน 1 วัน' => 'รอได้ภายใน 1 วัน', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'startdate')->widget(yii\jui\DatePicker::className(),[
                 'language'=>'th',
                 'dateFormat'=>'yyyy-MM-dd',
                 'clientOptions'=>[
                     'changeMonth'=>true,
                     'changeYear'=>true
                 ],
                 'options'=>['class'=>'form-control',
                     'disabled'=>true
                     ]
             ]) ?>

    <?= $form->field($model, 'satatus')->radioList([ 'รอรับงาน' => 'รอรับงาน', 'รับงานแล้ว' => 'รับงานแล้ว', ], ['prompt' => '']) ?>
    
    <?= $form->field($model, 'dateplan')->widget(yii\jui\DatePicker::className(),[
                 'language'=>'th',
                 'dateFormat'=>'yyyy-MM-dd',
                 'clientOptions'=>[
                     'changeMonth'=>true,
                     'changeYear'=>true
                 ],
                 'options'=>['class'=>'form-control',
                     'disabled'=>true
                     ]
             ]) ?>

    <?= $form->field($model, 'remark')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'answer')->radioList([ 'รอซ่อม' => 'รอซ่อม', 'กำลังซ่อม' => 'กำลังซ่อม', 'ซ่อมเสร็จแล้ว' => 'ซ่อมเสร็จแล้ว', 'ซ่อมไม่ได้' => 'ซ่อมไม่ได้', ], ['prompt' => '']) ?>
   
    <?= $form->field($model, 'enddate')->widget(yii\jui\DatePicker::className(),[
                 'language'=>'th',
                 'dateFormat'=>'yyyy-MM-dd',
                 'clientOptions'=>[
                     'changeMonth'=>true,
                     'changeYear'=>true
                 ],
                 'options'=>['class'=>'form-control',
                     'disabled'=>true
                     ]
             ]) ?>

    <?= $form->field($model, 'approve')->dropDownList([ 'อนุมัติ-ซ่อมเอง' => 'อนุมัติ-ซ่อมเอง', 'อนุมัติ-เคลม' => 'อนุมัติ-เคลม', 'อนุมัติ-ช่างนอก' => 'อนุมัติ-ช่างนอก', 'ไม่อนุมัติ' => 'ไม่อนุมัติ', 'รอพิจารณา' => 'รอพิจารณา', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'engineer_id')->widget(kartik\widgets\Select2::className(),[
                'data'=>  \yii\helpers\ArrayHelper::map(\app\models\Repairs::find()->all(), 'id', 
                        function($model,$defaultValue){
                            return $model->repairuser->username;
                             }),
                'options'=>[
                    'placeholder'=>'<-- ช่างผู้ซ่อม-->',                   
                ],
                'pluginOptions'=>[
                    'allowClear'=>true
                ]
            ]) ?>   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
