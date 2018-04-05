<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m180405_035626_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'login	' => $this->char(200),
            'email' => $this->char(200),
            'password' => $this->char(200),
            'auth_key' => $this->char(200),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
