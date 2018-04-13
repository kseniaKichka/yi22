<?php

use yii\db\Migration;

/**
 * Handles the creation of table `postBlog`.
 */
class m180413_114703_create_postBlog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%postBlog}}', [
            'id' => $this->primaryKey(),
            'dateCreated' => $this->dateTime() . ' DEFAULT NOW()',
            'dateUpdated' => $this->timestamp(),
            'active' => $this->boolean(),
            'idAuthor' => $this->integer(),
            'id_tag' => $this->integer(),
            'id_category' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%postBlog}}');
    }
}
