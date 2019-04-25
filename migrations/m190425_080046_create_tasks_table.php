<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tasks}}`.
 */
class m190425_080046_create_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tasks', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'date' => $this->dateTime()->notNull(),
            'description' => $this->text(),
            'responsible_id' => $this->integer()
        ]);

        $this->createIndex('ix_task_responsible_id', 'tasks', 'responsible_id');

        $this->addForeignKey(
            'fk_task_user_responsible',
            'tasks',
            'responsible_id',
            'users',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tasks');
        $this->dropIndex('ix_task_responsible_id', 'tasks');
        $this->dropForeignKey('fk_task_user_responsible', 'tasks');
    }
}
