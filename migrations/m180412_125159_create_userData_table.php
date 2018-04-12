<?php

use yii\db\Migration;

/**
 * Handles the creation of table `userData`.
 */
class m180412_125159_create_userData_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('userData', [
            'id' => $this->primaryKey(),
            'name' => $this->char(40),
            'soname' => $this->char(40),
            'dateBirth' => $this->date(),
            'id_user' => $this->integer(),
        ]);
        $this->createIndex('id_u','{{%user}}','id', true);
        $this->addForeignKey('id_user', '{{%userData}}', 'id_user', '{{%user}}', 'id', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('userData');
    }
}
