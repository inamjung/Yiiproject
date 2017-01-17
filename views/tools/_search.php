<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ToolsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tools-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'tooltype_id') ?>

    <?= $form->field($model, 'department_id') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'buy_date') ?>

    <?php // echo $form->field($model, 'picture') ?>

    <?php // echo $form->field($model, 'exp_date') ?>

    <?php // echo $form->field($model, 'use') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
