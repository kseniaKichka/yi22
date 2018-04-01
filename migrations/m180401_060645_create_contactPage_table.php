<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contactPage`.
 */
class m180401_060645_create_contactPage_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contactPage', [
            'id' => $this->primaryKey(),
            'titlePage' => $this->char(200),
            'smallTitlePage' => $this->char(200),
            'descriptionPage' => $this->text(),
            'coordinats' => $this->json()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('contactPage');
    }
}
