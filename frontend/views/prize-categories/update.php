<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PrizeCategories */

$this->title = 'Update Prize Categories: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Prize Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prize-categories-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
