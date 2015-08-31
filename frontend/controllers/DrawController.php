<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * Draw controller
 */
class DrawController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionStart (){
        $prize_arr = array(
            '0' => array('id'=>1,'prize'=>'iPhone 6plus','v'=>1),
            '1' => array('id'=>2,'prize'=>'iPadMini 3','v'=>5),
            '2' => array('id'=>3,'prize'=>'韩国城商品 吕 洗发水','v'=>10),
            '3' => array('id'=>4,'prize'=>'韩国城保湿面膜','v'=>12),
            '4' => array('id'=>5,'prize'=>'绑钻','v'=>22),
            '5' => array('id'=>6,'prize'=>'下次没准就能中哦','v'=>50),
        );
    //  A、iPhone 6plus 一台，1%中奖率。
    //	B、iPadMini 3 二台，3%中奖率
    //	C、韩国城商品 吕 洗发水 50套，10%中奖率。
    //	D、韩国城保湿面膜 300 盒，30%中奖率。
    //	E、绑钻 1000份，每份 10绑钻 ≈ 0.1元，56%中奖率。
    //	F、其他为未抽中奖品。

        foreach ($prize_arr as $key => $val) {
            $arr[$val['id']] = $val['v'];
        }
        $rid = $this->get_rand($arr); //根据概率获取奖项id

        $res['yes'] = $prize_arr[$rid-1]['prize']; //中奖项
        unset($prize_arr[$rid-1]); //将中奖项从数组中剔除，剩下未中奖项
        shuffle($prize_arr); //打乱数组顺序
        for($i=0;$i<count($prize_arr);$i++){
            $pr[] = $prize_arr[$i]['prize'];
        }
        $res['no'] = $pr;
        echo json_encode($res);
    }
    public function get_rand($proArr) {
        $result = '';
        //概率数组的总概率精度
        $proSum = array_sum($proArr);
        //概率数组循环
        foreach ($proArr as $key => $proCur) {
            $randNum = mt_rand(1, $proSum);
            if ($randNum <= $proCur) {
                $result = $key;
                break;
            } else {
                $proSum -= $proCur;
            }
        }
        unset ($proArr);

        return $result;
    }


}
