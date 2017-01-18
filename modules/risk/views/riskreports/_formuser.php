<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use app\modules\risk\models\Clinics;
use app\modules\risk\models\Programes;
use app\modules\risk\models\Risktypes;
use kartik\widgets\DepDrop;
use kartik\checkbox\CheckboxX;
use kartik\widgets\FileInput;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\modules\risk\models\Riskreports */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="riskreports-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-sm-offset-6 col-sm-4">
            <?=
                $form->field($model, 'date')->widget(yii\jui\DatePicker::className(),[
                 'language'=>'th',
                 'dateFormat'=>'yyyy-MM-dd',
                 'clientOptions'=>[
                     'changeMonth'=>true,
                     'changeYear'=>true
                 ],
                 'options'=>['class'=>'form-control']
             ]) ?>
        </div>
    </div>    
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
                <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
                <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
        </div>
    </div>  
    <div class="row">    
        <div class="col-xs-5 col-sm-5 col-md-5" style="display: none">
            <?=
            $form->field($model, 'clinic_id')->widget(Select2::className(), ['data' => 
                        ArrayHelper::map(Clinics::find()->all(), 'id', 'name'),
                        'options' => [
                        'placeholder' => '<--คลิกเลือกประเภทคลินิก-->'],                        
                        'pluginOptions' =>
                        [
                            'allowClear' => true
                        ],
                    ]);
            ?>
        </div>
        <div class="col-xs-7 col-sm-7 col-md-7" style="display: none">
            <?=
            $form->field($model, 'programe_id')->widget(DepDrop::className(), [
                        'data' => [$programe],
                        'options' => ['placeholder' => '<--คลิกเลือกหรือพิมพ์ชื่อโปรแกรม-->'],
                        'type' => DepDrop::TYPE_SELECT2,
                        'select2Options' => ['pluginOptions' => ['allowClear' => true]],
                        'pluginOptions' => [
                            'depends' => ['riskreports-clinic_id'],            
                            'url' => yii\helpers\Url::to(['/risk/riskreports/get-programe']),
                            'loadingText' => 'Loading1...',
                        ],
                    ]);
            ?>
        </div>        
    </div>
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12" style="display: none">
            <?=
            $form->field($model, 'risktype_id')->widget(DepDrop::className(), [
                        'data' => [$risktype],
                        'options' => ['placeholder' => '<--คลิกเลือกหรือพิมพ์รายการความเสี่ยง-->',
                            'disabled'=>true, 
                            ],                        
                        'type' => DepDrop::TYPE_SELECT2,
                        'select2Options' => ['pluginOptions' => ['allowClear' => true]],
                        'pluginOptions' => [
                            'depends' => ['riskreports-clinic_id', 'riskreports-programe_id'],            
                            'url' => yii\helpers\Url::to(['/risk/riskreports/get-risktype']),
                            'loadingText' => 'Loading2...',
                        ],
                    ]);
            ?>
        </div>         
    </div> 
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-12">
            <?= $form->field($model, 'namecode')->label('ระดับความรุนแรง')->radioList(app\modules\risk\models\Riskreports::itemAlias('namecode')) ?>
    </div>
    </div>
    
    <div class="row">
               
        <div class="col-xs-3 col-sm-3 col-md-4">
            <?=
            $form->field($model, 'department_id')->widget(Select2::className(), ['data' => 
                ArrayHelper::map(\app\models\Departments::find()->orderBy('name')->all(), 'id', 'name'),
                    'options' => [
                       
                    'placeholder' => '<--คลิกเลือกหรือพิมพ์แผนกที่รายงาน-->'],
                    'pluginOptions' => [
                        'allowClear' => true,
                        ],
                ]);
            ?>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-4">
            <?=
            $form->field($model, 'user_id_report')->widget(DepDrop::className(), [
                    'data' => [$userrisk],
                    'options' => ['placeholder' => '<--คลิกเลือกหรือพิมพ์ชื่อผู้รายงาน-->'],
                    'type' => DepDrop::TYPE_SELECT2,
                    'select2Options' => ['pluginOptions' => ['allowClear' => true]],
                    'pluginOptions' => [
                        'depends' => ['riskreports-department_id'],            
                        'url' => yii\helpers\Url::to(['/risk/riskreports/get-user']),
                        'loadingText' => 'Loading1...',
                    ],
                ]);
            ?>
        </div>     
        <div class="col-xs-3 col-sm-3 col-md-4">
            <?=
            $form->field($model, 'department_id_risk')->widget(Select2::className(), ['data' => 
                ArrayHelper::map(app\models\Departments::find()->orderBy('name')->all(), 'id', 'name'),
                    'options' => [
                    'placeholder' => '<--คลิกเลือกหรือพิมพ์แผนกที่รายงาน-->'],
                    'pluginOptions' => [
                        'allowClear' => true,],
                ]);
            ?>
           
        </div>
        </div>
<div class="row">
        <div class="col-xs-3 col-sm-3 col-md-12">
            <?= $form->field($model, 'sufferer')->label('ผู้เสียหาย')->inline()->radioList(app\modules\risk\models\Riskreports::itemAlias('sufferer')) ?>
            
</div>
 </div>   
<div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'edit')->label('การแก้ไขเบื้องต้น')->inline()->radioList(app\modules\risk\models\Riskreports::itemAlias('edit')) ?>
            
        </div>
         <div class="col-xs-3 col-sm-3 col-md-9">
            <?= $form->field($model, 'edit_begin')->textarea(['rows' => 5]) ?>
        </div>  
</div>
<div class="row">         
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?= $form->field($model, 'money')->textInput() ?>
        </div>
         <div class="col-xs-3 col-sm-3 col-md-9">
            <?= $form->field($model, 'moneydetail')->textInput(['maxlength' => 500]) ?>
        </div>
     </div>
<div class="row">         
        <div class="col-xs-3 col-sm-3 col-md-12">
            <?= $form->field($model, 'how')->label('แหล่งที่มาของความเสี่ยง')->inline()->radioList(app\modules\risk\models\Riskreports::itemAlias('how')) ?>
            
        </div> 
</div>
</div> 
</div> 
    
    
  <div class="panel panel-danger">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h4><i class="fa fa-share"></i> คลิกบันทึกในส่วนนี้ ถ้ามีการทบทวน</h4>
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="accordion-body collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <div class="row">
                    <div class="col-sm-offset-1 col-sm-9">
                        <?php
                            echo $form->field($model, 'review')->widget(CheckboxX::classname(), [
                                'pluginOptions' => ['threeState' => false],
                            ])->label('ยืนยันการทบทวน');
                            ?>
                    </div>
        </div>
        <div class="row">            
                    <div class="col-sm-offset-1 col-sm-3">
                        <?=
                        $form->field($model, 'reviewdate')->widget(yii\jui\DatePicker::className(),[
                 'language'=>'th',
                 'dateFormat'=>'yyyy-MM-dd',
                 'clientOptions'=>[
                     'changeMonth'=>true,
                     'changeYear'=>true
                 ],
                 'options'=>['class'=>'form-control']
             ]) ?>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <?= $form->field($model, 'reviewteam')->textInput(['maxlength' => 255]) ?>
                    </div>
        </div>
            <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-5">
                        <?= $form->field($model, 'reviewdetail')->textarea(['rows' => 6]) ?>
                    </div>
                    
            </div>
      </div>
    </div>
  </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
