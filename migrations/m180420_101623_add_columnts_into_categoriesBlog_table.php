<?php

use yii\db\Migration;

/**
 * Class m180420_101623_add_columnts_into_categoriesBlog_table
 */
class m180420_101623_add_columnts_into_categoriesBlog_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%categoryBlog}}', 'alias', $this->char(40));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180420_101623_add_columnts_into_categoriesBlog_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180420_101623_add_columnts_into_categoriesBlog_table cannot be reverted.\n";

        return false;
    }
    */
}
