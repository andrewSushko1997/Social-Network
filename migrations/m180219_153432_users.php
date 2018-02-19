<?php

use yii\db\Migration;

/**
 * Class m180219_153432_users
 */
class m180219_153432_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function upp()
    {
        $this->createTable('user', array(
            'id'       => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'role'     => $this->string()->notNull()->defaultValue('user'),
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('orders');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180219_153432_users cannot be reverted.\n";

        return false;
    }
    */
}
