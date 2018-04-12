<?php

use yii\db\Migration;

/**
 * Class m180412_123640_add_columnts_into_aboutPage_table
 */
class m180412_123640_add_columnts_into_aboutPage_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('aboutPage', 'date', $this->timestamp());
        $this->addColumn('aboutPage', 'language', $this->char(40));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180412_123640_add_columnts_into_aboutPage_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180412_123640_add_columnts_into_aboutPage_table cannot be reverted.\n";

        return false;
    }
    */
}
