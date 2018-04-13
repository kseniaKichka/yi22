<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tagsBlog`.
 */
class m180413_114601_create_tagsBlog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tagsBlog}}', [
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
        $this->dropTable('{{%tagsBlog}}');
    }
}
