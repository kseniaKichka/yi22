<?php

use yii\db\Migration;

/**
 * Handles the creation of table `aboutPage`.
 */
class m180401_060121_create_aboutPage_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('aboutPage', [
            'id' => $this->primaryKey(),
            'image' => $this->char(250),
            'descriptionPage' => $this->char(250),
            'leftColumn' => $this->text(),
            'centrColumn' => $this->text(),
            'rightColumn' => $this->text(),
            'titlePage' => $this->char(250),
            'bigText' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('aboutPage');
    }
}
