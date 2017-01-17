<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Repairs */

$this->title = 'Create Repairs';
$this->params['breadcrumbs'][] = ['label' => 'Repairs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repairs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
