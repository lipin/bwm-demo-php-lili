<?php

use yii\db\Migration;
use yii\db\Schema;
class m150828_012734_create_prize_products_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('prize_products', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING." NOT NULL DEFAULT ''",
            'content'=>Schema::TYPE_TEXT,
            'price'=>Schema::TYPE_FLOAT,
            'num'=>Schema::TYPE_INTEGER,
            'prize_category_id'=>Schema::TYPE_INTEGER,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('prize_products');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
