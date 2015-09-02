<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PrizeRecordsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prize Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prize-records-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Prize Records', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'number',
            [
                'attribute'=>'prize_product_id',
                'label'=>'名称',
                'value' => 'product.name',
            ],
            [
                'attribute'=> 'created_at',
                'label'=>'创建时间',
                'format'=>['date', 'php:Y-m-d  H:i:s']
            ],
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn','header'=>"操作"],
        ],
    ]); ?>

</div>
