<?php

use yii\db\Migration;

/**
 * Handles the creation of table `translate`.
 */
class m180412_120450_create_translate_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('translate', [
            'id' => $this->primaryKey(),
            'translate' => $this->text(),
            'language' => $this->char(40),
            'id_post' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('translate');
    }
}
