<?php

use yii\db\Migration;

/**
 * Handles the creation of table `categoryBlogTranslate`.
 */
class m180413_114845_create_categoryBlogTranslate_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%categoryBlogTranslate}}', [
            'id' => $this->primaryKey(),
            'language' => $this->char(20),
            'title' => $this->char(40),
            'summary' => $this->char(200),
            'id_category' => $this->integer(),
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%categoryBlogTranslate}}');
    }
}
