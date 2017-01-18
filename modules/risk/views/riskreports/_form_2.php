<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\risk\models\Riskreports */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="riskreports-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'clinic_id')->textInput() ?>

    <?= $form->field($model, 'programe_id')->textInput() ?>

    <?= $form->field($model, 'risktype_id')->textInput() ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'namecode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sufferer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id_report')->textInput() ?>

    <?= $form->field($model, 'department_id')->textInput() ?>

    <?= $form->field($model, 'department_id_risk')->textInput() ?>

    <?= $form->field($model, 'edit_begin')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'money')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'moneydetail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'how')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'review')->textInput() ?>

    <?= $form->field($model, 'reviewdate')->textInput() ?>

    <?= $form->field($model, 'reviewdetail')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'reviewteam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'approve')->textInput() ?>

    <?= $form->field($model, 'qaapprove')->textInput() ?>

    <?= $form->field($model, 'review_in')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'review_by')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'review_dateline')->textInput() ?>

    <?= $form->field($model, 'qateam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'covenant')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'docs')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'complete')->textInput() ?>

    <?= $form->field($model, 'createDate')->textInput() ?>

    <?= $form->field($model, 'updateDate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
