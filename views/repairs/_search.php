<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RepairsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="repairs-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'department_id') ?>

    <?= $form->field($model, 'datenotuse') ?>

    <?= $form->field($model, 'tool_id') ?>

    <?= $form->field($model, 'problem') ?>

    <?php // echo $form->field($model, 'stage') ?>

    <?php // echo $form->field($model, 'startdate') ?>

    <?php // echo $form->field($model, 'satatus') ?>

    <?php // echo $form->field($model, 'dateplan') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'answer') ?>

    <?php // echo $form->field($model, 'enddate') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'createDate') ?>

    <?php // echo $form->field($model, 'updateDate') ?>

    <?php // echo $form->field($model, 'approve') ?>

    <?php // echo $form->field($model, 'engineer_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
