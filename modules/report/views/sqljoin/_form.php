<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\report\models\Sqljoin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sqljoin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pass')->passwordInput() ?>

    <?= $form->field($model, 'fcttype_id')->textInput() ?>

    <?= $form->field($model, 'colour_id')->textInput() ?>

    <?= $form->field($model, 'hn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'an')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ptname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ptage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'painnote')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'drugallergy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'admit')->textInput() ?>

    <?= $form->field($model, 'dc')->textInput() ?>

    <?= $form->field($model, 'or')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ordate')->textInput() ?>

    <?= $form->field($model, 'disease')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receive')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ptcate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hossub')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'retng')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'retfo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'colobag')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lesion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lesioncare')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recov')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recovcare')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'oxygen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lr01')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lr02')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lr03')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lr04')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lr05')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lr06')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lr07')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lr08')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lr09')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lr10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lrl01')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lrl02')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lrl03')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lrl04')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lrl05')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lrl06')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lrl07')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lrl08')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lrl09')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lrl10')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lrl11')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lrl12')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lrl13')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'appdate')->textInput() ?>

    <?= $form->field($model, 'doctorapp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'appdate2')->textInput() ?>

    <?= $form->field($model, 'doctorapp2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'appdate3')->textInput() ?>

    <?= $form->field($model, 'doctorapp3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'senddate')->textInput() ?>

    <?= $form->field($model, 'windpipe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'insulin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'equip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'depart')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hosin')->textInput() ?>

    <?= $form->field($model, 'officer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'confirm')->textInput() ?>

    <?= $form->field($model, 'confirmfct')->textInput() ?>

    <?= $form->field($model, 'send')->textInput() ?>

    <?= $form->field($model, 'okcase')->textInput() ?>

    <?= $form->field($model, 'birthday')->textInput() ?>

    <?= $form->field($model, 'tmbpart')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bloodgrp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pttype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'moopart')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bw')->textInput() ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'vstdate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
