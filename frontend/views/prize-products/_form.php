<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PrizeProducts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prize-products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('商品名称') ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6])->label('描述') ?>

    <?= $form->field($model, 'price')->textInput()->label('价格') ?>

    <?= $form->field($model, 'num')->textInput()->label('数量') ?>

    <?= $form->field($model, 'prize_category_id')->textInput()->label('商品分类') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '添加' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
