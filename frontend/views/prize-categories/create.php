<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PrizeCategories */

$this->title = 'Create Prize Categories';
$this->params['breadcrumbs'][] = ['label' => 'Prize Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prize-categories-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
