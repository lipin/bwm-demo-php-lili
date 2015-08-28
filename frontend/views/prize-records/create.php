<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PrizeRecords */

$this->title = 'Create Prize Records';
$this->params['breadcrumbs'][] = ['label' => 'Prize Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prize-records-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
