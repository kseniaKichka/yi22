<?php

use yii\db\Migration;

/**
 * Class m180413_120023_create_postBlog_index
 */
class m180413_120023_create_postBlog_index extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex('id_t','{{%postBlog}}','id', true);
        $this->addForeignKey('id_post', '{{%translate}}', 'id_post', '{{%postBlog}}', 'id', 'CASCADE');

        $this->createIndex('id_c','{{%categoryBlog}}','id', true);
        $this->addForeignKey('id_category', '{{%categoryBlogTranslate}}', 'id_category', '{{%categoryBlog}}', 'id', 'CASCADE');

        $this->createIndex('id_t','{{%tagsBlog}}','id', true);
        $this->addForeignKey('id_tag', '{{%tagsBlogTranslate}}', 'id_tag', '{{%tagsBlog}}', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180413_120023_create_postBlog_index cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180413_120023_create_postBlog_index cannot be reverted.\n";

        return false;
    }
    */
}
