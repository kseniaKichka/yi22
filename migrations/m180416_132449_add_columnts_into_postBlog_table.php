<?php

use yii\db\Migration;

/**
 * Class m180416_132449_add_columnts_into_postBlog_table
 */
class m180416_132449_add_columnts_into_postBlog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%postBlog}}', 'alias', $this->char(40));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180416_132449_add_columnts_into_postBlog_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180416_132449_add_columnts_into_postBlog_table cannot be reverted.\n";

        return false;
    }
    */
}
