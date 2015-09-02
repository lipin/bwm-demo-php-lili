<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prize_records".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $number
 * @property integer $prize_product_id
 * @property integer $created_at
 * @property integer $updated_at
 */
class PrizeRecords extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prize_records';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'number', 'prize_product_id', 'created_at', 'updated_at'], 'integer'],
            [['created_at', 'updated_at'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'number' => 'Number',
            'prize_product_id' => 'Prize Product ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    public function getProduct()
    {
        return $this->hasOne(PrizeProducts::className(), ['id' => 'prize_product_id']);
    }
}
