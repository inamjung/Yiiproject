<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\risk\models\Riskreports */

$this->title = 'Create Riskreports';
//$this->params['breadcrumbs'][] = ['label' => 'Riskreports', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riskreports-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    $this->render('_formuser', [
        'model' => $model,
        'programe' => [],
        'risktype' => [],
        'userrisk' => [],
    ])
    ?>

</div>
