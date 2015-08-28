<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prize_products".
 *
 * @property integer $id
 * @property string $name
 * @property string $content
 * @property double $price
 * @property integer $num
 * @property integer $prize_category_id
 * @property integer $created_at
 * @property integer $updated_at
 */
class PrizeProducts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prize_products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['price'], 'number'],
            [['num', 'prize_category_id', 'created_at', 'updated_at'], 'integer'],
            [['created_at', 'updated_at'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'content' => 'Content',
            'price' => 'Price',
            'num' => 'Num',
            'prize_category_id' => 'Prize Category ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
