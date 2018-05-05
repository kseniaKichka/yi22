<?php

use yii\db\Migration;

/**
 * Class m180505_180400_drop_column_postBlog
 */
class m180505_180400_drop_column_postBlog extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%postBlog}}', 'id_tag');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180505_180400_drop_column_postBlog cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180505_180400_drop_column_postBlog cannot be reverted.\n";

        return false;
    }
    */
}
