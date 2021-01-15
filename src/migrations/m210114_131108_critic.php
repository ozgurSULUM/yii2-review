<?php
use \yii\db\Schema;
use yii\db\Migration;

/**
 * Class m210114_131108_critic
 */
class m210114_131108_critic extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('critic', [
            'id' => Schema::TYPE_PK,
            'username' => $this->string(),
            'email' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('critic');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210114_131108_critic cannot be reverted.\n";

        return false;
    }
    */
}
