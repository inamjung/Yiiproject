<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\risk\models\Risktypes */

$this->title = 'Update Risktypes: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Risktypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="risktypes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
