<?php

use Phpmig\Migration\Migration;

class CreateUserInvestments extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {

        $sql = 'CREATE TABLE user_investments (
                  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                  user_id INT(11), 
                  investment_id INT(11),
                  current_balance DECIMAL (20,10)
                );';

        $container = $this->getContainer();
        $container['db']->query($sql);

    }

    /**
     * Undo the migration
     */
    public function down()
    {

        $sql = 'DROP TABLE `user_investments`';
        $container = $this->getContainer();
        $container['db']->query($sql);

    }
}
