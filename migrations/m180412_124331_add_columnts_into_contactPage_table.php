<?php

use yii\db\Migration;

/**
 * Class m180412_124331_add_columnts_into_contactPage_table
 */
class m180412_124331_add_columnts_into_contactPage_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('contactPage', 'date', $this->timestamp());
        $this->addColumn('contactPage', 'language', $this->char(40));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180412_124331_add_columnts_into_contactPage_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180412_124331_add_columnts_into_contactPage_table cannot be reverted.\n";

        return false;
    }
    */
}
