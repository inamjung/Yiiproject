<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cal */

$this->title = 'Create Cal';
$this->params['breadcrumbs'][] = ['label' => 'Cals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
