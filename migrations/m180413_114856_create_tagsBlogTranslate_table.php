<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tagsBlogTranslate`.
 */
class m180413_114856_create_tagsBlogTranslate_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tagsBlogTranslate}}', [
            'id' => $this->primaryKey(),
            'language' => $this->char(20),
            'value' => $this->text(),
            'id_tag' => $this->integer(),
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tagsBlogTranslate}}');
    }
}
