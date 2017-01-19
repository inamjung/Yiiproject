<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\report\models\Sqljoin */

$this->title = 'Create Sqljoin';
$this->params['breadcrumbs'][] = ['label' => 'Sqljoins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sqljoin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
