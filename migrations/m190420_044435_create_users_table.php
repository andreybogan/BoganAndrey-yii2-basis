<?php

use yii\db\Migration;

/**
 * Handles the creation of table users.
 */
class m190420_044435_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(56)->notNull(),
            'second_name' => $this->string(56)->notNull(),
            'login' => $this->string(56)->notNull(),
            'password' => $this->string()->notNull(),
            'email' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
