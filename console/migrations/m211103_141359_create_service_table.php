<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service}}`.
 */
class m211103_141359_create_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%service}}', [
            'id' => $this->primaryKey(),
            'parent_id' => $this->integer(10)->defaultValue(0),
            'name' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service}}');
    }
}
