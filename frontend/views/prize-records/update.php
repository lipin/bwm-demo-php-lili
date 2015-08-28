<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PrizeRecords */

$this->title = 'Update Prize Records: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Prize Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prize-records-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
