<?php

use yii\db\Migration;

/**
 * Handles the creation of table `categoryBlog`.
 */
class m180413_114645_create_categoryBlog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%categoryBlog}}', [
            'id' => $this->primaryKey(),
            'dateCreated' => $this->dateTime() . ' DEFAULT NOW()',
            'dateUpdated' => $this->timestamp(),
            'active' => $this->boolean(),
            'idAuthor' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%categoryBlog}}');
    }
}
