<?php

use yii\db\Migration;

/**
 * Class m210114_132450_review
 */
class m210114_132450_review extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('review', [
            'id' => $this->primaryKey(),
            'critic_id' => $this->integer(),
            'body' => $this->string(450),
            'name' => $this->string(),
        ]);

        $this->addForeignKey('fk_critic_id','review','critic_id','critic','id','CASCADE','CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('review');
        //$this->dropForeignKey('fk_critic_id','review');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210114_132450_review cannot be reverted.\n";

        return false;
    }
    */
}
