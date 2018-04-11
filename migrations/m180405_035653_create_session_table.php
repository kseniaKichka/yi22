<?php

use yii\db\Migration;

/**
 * Handles the creation of table `session`.
 */
class m180405_035653_create_session_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('session', [
            'id' => $this->char(40),
            'expire' => $this->primaryKey(),
            'data' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('session');
    }
}
