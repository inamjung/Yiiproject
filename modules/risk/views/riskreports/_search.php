<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\risk\models\RiskreportsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="riskreports-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date') ?>

    <?= $form->field($model, 'clinic_id') ?>

    <?= $form->field($model, 'programe_id') ?>

    <?= $form->field($model, 'risktype_id') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'namecode') ?>

    <?php // echo $form->field($model, 'sufferer') ?>

    <?php // echo $form->field($model, 'edit') ?>

    <?php // echo $form->field($model, 'user_id_report') ?>

    <?php // echo $form->field($model, 'department_id') ?>

    <?php // echo $form->field($model, 'department_id_risk') ?>

    <?php // echo $form->field($model, 'edit_begin') ?>

    <?php // echo $form->field($model, 'money') ?>

    <?php // echo $form->field($model, 'moneydetail') ?>

    <?php // echo $form->field($model, 'how') ?>

    <?php // echo $form->field($model, 'review') ?>

    <?php // echo $form->field($model, 'reviewdate') ?>

    <?php // echo $form->field($model, 'reviewdetail') ?>

    <?php // echo $form->field($model, 'reviewteam') ?>

    <?php // echo $form->field($model, 'approve') ?>

    <?php // echo $form->field($model, 'qaapprove') ?>

    <?php // echo $form->field($model, 'review_in') ?>

    <?php // echo $form->field($model, 'review_by') ?>

    <?php // echo $form->field($model, 'review_dateline') ?>

    <?php // echo $form->field($model, 'qateam') ?>

    <?php // echo $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'covenant') ?>

    <?php // echo $form->field($model, 'docs') ?>

    <?php // echo $form->field($model, 'ref') ?>

    <?php // echo $form->field($model, 'complete') ?>

    <?php // echo $form->field($model, 'createDate') ?>

    <?php // echo $form->field($model, 'updateDate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
