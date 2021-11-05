<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bid_service}}`.
 */
class m211104_131425_create_bid_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bid_service}}', [
            'id' => $this->primaryKey(),
            'service_id' => $this->integer(),
            'bid_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bid_service}}');
    }
}
