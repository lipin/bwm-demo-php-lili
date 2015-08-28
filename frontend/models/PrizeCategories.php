<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prize_categories".
 *
 * @property integer $id
 * @property string $name
 * @property double $probability
 * @property integer $created_at
 * @property integer $updated_at
 */
class PrizeCategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prize_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['probability'], 'number'],
            [['created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
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
            'probability' => 'Probability',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
