<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\grid\GridView;

/* @var $this yii\web\View */
AppAsset::addCss($this,'@web/css/flop.css');
AppAsset::addCss($this,'@web/css/demo.css');
AppAsset::addScript($this,'@web/js/demo.js');
AppAsset::addScript($this,'@web/js/jquery.flip.min.js');
$this->title = '翻牌抽奖';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prize-products-index">
    <h2 class="top_title" ><?= Html::encode($this->title) ?></h2>
</div>

<div id="main">
    <div class="demo">
        <p style="padding-left: 40px;">
            一等奖：iPhone 6plus 一台，1%中奖率。<br>
            二等奖：iPadMini 3 二台，3%中奖率<br>
            三等奖：韩国城商品 吕 洗发水 50套，10%中奖率。<br>
            四等奖：韩国城保湿面膜 300 盒，30%中奖率。<br>
            五等奖：绑钻 1000份，每份 10绑钻 ≈ 0.1元，56%中奖率。<br>
            其他：为未抽中奖品。<br>
            点击数字方块，翻转即抽奖，快来试下你的手气吧。<br>
        </p>
        <ul id="prize">
            <li class="red" title="点击抽奖">1</li>
            <li class="green" title="点击抽奖">2</li>
            <li class="blue" title="点击抽奖">3</li>
            <li class="purple" title="点击抽奖">4</li>
            <li class="olive" title="点击抽奖">5</li>
            <li class="brown" title="点击抽奖">6</li>
        </ul>
        <div style="clear:both; margin-top:20px">
            <a href="javascript:void(0)" id="viewother" style="display: none;">【翻开其他】</a>
            <a href="javascript:void(0);" id="repeat">【再来一次】</a></div>
        <div id="data"></div>

    </div>
    <div id="footer">
        <span>©2015 Srui</span>&nbsp;
        <span>抽奖Demo</span>
    </div>
</div>
