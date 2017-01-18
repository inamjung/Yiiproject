<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'confirmation_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'confirmation_sent_at')->textInput() ?>

    <?= $form->field($model, 'confirmed_at')->textInput() ?>

    <?= $form->field($model, 'unconfirmed_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recovery_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recovery_sent_at')->textInput() ?>

    <?= $form->field($model, 'blocked_at')->textInput() ?>

    <?= $form->field($model, 'registered_from')->textInput() ?>

    <?= $form->field($model, 'logged_in_from')->textInput() ?>

    <?= $form->field($model, 'logged_in_at')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'registration_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_login_at')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department_id')->textInput() ?>

    <?= $form->field($model, 'position_id')->textInput() ?>

    <?= $form->field($model, 'role')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_reset_token')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
