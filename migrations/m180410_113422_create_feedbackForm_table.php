<?php

use yii\db\Migration;

/**
 * Handles the creation of table `feedbackForm`.
 */
class m180410_113422_create_feedbackForm_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('feedbackForm', [
            'id' => $this->primaryKey(),
            'fullname' => $this->char(250),
            'email' => $this->char(250),
            'message' => $this->text(),
            'datetime' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('feedbackForm');
    }
}
