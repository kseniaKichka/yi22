<?php

use yii\db\Migration;

/**
 * Class m180505_180424_create_table_postTagBlog
 */
class m180505_180424_create_table_postTagBlog extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%postTagBlog}}', [
            'id' => $this->primaryKey(),
            'id_tag' => $this->integer(),
            'id_blog' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%postTagBlog}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180505_180424_create_table_postTagBlog cannot be reverted.\n";

        return false;
    }
    */
}
