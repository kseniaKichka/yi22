<?php

use yii\db\Migration;

/**
 * Class m180413_133736_add_columnts_into_translate_table
 */
class m180413_133736_add_columnts_into_translate_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%translate}}', 'title', $this->char(40));
        $this->addColumn('{{%translate}}', 'summary', $this->char(250));
        $this->addColumn('{{%translate}}', 'text', $this->char(250));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180413_133736_add_columnts_into_translate_table cannot be reverted.\n";

//        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180413_133736_add_columnts_into_translate_table cannot be reverted.\n";

        return false;
    }
    */
}
