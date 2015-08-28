<?php

use yii\db\Migration;
use yii\db\Schema;
class m150828_021125_create_prize_records_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('prize_records', [
            'id' => Schema::TYPE_PK,
            'user_id'=>Schema::TYPE_INTEGER,
            'number'=>Schema::TYPE_INTEGER,
            'prize_product_id'=>Schema::TYPE_INTEGER,
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('prize_records');
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
