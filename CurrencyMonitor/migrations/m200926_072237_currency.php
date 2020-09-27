<?php

use yii\db\Migration;

/**
 * Class m200926_072237_currency
 */
class m200926_072237_currency extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('currency', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'rate' => $this->money(), //DECIMAL (19, 4)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('currency');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200926_072237_currency cannot be reverted.\n";

        return false;
    }
    */
}
