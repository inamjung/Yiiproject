<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\risk\models\Risktypes */

$this->title = 'Create Risktypes';
$this->params['breadcrumbs'][] = ['label' => 'Risktypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="risktypes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
