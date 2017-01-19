<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\report\models\SqljoinSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sqljoin-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cid') ?>

    <?= $form->field($model, 'pass') ?>

    <?= $form->field($model, 'fcttype_id') ?>

    <?= $form->field($model, 'colour_id') ?>

    <?php // echo $form->field($model, 'hn') ?>

    <?php // echo $form->field($model, 'an') ?>

    <?php // echo $form->field($model, 'ptname') ?>

    <?php // echo $form->field($model, 'ptage') ?>

    <?php // echo $form->field($model, 'diage') ?>

    <?php // echo $form->field($model, 'pps') ?>

    <?php // echo $form->field($model, 'pain') ?>

    <?php // echo $form->field($model, 'painnote') ?>

    <?php // echo $form->field($model, 'cc') ?>

    <?php // echo $form->field($model, 'pi') ?>

    <?php // echo $form->field($model, 'bt') ?>

    <?php // echo $form->field($model, 'pr') ?>

    <?php // echo $form->field($model, 'rr') ?>

    <?php // echo $form->field($model, 'bp') ?>

    <?php // echo $form->field($model, 'drugallergy') ?>

    <?php // echo $form->field($model, 'admit') ?>

    <?php // echo $form->field($model, 'dc') ?>

    <?php // echo $form->field($model, 'or') ?>

    <?php // echo $form->field($model, 'ordate') ?>

    <?php // echo $form->field($model, 'disease') ?>

    <?php // echo $form->field($model, 'receive') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'ptcate') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'hossub') ?>

    <?php // echo $form->field($model, 'tra') ?>

    <?php // echo $form->field($model, 'retng') ?>

    <?php // echo $form->field($model, 'retfo') ?>

    <?php // echo $form->field($model, 'colobag') ?>

    <?php // echo $form->field($model, 'lesion') ?>

    <?php // echo $form->field($model, 'lesioncare') ?>

    <?php // echo $form->field($model, 'recov') ?>

    <?php // echo $form->field($model, 'recovcare') ?>

    <?php // echo $form->field($model, 'oxygen') ?>

    <?php // echo $form->field($model, 'lr01') ?>

    <?php // echo $form->field($model, 'lr02') ?>

    <?php // echo $form->field($model, 'lr03') ?>

    <?php // echo $form->field($model, 'lr04') ?>

    <?php // echo $form->field($model, 'lr05') ?>

    <?php // echo $form->field($model, 'lr06') ?>

    <?php // echo $form->field($model, 'lr07') ?>

    <?php // echo $form->field($model, 'lr08') ?>

    <?php // echo $form->field($model, 'lr09') ?>

    <?php // echo $form->field($model, 'lr10') ?>

    <?php // echo $form->field($model, 'lrl01') ?>

    <?php // echo $form->field($model, 'lrl02') ?>

    <?php // echo $form->field($model, 'lrl03') ?>

    <?php // echo $form->field($model, 'lrl04') ?>

    <?php // echo $form->field($model, 'lrl05') ?>

    <?php // echo $form->field($model, 'lrl06') ?>

    <?php // echo $form->field($model, 'lrl07') ?>

    <?php // echo $form->field($model, 'lrl08') ?>

    <?php // echo $form->field($model, 'lr') ?>

    <?php // echo $form->field($model, 'lrl09') ?>

    <?php // echo $form->field($model, 'lrl10') ?>

    <?php // echo $form->field($model, 'lrl11') ?>

    <?php // echo $form->field($model, 'lrl12') ?>

    <?php // echo $form->field($model, 'lrl13') ?>

    <?php // echo $form->field($model, 'other') ?>

    <?php // echo $form->field($model, 'appdate') ?>

    <?php // echo $form->field($model, 'doctorapp') ?>

    <?php // echo $form->field($model, 'appdate2') ?>

    <?php // echo $form->field($model, 'doctorapp2') ?>

    <?php // echo $form->field($model, 'appdate3') ?>

    <?php // echo $form->field($model, 'doctorapp3') ?>

    <?php // echo $form->field($model, 'senddate') ?>

    <?php // echo $form->field($model, 'windpipe') ?>

    <?php // echo $form->field($model, 'insulin') ?>

    <?php // echo $form->field($model, 'equip') ?>

    <?php // echo $form->field($model, 'depart') ?>

    <?php // echo $form->field($model, 'hosin') ?>

    <?php // echo $form->field($model, 'officer') ?>

    <?php // echo $form->field($model, 'confirm') ?>

    <?php // echo $form->field($model, 'confirmfct') ?>

    <?php // echo $form->field($model, 'send') ?>

    <?php // echo $form->field($model, 'okcase') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'tmbpart') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'bloodgrp') ?>

    <?php // echo $form->field($model, 'pttype') ?>

    <?php // echo $form->field($model, 'moopart') ?>

    <?php // echo $form->field($model, 'bw') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'vstdate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
