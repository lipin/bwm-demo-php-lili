<?php
namespace frontend\controllers;

use app\models\PrizeRecords;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\PrizeProducts;
use app\models\PrizeCategories;

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

        $prizes = PrizeProducts::find()->select(['id', 'name','prize_category_id'])->all();
        foreach($prizes as $k =>$v){
            $prize_arr[$k]['id'] = $v->id;
            $prize_arr[$k]['prize'] = $v->name;
            $prize_arr[$k]['v'] = PrizeCategories::findOne($v->prize_category_id)->probability;
        }
        foreach ($prize_arr as $key => $val) {
            $arr[$val['id']] = $val['v'];
        }
        $time = strtotime('2015-09-09');
        $start_time =strtotime(date('Y-m-d', time()));
        $date = $time -$start_time;

        $rid = $this->get_rand($arr); //根据概率获取奖项id
        //控制大奖出现时间范围
        if($date != 86400 && $rid == 1){
            $rid = 6;
        }

        $res['yes'] = $prize_arr[$rid-1]['prize']; //中奖项
        //中奖奖记录
        if($rid != count($prize_arr)) {
            $prize_record = new PrizeRecords();
            $prize_record->prize_product_id = $rid;
            $prize_record->user_id = 1;
            $prize_record->created_at = time();
            $prize_record->updated_at = time();
            $prize_record->save();
        }

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
            $randNum = mt_rand(0, $proSum);
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
