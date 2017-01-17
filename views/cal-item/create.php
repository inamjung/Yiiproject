<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CalItem */

$this->title = 'Create Cal Item';
$this->params['breadcrumbs'][] = ['label' => 'Cal Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cal-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
